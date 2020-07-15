<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    
    <nav class="navbar navbar-light bg-light ">
        <span class="navbar-brand mb-0 h1 ">Fahreinheit-Converter</span>
    </nav>

    <div class="container text-center mt-5">
    <?php

        function convert ($f){
            $c=round(5/9*($f-32));
            return $c;
        }
    
        $result = convert(rand(0,100));

        if ($result <=5) {
            echo "<h1>It's very cold, Tempature:<b>$result °C</b></h1>";
        }
        elseif ($result >=6 && $result <=10){
            echo "<h1>It's cold, Tempature:<b> $result</b></h1>";
        }
        elseif ($result >=11 && $result <=15){
            echo "<h1>It's pleasent, Tempature: <b> $result</b></h1>";
        }
        elseif ($result >=16 && $result <=20){
            echo "<h1>It's warm, Tempature: <b> $result</b></h1>";
        }
        elseif ($result >=21){
            echo "<h1>It's too hot, Tempature: <b> $result</b></h1>";
        }
    ?>
  </div>

</body>
</html>