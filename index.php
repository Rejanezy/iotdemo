<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <button id="btnClick"> click </button>

    <div id="chartContainer" style="height: 370px; width: 100%;"></div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  </body>


  <script>
 <script>
      
      function plot (dataPoints) {
    
    var chart = new CanvasJS.Chart("chartContainer", {
      animationEnabled: true,
      theme: "light2",
      title:{
        text: "Simple Line Chart"
      },
      axisY:{
        includeZero: false
      },
      data: [{        
        type: "line",       
        dataPoints: dataPoints
      }]
    });
    chart.render();
    
    }

    $(()=>{
        $("button").click(function(){
            let urlAPI = "https://api.thingspeak.com/update?api_key=DRAKWIUM5IN8ZXWW&field1=50&field2=150";
            $.get(urlAPI, function(data, status){
               // alert("Data: " + data + "\nStatus: " + status);
                console.log(JSON.stringify(data.feeds));
                var dataPoints = [];
                plot(dataPoints);
            });
        });

      });  
</script>

	<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Simple Line Chart"
	},
	axisY:{
		includeZero: false
	},
	data: [{        
		type: "line",       
		d{
channel: {
id: 860695,
name: "myiot",
latitude: "0.0",
longitude: "0.0",
field1: "data1",
field2: "data2",
created_at: "2019-09-09T09:29:31Z",
updated_at: "2019-09-09T09:29:32Z",
last_entry_id: 5
},
feeds: [
{
created_at: "2019-09-16T08:32:07Z",
entry_id: 4,
field1: "15",
field2: "50"
},
{
created_at: "2019-09-16T08:32:58Z",
entry_id: 5,
field1: "50",
field2: "150"
}
]
}
		]
	}]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>




</html>

