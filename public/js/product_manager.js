
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
        form_generator(typeUser);
}


function form_generator(typeUser){
        submit.setAttribute('value',"Agregar");
        document.getElementById('_newform').insertBefore(rol,labelInsert);

        if(typeUser ==='(A)'){
                const newForm=document.createElement("form");
                const insertOpc = document.createElement("input");
                const dropOpc = document.createElement("input");
                const nameOpc = document.createElement("input");
                const submit = document.createElement("input");
                const id = document.createElement("input");
                const name = document.createElement("input");
                const type = document.createElement("input");



                id.setAttribute('type',"text");
                id.setAttribute('placeholder',"inserte id");
                id.setAttribute('name',"id");

                
                name.setAttribute('type',"text");
                name.setAttribute('placeholder',"inserte nombre producto");
                name.setAttribute('name',"name");

                
                
                type.setAttribute('type',"text");
                type.setAttribute('placeholder',"inserte nombre producto");
                type.setAttribute('name',"name");

                brand.setAttribute('type',"text");
                brand.setAttribute('placeholder',"Inserte marca de producto");
                brand.setAttribute('name',"brand");
               
              
        
                newForm.setAttribute('method',"get");
                newForm.setAttribute('action',"product_manager.php");
                newForm.setAttribute('id',"_newform")


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


                nameOpc.setAttribute('type',"radio");
                nameOpc.setAttribute('name',"opc");
                nameOpc.setAttribute('value',"name");
                nameOpc.setAttribute('class',"opcSecc");
                nameOpc.setAttribute('id', "nameOpc");


                submit.setAttribute('type',"submit");
                submit.setAttribute('id',"sent");
                submit.classList.add('btnSubmit');

        

                newForm.appendChild(labelInsert);
                newForm.appendChild(insertOpc);
                newForm.appendChild(labelDrop);
                newForm.appendChild(dropOpc);
                newForm.appendChild(labelUpdatename);
                newForm.appendChild(nameOpc);
                form_module.appendChild(newForm);

                insertOpc.addEventListener("click",insert_product);
                dropOpc.addEventListener("click",drop_user);
                nameOpc.addEventListener("click",pswd_change);

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


function insert_product(){

        document.getElementById('_newform').insertBefore(brand,labelInsert);
        document.getElementById('_newform').insertBefore(type,brand);
        document.getElementById('_newform').insertBefore(name,type);
        document.getElementById('_newform').insertBefore(id,name);






        }
