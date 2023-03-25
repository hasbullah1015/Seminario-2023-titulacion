const product_id = document.querySelector("#product_id");
const module = document.querySelector("#qr_form_mod");

console.log(product_id);

if(product_id.innerHTML="REF-01"){
    
    module.classList.add("slide");
    module.innerHTML="p";
}
//añadir clase slide