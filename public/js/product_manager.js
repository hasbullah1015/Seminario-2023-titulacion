const product_id = document.querySelector("#product_id");
const module = document.querySelector("#qr_form_mod");
console.log("producto: "+product_id.innerHTML)

if(product_id.innerHTML == null){
    module.classList.add("slide");
    module.innerHTML="p";
}

//añadir clase slide