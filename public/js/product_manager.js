
const product_id = document.querySelector("#product_id");
const module = document.querySelector("#qr_form_mod");
const QR_module = document.querySelector("#qr_mod");
const form_module = document.querySelector("#form_mod");

if(product_id.innerHTML != 'n/d'){
        module.classList.add("slide");
        new QRCode(QR_module, product_id.innerHTML); //generacíon de qr
        form_module.innerHTML="gola";
    
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
    const submit = document.createElement("input");


    //asignación de atributos
    new_form.setAttribute('method',"get");
    new_form.setAttribute('action',"");

    id_input.setAttribute('type',"text");
    id_input.setAttribute('placeholder',"inserte id");

    name_input.setAttribute('type',"text");
    name_input.setAttribute('placeholder',"inserte nombre");

    category.setAttribute('type',"text");
    category.setAttribute('placeholder',"inserte nombre");

    submit.setAttribute('type',"button");


    new_form.appendChild(id_input);
    new_form.appendChild(name_input);
    new_form.appendChild(category);
    new_form.appendChild(submit);
    form_module.appendChild(new_form);
    console.log("hola je");

}


//añadir clase slide