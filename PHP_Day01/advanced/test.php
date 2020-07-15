<!-- <?php
    session_start();
?> -->

<?php
    // $fahreinheit= $_GET['Num1'];
    // $_SESSION['celsius'] = (5/9*($fahreinheit-32));

    function convert ($f){
        $c=round(5/9*($f-32));
        return $c;
    }

    $result = convert(rand(0,100));
    if ($result <5) {
        echo "<p>It's very cold</p>"
    } elseif ($result >6 && $result <10){
        echo "<p>It's cold</p>"
    }
    elseif ($result >11 && $result <15){
        echo "<p>It's pleasent</p>"
    }
    elseif ($result >16 && $result <20){
        echo "<p>It's pleasent</p>"
    }
?>


