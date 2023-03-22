
$("#pie_pagina").load("/public/html/footer.html");
$("#encabezado").load("/public/html/header.html");

const user_portrait = document.querySelector("#userPortrait");

const user_Label = document.querySelector("#userLabel");

let url = "/public/assets_img/"+user_Label.innerHTML+".jpg"; //concatenamos la url con el usuario

const photo = document.createElement("img");
photo.src=url;
photo.alt=user_Label.innerHTML;

user_Label.appendChild(photo);

console.log(url);




