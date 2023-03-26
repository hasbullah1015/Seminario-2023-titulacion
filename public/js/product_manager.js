
const sent = document.querySelector("#sent");

sent.addEventListener("click",qr_form_generator);


function qr_form_generator(){
    const search_panel = document.querySelector("#search_panel"); 
    const product_id = document.querySelector("#product_id");
    const module = document.querySelector("#qr_form_mod");


    if(product_id.innerHTML != 'n/d'){
        module.classList.add("slide");
        module.innerHTML="qr";

    }
    else{   
        module.classList.add("slide");
        module.innerHTML="form";
        search_panel.classList.add("dataWarning");

    }
}

//añadir clase slide