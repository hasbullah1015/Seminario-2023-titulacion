const form =  document.querySelector("#form-section");
const data = document.querySelector("#data-section");
const typeUser = document.querySelector("#typeUser").innerHTML;


function form_generator(typeUser){

    if(typeUser==="(b)"){

    }
    else{
        form.innerHTML='No disponible';
        data.innerHTML='Ponte en contacto con un administrador para la gestión de usuarios';
    }
}