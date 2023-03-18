const row_data = document.querySelectorAll(".row_data");//listado de elemtnos tr
const data = document.querySelectorAll(".data_amount"); //cantidad de producto td

for (i=0; i<data.length; i++){
    console.log(data[i]);

    if(data[i]>5){
        row_data[i-3].classList.add("data_Warning");
    }

}



