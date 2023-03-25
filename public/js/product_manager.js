const product_id = document.querySelector("#data_product");
const module = document.querySelector("#qr_form_mod");

console.log(product_id);

if(product_id != null){
    module.classList.add("slide");
    module.innerHTML="p";
}
//añadir clase slide