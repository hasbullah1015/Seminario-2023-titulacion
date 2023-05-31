
const product_id = document.querySelector("#product_id");
const product_name = document.querySelector("#product_name");
const category_name = document.querySelector("#category_name");
const brand_name = document.querySelector("#brand_name");
const typeUser = document.querySelector("#typeUser").innerHTML;

const userName = document.querySelector("#userName");

const userMessage = document.querySelector("#userMessage");




window.jsPDF = window.jspdf.jsPDF;

const module = document.querySelector("#qr_form_mod");
const QR_module = document.querySelector("#qr_mod");
const form_module = document.querySelector("#form_mod");

if(product_id.innerHTML != 'n/d'  && product_id.innerHTML != '' ){
        module.classList.add("slide");
        new QRCode(QR_module, product_id.innerHTML); //generacíon de qr
        pdf_generator();    
        document.querySelector("#form_mod #sent").addEventListener("click",pdf_print);

}
else{   
        module.classList.add("slide");
        form_generator();
}


function form_generator(){

if(typeUser ==='(A)'){
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

    }
    else{
        userMessage.innerHTML ='Solicita el código QR Ingresando el ID';


    }
}

function pdf_generator(){
        userMessage.innerHTML ='Imprime el código QR ';
        const submit = document.createElement("input");
        submit.setAttribute('type',"submit");
        submit.setAttribute('id',"sent");

        form_module.appendChild(submit);

}

function pdf_print(){
        alert ("PDF GENERADO:");

        let img64 = document.querySelector('#qr_mod img').src;
        let date = new Date();


        var doc = new jsPDF();
        doc.text(60,20, 'SISTEMA DE CONTROL DE INVENTARIO');
        doc.text(40,30, "--------------------------------------------------------------------------");
        doc.text(60,40, "***** DATOS DEL PRODUCTO: *****");
        doc.text(20,50, "ID: "+product_id.innerText );
        doc.text(20,60, "NOMBRE: "+product_name.innerText);
        doc.text(20,70, "CATEGORIA: "+category_name.innerText);
        doc.text(20,80, "MARCA: "+ brand_name.innerText);
  
        doc.text(40,90, "--------------------------------------------------------------------------");
        doc.text(80,100, "***** CODIGO QR *****");      
        doc.addImage(img64, 'JPG', 70, 110, 80, 80, 'QR'); 

        doc.text(40,200, "--------------------------------------------------------------------------");
        doc.text(70,210, "***** RESPONSABLE *****");    
        doc.text(20,220, "SOLICITÓ: "+userName.innerText);

        doc.text(20,230, "FECHA: "+date.toDateString()+' / '+date.getHours()+':'.toString()+date.getMinutes().toString()+':'+date.getSeconds().toString()+' hrs');


        
        doc.save(product_id.innerText+'/'+userName.innerText+'/'+date.toDateString()+'.pdf');
}

//añadir clase slide