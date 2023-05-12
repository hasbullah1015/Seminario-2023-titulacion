
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
                backgroundColor: ['#2b97fa','#c501e2','#2ef8a0', '#e7c500','#f82d97','#e830ce','#a7fd2a','#9a27f7','#ff0571','#ff0534','#c6e602','#00fff6','#2b97fa','#c501e2','#2ef8a0', '#e7c500','#f82d97','#e830ce','#a7fd2a','#9a27f7','#ff0571','#ff0534','#c6e602','#00fff6',],
                borderColor: ['black'], 
                borderWidth:1,
                borderRadius: {topLeft: 5, topRight:5 },
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
                label: 'Stock de Salida',
                backgroundColor: ['#2b97fa','#c501e2','#2ef8a0', '#e7c500','#f82d97','#e830ce','#a7fd2a','#9a27f7','#ff0571','#ff0534','#c6e602','#00fff6','#2b97fa','#c501e2','#2ef8a0', '#e7c500','#f82d97','#e830ce','#a7fd2a','#9a27f7','#ff0571','#ff0534','#c6e602','#00fff6',],
                borderRadius: {topLeft: 5, topRight:5 },
                borderWidth:1,
                borderRadius: {topLeft: 5, topRight:5 },
            }]
            }]
            }]
        },
        options:{
            responsive: true,
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




