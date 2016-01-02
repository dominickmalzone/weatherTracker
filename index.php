<!doctype html>
<html>
<head>
    <title>Weather</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<style type="text/css">


html, body {

    height:100%;
}

.container{
    height:100%;
    width:100%;
    background-image: url("/images/background.jpg");
    background-size: cover; 
    background-position: center;
    
}



.center{

    text-align: center;

}

.white{
    color:white;

}
.shad {

    text-shadow:
   -1px -1px 0 #000,  
    1px -1px 0 #000,
    -1px 1px 0 #000,
     1px 1px 0 #000;
     text-shadow: 10px 5px 10px black;
}
.form-control  {

    box-shadow: 10px 10px 10px #888888;
    border-radius: 100px;
}


.pad{
    padding-top: 150px;
}

button{
    margin-top:20px;
    margin-bottom: 15px;
}



p{

    padding-top: 15px;
    padding-bottom: 15px;
}


.alert {

    display:none;
}

#success{

    margin-top: 25px;
    
}

#fail{

    margin-top: 25px;
 
}

#noCity {
    margin-top: 25px;
}




</style>

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 center pad">
                
                <h1 class="white center shad">3 Day Weather Forecast</h1>
                <p class="lead white center"> Enter your city to get a forecast </p>
    
    
                <form>
    
                    <div class="form-group">
                        <input type="text" class="form-control" name="city" id="city" placeholder="Ex. San Francisco, Chicago, New York..." />
                    </div>
                    <button id="findMyWeather" class="btn btn-success btn-lg">Find My Weather</button>
                </form>

                    <div id="success" class="alert alert-success">Success </div>
                    <div id="fail" class="alert alert-danger">Could not find the weather for that city. Please try again

                        </div>

                     <div id="noCity" class="alert alert-danger">Please enter a city </div>
    
            </div>  

          </div>
    </div>
   




<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>


<script>


$("#findMyWeather").click(function(event) {

    event.preventDefault();


    $(".alert").hide();


    if ($("#city").val()!="") {


    $.get("scraper.php?city="+$("#city").val(), function( data ) {

        

     if (data=="") {
        
        $("#fail").fadeIn();


    } else {
        
        $("#success").html(data).fadeIn();

    }


 });       

 } else {


        $("#noCity").fadeIn();    

        }
    
    });
    



</script>



    
</body>