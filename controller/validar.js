var email = document.getElementById("email");
var password = document.getElementById("password");
var validar = document.getElementsByClassName("form-group");

function validarForm(){

    for (var i=0; i < validar.length; i++){
        if(password.value === "" || email.value === "" || 
        email.value.indexOf("@") === -1){

            validar[i].classList.add("was-validated");
        }
        else {

            validar[i].classList.remove("was-validated");
        }
    }
}