
const product_id = document.querySelector("#product_id");
const module = document.querySelector("#qr_form_mod");
const QR = new QRcode (module);

if(product_id.innerHTML != 'n/d'){
        module.classList.add("slide");
        module.innerHTML="qr";
        QR.makeCode(product_id.link.value);
}
else{   
        module.classList.add("slide");
        module.innerHTML="form";
        search_panel.classList.add("dataWarning");
}



//añadir clase slide