const formSection =  document.querySelector("#form-section");
const dataSection = document.querySelector("#data-section");
const typeUser = document.querySelector("#typeUser").innerHTML;

form_generator(typeUser);

function form_generator(typeUser){

    if(typeUser==="(A)"){
        const newForm=document.createElement("form");
        const id = document.createElement("input");
        const  pswd = document.createElement("input");
        const name = document.createElement("input");
        const rol = document.createElement("input");
        const insertOpc = document.createElement("input");
        const dropOpc = document.createElement("input");
        const submit = document.createElement("input");

        newForm.setAttribute('method',"post");
        newForm.setAttribute('action',"usercontrol.php");

        id.setAttribute('type',"text");
        id.setAttribute('placeholder',"inserte id");
        id.setAttribute('name',"id");

        name.setAttribute('type',"text");
        name.setAttribute('placeholder',"inserte nombre");
        name.setAttribute('name',"_name");

        pswd.setAttribute('type',"password");
        pswd.setAttribute('placeholder',"inserte contraseña");
        pswd.setAttribute('name',"pswd");
        
        dropOpc.setAttribute('type',"radio");
        dropOpc.setAttribute('name',"opc");
        dropOpc.setAttribute('value',"drop");
        dropOpc.setAttribute('class',"opcSecc")
        
        insertOpc.setAttribute('type',"radio");
        insertOpc.setAttribute('name',"opc");
        insertOpc.setAttribute('value',"insert");
        insertOpc.setAttribute('class',"opcSecc");

        submit.setAttribute('type',"submit");
        submit.setAttribute('id',"sent");

        newForm.appendChild(id);   
        newForm.appendChild(name); 
        newForm.appendChild(rol);
        newForm.appendChild(pswd); 
        newForm.appendChild(insertOpc);
        newForm.appendChild(dropOpc);
        newForm.appendChild(submit);
        formSection.appendChild(newForm);






    }
    else{
        formSection.innerHTML='No disponible';
        dataSection.innerHTML='Ponte en contacto con un administrador para la gestión de usuarios';
    }
}