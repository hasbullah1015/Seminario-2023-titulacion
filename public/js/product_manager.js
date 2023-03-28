
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
        //module.innerHTML="form";
        module.classList.add("dataWarning");
}



//añadir clase slide