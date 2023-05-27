const formSection =  document.querySelector("#form-section");
const dataSection = document.querySelector("#data-section");
const typeUser = document.querySelector("#typeUser").innerHTML;

form_generator(typeUser);

function form_generator(typeUser){

    if(typeUser==="(a)"){
        const newForm=document.createElement("form");
        const id = document.createElement("input");
        const name = document.querySelector("input");
        const rol = document.querySelector("input");
        const  insertOpc = document.createElement("input");
        const dropOpc = document.createElement("input");
        const label1 = document.createElement("label");
        label1.innerHTML="Añadir usuario";
        const label2 = document.createElement("label");
        label2.innerHTML="Eliminar usuario";



    }
    else{
        formSection.innerHTML='No disponible';
        dataSection.innerHTML='Ponte en contacto con un administrador para la gestión de usuarios';
    }
}