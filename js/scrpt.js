var btncart=document.querySelector(".cart-i");
var cart=document.querySelector(".order-cart");
var remove=document.querySelector("#cart-close");
var btncart2=document.querySelector("#cart-icon");

btncart2.addEventListener('click',()=>{
    cart.classList.add('cart-active');
});

btncart.addEventListener('click',()=>{
    cart.classList.add('cart-active');
});
remove.addEventListener('click',()=>{
    cart.classList.remove('cart-active');
});

document.addEventListener('DOMContentLoaded',loadFood);

function loadFood(){
    loadContent();
}

function loadContent(){
    //Remove Food Item From cart
    let btnRemove = document.querySelectorAll('.cart-remove');

    btnRemove.forEach((btnR)=>{
        btnR.addEventListener('click',remoeItem);
    });

    //product Item change Event
    let qtyElement=document.querySelectorAll('.cart-quantity');
    qtyElement.forEach((input)=>{
        input.addEventListener('change',changeQty);
    });

    //product cart 
    let cartBtns=document.querySelectorAll('.add-cart');
    cartBtns.forEach((btn)=>{
        btn.addEventListener('click',addCart);
    });

    updateTotal();

}

//Remove Item
function remoeItem(){
if(confirm('Are Your Sure to Remove')){
    let title=this.parentElement.querySelector('.cart-food-title').innerHTML;
    itemList=itemList.filter(el=>el.title!=title);
    this.parentElement.remove();
    loadContent();
}
    
}


//change Quantity
function changeQty(){
    if(isNaN(this.value) || this.value<1){
        this.value=1;
    } 
    loadContent();
}

let itemList=[];

// Add cart
function addCart(){
    let food=this.parentElement;
    let title=food.querySelector('.food-title').innerHTML;
    let price=food.querySelector('.food-price').innerHTML;
    let imgSrc=food.querySelector('.food-img').src;

    let newProduct={title,price,imgSrc};

    //check product already in cart
    if(itemList.find((el)=>el.title==newProduct.title)){
        alert('Product Already added in cart');
        return;
    }else{
        itemList.push(newProduct);
    }

    let newProductElement=creatrCartProduct(title,price,imgSrc);
    let element=document.createElement('div');
    element.innerHTML=newProductElement;
    let cartBasket=document.querySelector('.cart-item');
    cartBasket.append(element);
    loadContent();

}

function creatrCartProduct(title,price,imgSrc){

    return `
    <div class="cart-box">
    <img src="${imgSrc}" class="cart-img" alt="cart-img">
    <div class="detail-box">
        <div class="cart-food-title">${title}</div>
        <div class="price-box">
        <div class="cart-price">${price}</div>
        <div class="cart-amt">${price}</div>
    </div>
    <input type="number" value="1" class="cart-quantity" name='qty'>
    </div>
    <ion-icon name="trash" class="cart-remove"></ion-icon>
</div>

`;
}


//Total calculation
function updateTotal()
{
    const cartItems=document.querySelectorAll('.cart-box');
    const totalValue=document.querySelector('.total-price');

    let total=0;

    cartItems.forEach(product=>{
        let priceElement=product.querySelector('.cart-price');
        let price=parseFloat(priceElement.innerHTML.replace("Rs.",""));
        let qty=product.querySelector('.cart-quantity').value;
        total+=(price*qty);
        console.log(price);
        product.querySelector('.cart-amt').innerText="Rs."+price*qty;
    });
    totalValue.innerHTML="Rs."+total;

    // Add Product Count in cart Icon

    const cartCount=document.querySelector('.cart-count');
    let Count=itemList.length;
    cartCount.innerHTML=Count;

    if(Count==0){
        cartCount.style.display='none';
    }
    else{
        cartCount.style.display='block';

    }

    const cartcount2=document.querySelector('.count2');
    let num=itemList.length;
    cartcount2.innerHTML=num;
    
    if(num==0){
        cartcount2.style.display='none';
    }
    else{
        cartcount2.style.display='block';
    }
    
}


/*
var deletebtn=document.querySelectorAll('.Deletebtn');

deletebtn.addEventListener('click',()=>{
    confirm("Are you sure!");
});

*/

