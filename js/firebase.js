 
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.22.1/firebase-app.js";
  import { getDatabase } from "https://www.gstatic.com/firebasejs/9.22.1/firebase-database.js";
  import { getAuth, createUserWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/9.22.1/firebase-auth.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  const firebaseConfig = {
    apiKey: "AIzaSyDgN92vDR7G1Xd586PqXBn7DJZJ_g9b6m8",
    authDomain: "food-login-94055.firebaseapp.com",
    databaseURL: "https://food-login-94055-default-rtdb.firebaseio.com",
    projectId: "food-login-94055",
    storageBucket: "food-login-94055.appspot.com",
    messagingSenderId: "1076174941155",
    appId: "1:1076174941155:web:c999f22e0dcdb20345ced6"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const database = getDatabase(app);
  const auth = getAuth();


  
    //set up our register function
    function register(){
        uname = document.getElementById('u-name').value;
        address = document.getElementById('u-address').value;
        email = document.getElementById('u-email').value;
        password = document.getElementById('u-password').value;

        //validate input fields
        if (validate_email(email) == true || validate_password(password) == true){
            alert("Email or Password is Empty")
            return
            // Don't contnue running the code
        }
        if(validate_field(uname) == false || validate_field(address) == false){
            alert('One or More Field is empty');
            return
        }

        //move on with Auth
        auth.createUserWithEmailAndPassword(email,password)
        .then(function(){
            var user = auth.currentUser

            var database_ref = database.ref()

            // Create User data
            var user_data = {
               uname : uname,
               address : address,
               email : email,
               password : password,
               last_login : Date.now()
            }

            database_ref.child('users/'+ user.uid).set(user_data);

            alert('user Created!!');
        })
        .catch(function(error){
            // Firebase will use this to alert of its errors
            var error_code = error.code;
            var error_message = error.message;
            
            alert(error_message);
        })

    }

    function validate_email(email){
        e_test = /^[^@]+@\w+(\.\w+)+w$/
        if(e_test.test(email) == true){
            return true
        } else{
            return false
        }
    }
    function validate_password(password){
        if (password< 6 ){
            return false
        } else{
            return true
        }
    }

    function validate_field(field){
        if(field == null){
            return false
        }
        if(field.length <= 0){
            return false
        }else{
            return true
        }
    }

