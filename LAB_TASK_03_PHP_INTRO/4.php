<?php
      $num1=10;
      $num2=25;
      $num3=2;
      if($num1>$num2 && $num1>$num3){
        echo "$num1 biggest number ";
      }
      else{
        if($num2>$num1 && $num2>$num3){
          echo "$num2 biggest number ";
        }
        else
          echo "$num3 biggest number ";
      }
?>