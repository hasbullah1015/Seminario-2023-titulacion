const product_id = document.querySelector("#product_id");
const module = document.querySelector("#qr_form_mod");
console.log("producto: "+product_id.innerHTML)

if(product_id.innerHTML == ""){
    module.classList.add("slide");
    module.innerHTML="form";
}
else{ 
    module.classList.add("slide");
    module.innerHTML="qr";
}

//añadir clase slide