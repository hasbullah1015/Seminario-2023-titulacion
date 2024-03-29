const formSection =  document.querySelector("#form-section");
const dataSection = document.querySelector("#data-section");
const typeUser = document.querySelector("#typeUser").innerHTML;

form_generator(typeUser);

function form_generator(typeUser){
    const newForm=document.createElement("form");
    const id = document.createElement("input");
    const  pswd = document.createElement("input");
    const aux = document.createElement("input");


    if(typeUser==="(A)"){
        const insertOpc = document.createElement("input");
        const dropOpc = document.createElement("input");
        const pswdOpc = document.createElement("input");

        const submit = document.createElement("input");
        const user = document.createElement("input");
        const rol = document.createElement("select");
        const opc1 = document.createElement("option");
        const opc2 = document.createElement("option");
        const text = document.createElement("option");


        const opcText = document.createTextNode("Ingrese un rol");
        const opc1Text = document.createTextNode("Admin (A)");
        const opc2Text = document.createTextNode("Monitor (M)");

        const labelInsert = document.createElement("label");
        labelInsert.setAttribute("for","insertOpc");
        labelInsert.innerHTML ='Agregar usuario'

        
        const labelDrop = document.createElement("label");
        labelDrop.setAttribute("for","dropOpc");
        labelDrop.innerHTML ='Eliminar usuario'

                
        const labelUpdatepswd = document.createElement("label");
        labelUpdatepswd.setAttribute("for","pswdOpc");
        labelUpdatepswd.innerHTML ='Actualizar contraseña'


       
        newForm.setAttribute('method',"get");
        newForm.setAttribute('action',"usercontrol.php");
        newForm.setAttribute('id',"_newform")


        id.setAttribute('type',"text");
        id.setAttribute('placeholder',"inserte id");
        id.setAttribute('name',"id");

        dropOpc.setAttribute('type',"radio");
        dropOpc.setAttribute('name',"opc");
        dropOpc.setAttribute('value',"drop");
        dropOpc.setAttribute('class',"opcSecc")
        dropOpc.setAttribute('id',"dropOpc")

        
        insertOpc.setAttribute('type',"radio");
        insertOpc.setAttribute('name',"opc");
        insertOpc.setAttribute('value',"insert");
        insertOpc.setAttribute('class',"opcSecc");
        insertOpc.setAttribute('id',"insertOpc");


        pswdOpc.setAttribute('type',"radio");
        pswdOpc.setAttribute('name',"opc");
        pswdOpc.setAttribute('value',"pswd");
        pswdOpc.setAttribute('class',"opcSecc");
        pswdOpc.setAttribute('id', "pswdOpc");

        user.setAttribute('type',"text");
        user.setAttribute('placeholder',"inserte usuario");
        user.setAttribute('name',"user");

        pswd.setAttribute('type',"password");
        pswd.setAttribute('placeholder',"inserte contraseña");
        pswd.setAttribute('name',"pswd");

        submit.setAttribute('type',"submit");
        submit.setAttribute('id',"sent");
        submit.classList.add('btnSubmit');

        rol.setAttribute('name','rol');
   

        newForm.appendChild(labelInsert);
        newForm.appendChild(insertOpc);
        newForm.appendChild(labelDrop);
        newForm.appendChild(dropOpc);
        newForm.appendChild(labelUpdatepswd);
        newForm.appendChild(pswdOpc);
        formSection.appendChild(newForm);

        insertOpc.addEventListener("click",insert_user);
        dropOpc.addEventListener("click",drop_user);
        pswdOpc.addEventListener("click",pswd_change);




        function  insert_user (){

            submit.setAttribute('value',"Agregar");


            text.appendChild(opcText);
            text.disabled = true;
            text.selected = true;
            
            opc1.setAttribute("name","rol");
            opc1.setAttribute("value","A");
            opc1.appendChild(opc1Text);
    
            opc2.setAttribute("name","rol");
            opc2.setAttribute("value","M");
            opc2.appendChild(opc2Text);
            rol.appendChild(text);rol.appendChild(opc1);rol.appendChild(opc2);

            
            document.getElementById('_newform').insertBefore(rol,labelInsert);
            document.getElementById('_newform').insertBefore(pswd,rol);
            document.getElementById('_newform').insertBefore(user,pswd);
            document.getElementById('_newform').insertBefore(id,user);
            document.getElementById('_newform').appendChild(submit);






        }

        function drop_user(){

            document.getElementById('_newform').appendChild(submit);
            submit.setAttribute('value',"Eliminar");
            document.getElementById('_newform').insertBefore(id,labelInsert);
            document.getElementById('_newform').removeChild(user);
            document.getElementById('_newform').removeChild(pswd);
            document.getElementById('_newform').removeChild(rol);


        }

        function pswd_change(){

            document.getElementById('_newform').appendChild(submit);
            submit.setAttribute('value',"Actualizar");
            document.getElementById('_newform').insertBefore(pswd,labelInsert);
            document.getElementById('_newform').insertBefore(id,pswd);

            document.getElementById('_newform').removeChild(user);
            document.getElementById('_newform').removeChild(rol);


        }


    }
    else{
        formSection.innerHTML='No disponible';
        dataSection.innerHTML='Ponte en contacto con un administrador para la gestión de usuarios';
    }
}