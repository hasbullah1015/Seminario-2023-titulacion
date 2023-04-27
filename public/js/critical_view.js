
const btn_general_view=document.querySelector("#general_view");
const btn_critical_view=document.querySelector("#critical_view");

import Chart from 'chart.js/auto';


var ctx = document.querySelector(".slide #myChart");
var myChart = new Chart(ctx, {
    type:'bar',
    data:{
        datasets: [{
            label: 'Stock de Productos',
            backgroundColor: ['#6bf1ab','#63d69f', '#438c6c', '#509c7f', '#1f794e', '#34444c', '#90CAF9', '#64B5F6', '#42A5F5', '#2196F3', '#0D47A1'],
            borderColor: ['black'], 
            data: [12,10,20,10],
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


