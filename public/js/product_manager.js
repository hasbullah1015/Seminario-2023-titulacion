const product_id = document.querySelector("#product_id");
const module = document.querySelector("#qr_form_mod");

console.log("producto: "+product_id.innerHTML)

if(product_id.innerHTML != 'n/d'){
    module.classList.add("slide");
    module.innerHTML="qr";

}
else{   
    module.classList.add("slide");
    module.innerHTML="form";
}

//añadir clase slide