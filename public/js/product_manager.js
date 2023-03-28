
const product_id = document.querySelector("#product_id");
const module = document.querySelector("#qr_form_mod");

if(product_id.innerHTML != 'n/d'){
        module.classList.add("slide");
        new QRCode(module, product_id.innerHTML); //generacíon de qr
 
}
else{   
        module.classList.add("slide");
        module.innerHTML="form";
        search_panel.classList.add("dataWarning");
}



//añadir clase slide