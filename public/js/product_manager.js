
const product_id = document.querySelector("#product_id");
const module = document.querySelector("#qr_form_mod");


const QR_module = document.querySelector("#qr_mod");
const form_module = document.querySelector("#form_mod");

if(product_id.innerHTML != 'n/d'  && product_id.innerHTML != '' ){
        module.classList.add("slide");
        new QRCode(QR_module, product_id.innerHTML); //generacíon de qr

        //aqui ve como imprimir el codigo para un pdf o jpg
    
}
else{   
        module.classList.add("slide");
        module.classList.add("dataWarning");
        form_generator();
}


function form_generator(){
    const new_form = document.createElement("form");
    const id_input = document.createElement("input");
       const name_input=document.createElement("input");
    const category = document.createElement("input");
    const drop_opc = document.createElement("input");
    const insert_opc = document.createElement("input");

    const submit = document.createElement("input");
    
    const label1 = document.createElement("label");
    label1.innerHTML="Añadir producto";
    const label2 = document.createElement("label");
    label2.innerHTML="Eliminar producto"

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

    drop_opc.setAttribute('type',"radio");
    drop_opc.setAttribute('name',"opc");
    drop_opc.setAttribute('value',"drop");
    drop_opc.setAttribute('class',"opcSecc")
    
    insert_opc.setAttribute('type',"radio");
    insert_opc.setAttribute('name',"opc");
    insert_opc.setAttribute('value',"insert");
    insert_opc.setAttribute('class',"opcSecc")

    submit.setAttribute('type',"submit");
    submit.setAttribute('id',"")

    new_form.appendChild(id_input);   
    new_form.appendChild(name_input);    
    new_form.appendChild(category);
    new_form.appendChild(label1);
    new_form.appendChild(insert_opc);
    new_form.appendChild(label2);
    new_form.appendChild(drop_opc);    
    new_form.appendChild(submit);
    form_module.appendChild(new_form);
}


//añadir clase slide