
<!DOCTYPE html>
<html>
<body>
    <?php
        $marks = array(
        "mark" => array
        (
        "physics" => 35,
        "maths" => 30,
        "chemistry"  => 39
        ),
        "anthony" =>  array
        (
        "physics" => 30,
        "maths" => 32,
        "chemistry"  => 29
        ),
        "eric" =>  array
        (
        "physics" => 31 ,
        "maths" => 22,
        "chemistry" => 39
        )
        );
        /* Accessing multidimensional array values */
        echo "Marks for mark in physics : ";
        echo $marks[ 'mark']['physics'] . "<br />" ;
        echo "Marks for anthony in maths : ";
        echo $marks[ 'anthony']['maths'] . "<br />" ;
        echo "Marks for eric in chemistry : " ;
        echo $marks['eric']['chemistry'] .  "<br />";


        //Output:

        //Marks for mark in physics : 35

        //Marks for anthony in maths : 32

        //Marks for eric in chemistry : 39
    ?>
</body>
</html >