const row_data = document.querySelectorAll(".row_data");//listado de elemtnos tr
const data = document.querySelectorAll(".data_amount"); //cantidad de producto td

console.log(row_data.length);
for (i=0; i<data.length; i++){
    console.log(data[i]);
    if(data[i].innerHTML>5){
        row_data[i-3].classList.add("")

    }
}


