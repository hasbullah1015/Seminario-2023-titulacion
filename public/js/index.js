
$("#pie_pagina").load("/public/html/footer.html");
$("#encabezado").load("/public/html/header.html");

const user_portrait = document.querySelector("#userPortrait"); // seleccionamos el div donde se inserta la imagen

const user_Label = document.querySelector("#userLabel"); // seleccionamos el div donde esta el nombre de usuario

let url = "/public/assets_img/"+user_Label.innerHTML+".jpg"; //concatenamos la url con el usuario

const photo = document.createElement("img"); // creamos una imaagen
photo.src=url; //se indica la url
photo.alt=user_Label.innerHTML; // indica alt tezt

user_Label.appendChild(photo); //insertamos en el nodo padre (div)  la imagen creada

//console.log(url);




