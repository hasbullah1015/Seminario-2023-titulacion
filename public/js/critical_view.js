
const btn_general=document.querySelector("#general_view");
const btn_critical=document.querySelector("#critical_view");

let ctx = document.querySelector(".slide #myChart");


btn_general.addEventListener("click",general_view);
btn_critical.addEventListener("click", critical_view);

let url = 'https://seminario2023.website/public/php/general_view_json.php';


function draw_chart_entrada(){
    let myChart = new Chart(ctx, {
        type:'bar',
        data:{
            datasets: [{
                label: 'Stock de Productos',
                backgroundColor: ['#0E52FC','#FC0E36', '#0EFC61'],
                borderColor: ['black'], 
                borderWidth:1
            }]
        },
        options:{
            scales:{
                y:{
                    beginAtZero:true
                }
            }
        }
    })

    fetch(url)
        .then( response => response.json() )
        .then( datos => mostrar(datos) )
        .catch( error => console.log(error) )

    const mostrar = (articulos) =>{
        articulos.forEach(element => {
            myChart.data['labels'].push(element.nombre)
            myChart.data['datasets'][0].data.push(element.total_entrada)
            myChart.update()
        });
    }   
}



function draw_chart_salida(){
    let myChart = new Chart(ctx, {
        type:'doughnut',
        data:{
            datasets: [{
                label: 'Stock de Productos',
                backgroundColor: ['#0E52FC','#FC0E36', '#0EFC61'],
                borderColor: ['black'], 
                borderWidth:1
            }]
        },
        options:{
            scales:{
                y:{
                    beginAtZero:true
                }
            }
        }
    })

    fetch(url)
        .then( response => response.json() )
        .then( datos => mostrar(datos) )
        .catch( error => console.log(error) )

    const mostrar = (articulos) =>{
        articulos.forEach(element => {
            myChart.data['labels'].push(element.nombre)
            myChart.data['datasets'][0].data.push(element.total_salida)
            myChart.update()
        });
    }   
}

function critical_view(){
    draw_chart_salida();  
}




function general_view(){
    draw_chart_entrada();  
}




