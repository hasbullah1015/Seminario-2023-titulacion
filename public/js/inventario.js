const row_data = document.querySelectorAll(".row_data");//listado de elemtnos tr
const data = document.querySelectorAll(".data_amount"); //cantidad de producto td


for (i=0; i<data.length; i++){ //recorre según la cantidad de columsnas de datos (stock)
    if(data[i].innerHTML<20){ //si el estock es menor a 20
        row_data[i].classList.add("dataWarning"); //añadimos clase un warning
    }
}


