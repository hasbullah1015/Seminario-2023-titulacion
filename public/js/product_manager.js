
const product_id = document.querySelector("#product_id");
const product_name = document.querySelector("#product_name");
const category_name = document.querySelector("#category_name");
const brand_name = document.querySelector("#brand_name");
const userROL = document.querySelector("#userROL");
const userMessage = document.querySelector("#userMessage");






let date = new Date().toDateString();






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

if(userROL.innerHTML == '(a)'){
        userMessage.innerHTML ='Ingrese los datos correctos: ';


    const new_form = document.createElement("form");
    const id_input = document.createElement("input");
    const name_input=document.createElement("input");
    const category = document.createElement("input");
    const brand = document.createElement("input");
    const drop_opc = document.createElement("input");
    const insert_opc = document.createElement("input");
    const submit = document.createElement("input");
    const label1 = document.createElement("label");
    label1.innerHTML="Añadir producto";
    const label2 = document.createElement("label");
    label2.innerHTML="Eliminar producto"
    const label_status = document.createElement("label");

    //asignación de atributos
    new_form.setAttribute('method',"get");
    new_form.setAttribute('action',"product_manager.php");

    id_input.setAttribute('type',"text");
    id_input.setAttribute('placeholder',"inserte id");
    id_input.setAttribute('name',"id");

    name_input.setAttribute('type',"text");
    name_input.setAttribute('placeholder',"inserte nombre");
    name_input.setAttribute('name',"nombre");

    category.setAttribute('type',"text");
    category.setAttribute('placeholder',"inserte categoria");
    category.setAttribute('name',"categoria");

    brand.setAttribute('type',"text");
    brand.setAttribute('placeholder',"inserte marca");
    brand.setAttribute('name',"marca");
    

    drop_opc.setAttribute('type',"radio");
    drop_opc.setAttribute('name',"opc");
    drop_opc.setAttribute('value',"drop");
    drop_opc.setAttribute('class',"opcSecc")
    
    insert_opc.setAttribute('type',"radio");
    insert_opc.setAttribute('name',"opc");
    insert_opc.setAttribute('value',"insert");
    insert_opc.setAttribute('class',"opcSecc")

    submit.setAttribute('type',"submit");
    submit.setAttribute('id',"sent");

    new_form.appendChild(id_input);   
    new_form.appendChild(name_input);    
    new_form.appendChild(category);
    new_form.appendChild(brand);
    new_form.appendChild(label1);
    new_form.appendChild(insert_opc);
    new_form.appendChild(label2);
    new_form.appendChild(drop_opc);    
    new_form.appendChild(submit);
    form_module.appendChild(new_form);
    }
    else{
        userMessage.innerHTML ='Imprime el código QR mediante el ID';

    }
}

function pdf_generator(){
        const submit = document.createElement("input");
        submit.setAttribute('type',"submit");
        submit.setAttribute('id',"sent");

        form_module.appendChild(submit);

}

function pdf_print(){
        alert ("PDF GENERADO:");

        var img64 = document.querySelector('#qr_mod img').src;

        var doc = new jsPDF();
        doc.text(60,20, 'SISTEMA DE CONTROL DE INVENTARIO');
        doc.text(40,30, "--------------------------------------------------------------------------");
        doc.text(60,40, "***** DATOS DEL PRODUCTO: *****");
        doc.text(20,50, "ID: ");
        doc.text(35,50,product_id.innerText );
        doc.text(20,60, "NOMBRE: ");
        doc.text(50,60, product_name.innerText);
        doc.text(20,70, "CATEGORIA: ");
        doc.text(70,70, category_name.innerText);
        doc.text(20,80, "MARCA: ");
        doc.text(50,80, brand_name.innerText);
  
        doc.text(40,90, "--------------------------------------------------------------------------");
        doc.text(80,100, "***** CODIGO QR *****");      
        doc.addImage(img64, 'JPG', 80, 90, 50, 50, 'QR'); 

        doc.text(40,150, "--------------------------------------------------------------------------");
        doc.text(70,160, "***** RESPONSABLE *****");    
        doc.text(20,170, "REGISTRÓ: ");

        doc.text(20,190, "FECHA: ");
        doc.text(70,190,date);

        
        doc.save('documento.pdf');
}

//añadir clase slide