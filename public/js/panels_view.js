
const btn_general=document.querySelector("#general_view");
const btn_critical=document.querySelector("#critical_view");

var video = document.querySelector("video");


btn_general.addEventListener("click",general_view);
btn_critical.addEventListener("click", critical_view);

let url = 'https://seminario2023.website/public/php/general_view_json.php';

const ctx = document.querySelector(".slide #myChart");
var myChart = new Chart(ctx, {});


function draw_chart_entrada(){
    myChart.destroy();
    btn_general.classList.add('opcSelect');
    btn_critical.classList.remove('opcSelect');
    myChart = new Chart(ctx, {
        type:'bar',
        data:{
            datasets: [{
                label: 'Stock de Entrada',
                backgroundColor: ['#0C134F','#1D267D', '#5C469C','#D4ADFC','#3A1078','#4E31AA','#2F58CD','#3795BD'],
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
    btn_critical.classList.add('opcSelect');
    btn_general.classList.remove('opcSelect');
    myChart.destroy();
    myChart = new Chart(ctx, {
        type:'bar',
        data:{
            datasets: [{
                borderRadius: Number.MAX_VALUE,
                label: 'Stock de Salida',
                backgroundColor: ['#0C134F','#1D267D', '#5C469C','#D4ADFC','#3A1078','#4E31AA','#2F58CD','#3795BD'],
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
    video.className='video_';
    document.querySelector(".slide #myChart");
    document.querySelector("#intro_message").innerHTML='';
    draw_chart_salida();  
}




function general_view(){
    video.className='video_';
    document.querySelector("#intro_message").innerHTML='';
    draw_chart_entrada();  
}




