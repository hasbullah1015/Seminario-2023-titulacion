
const product_id = document.querySelector("#product_id");
const module = document.querySelector("#qr_form_mod");

if(product_id.innerHTML != 'n/d'){
        module.classList.add("slide");
        module.innerHTML="qr";
        new QRCode(product_id, "http://jindo.dev.naver.com/collie");

}
else{   
        module.classList.add("slide");
        module.innerHTML="form";
        search_panel.classList.add("dataWarning");
}



//añadir clase slide