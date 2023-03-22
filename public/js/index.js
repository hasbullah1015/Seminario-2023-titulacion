
$("#pie_pagina").load("/public/html/footer.html");
$("#encabezado").load("/public/html/header.html");

const photo = document.querySelector("#userPortrait");
const user = document.querySelector("#userLabel");
let url = "public_html/public/assets_img/"+user.innerHTML+".jpg"; //concatenamos la url con el usuario

console.log(url);




