<?php

    // connect
    $con = mysqli_connect('localhost','root','','Noon');
    if($con){
        //  echo "DB Connected";
        //  echo "<center><h3>Go Back and Fill again.</3></center>";
    }else{
        echo "DB not Connected";
    }

?>