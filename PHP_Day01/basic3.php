<!DOCTYPE html>
<html>
<body>
    <?php
        $d=date("D");

        if ($d=="Mon" )
        echo "It's Monday";

        elseif ($d=="Tue" )
        echo "It's Tuesday";

        elseif ($d=="Wed" )
        echo "It's Wednesday";

        elseif ($d=="Fri" )
        echo "It's Friday";

        elseif ($d=="Sat" )
        echo "It's Saturday";
        else
        echo "It's Sunday" ;

        
        echo $d;
    ?>
</body>
</html>