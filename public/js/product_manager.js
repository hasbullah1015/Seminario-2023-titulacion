
const product_id = document.querySelector("#product_id");
const module = document.querySelector("#qr_form_mod");



if(product_id.innerHTML != 'n/d'){
        module.classList.add("slide");
        module.innerHTML="qr";
        module.innerHTML = new QRcode(module,product_id.innerHTML); //Generamos el codigo QR 
}
else{   
        module.classList.add("slide");
        module.innerHTML="form";
        search_panel.classList.add("dataWarning");
}



//añadir clase slide