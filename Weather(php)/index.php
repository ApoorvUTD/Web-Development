<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<style>

	html,body{
		height:100%;
	}

		.container {
			background-image:url("weather.jpg");
			width:100%;
			height: 100%;
			background-size: cover;
			background-position: center;
			padding-top: 150px;
		}


		.center {
			text-align:center;
		}

		p {
			padding-top: 2px;

		}

		button{

			margin-top: 15px;
		}

		.alert{
			margin:8px;
			display: none;

		}

</style>


</head>

<body>
<div class="container">

	<div class="row">

		<div class="col-md-6 col-md-offset-3 center">

		<h1 class="center"> Weather Today</h1>
		<p class="lead center">Enter Your City below to get a forecast of Today's Weather.</p> 

		<form>
			<div class="input-group">

				<span class="input-group-addon glyphicon glyphicon-cloud"></span>
				<input type="text" class="form-control" name="city" id="city" placeholder="Eg: Dallas,London,San Francisco..."/>
				
			</div>

			<button id="findweather" class="btn btn-success btn-lg fade-in flash">Find my weather</button>

		</form>


            <div id="city1" class="alert alert-info" role="alert">...</div>
            <div id="wcity" class="alert alert-danger" role="alert">Could Not Find Weather of this place.(Is it on Earth?)</div>
            <div id="ncity" class="alert alert-warning" role="alert">Please Enter City Name.</div>

		</div>



		</div>

		</div>






<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script>
	$("#findweather").click (function (event){
        
        $(".alert").hide();

		event.preventDefault();



		if ($("#city").val()!="") {

		$.get("scraper.php?city="+$("#city").val(), function(data) {
            
            
            if (data==""){
            $("#wcity").fadeIn();
            } else{
			$("#city1").html(data).fadeIn();
            }

		});
	}else {
        $("#ncity").fadeIn();
		
	}

    $('#findweather').hide();
    $('#findweather').fadeIn('slow');
       
	
	});

	
</script>

</body>
</html>