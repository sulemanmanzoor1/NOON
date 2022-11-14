<?php

    // connect
    $con = mysqli_connect('localhost','root','','Noon');
    if($con){
         echo "DB Connected";
    }else{
        echo "DB not Connected";
    }

?>