
var noti = document.querySelector('.cart-items');
var select = document.querySelector('.select');
var button = document.getElementsByClassName('btn-item');
for (but of button)
{
    but.addEventListener('click', (e)=>{
        var add = Number(noti.getAttribute('data-count')|| 0);
        noti.setAttribute('data-count', add + 1);
        noti.classList.add('zero');

        var parent = e.target.parentNode;
        var clone = parent.cloneNode(true);
        select.appendChild(clone);
        clone.lastElementChild.innerText = "Remove";
        if (clone) {
            noti.onclick =()=>{
                select.classList.toggle('display');
            }
        }
    })

}



//cart
let cartIcon =document.querySelector("#cart-icon");
let cart = document.querySelector(".order-cart");
let closecart=document.querySelector("#close-cart");

cartIcon.onclick =() =>{
    cart.classList.add("active");
};
closecart.onclick =() =>{
    cart.classList.remove("active");
};




const container =document.getElementById("container"); 
function classAdd() {
var element = document.getElementById("container");
element.classList.add("right-panel-active");
}
function classRemove(){
  var moment =document.getElementById("container");
  moment.classList.remove("right-panel-active");
}