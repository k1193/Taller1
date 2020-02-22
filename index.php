<?php


echo("taller 1  generalidaes  presentado por ksandra <br>");
echo("preguna#1 <br>");

$variable1=  400;
$variable2= 80;


$suma=$variable1 + $variable2;
$resta =$variable1 - $variable2;
$multiplicacion =$variable1 * $variable2;
$division =$variable1 / $variable2;



  echo ("la suma de:".$variable1."+".$variable2."=".$suma."<br>");
  echo ("la resta de:".$variable1."-".$variable2."=".$resta."<br>");
  echo ("la summultiplicacion de:".$variable1."*".$variable2."=".$multiplicacion."<br>");
  echo ("la division de:".$variable1."/".$variable2."=".$division."<br>");


  echo("preguna#2 <br>");
   
  $peso =85;
  $altura= 178;
  $imc = $peso /($altura*$altura);

     if ($imc <= 18,4)
          echo(" Insuficiencia de peso  <br>");

         else {

              if($imc <= 18,5 && $imc <=24,9)

                 echo("peso normal <br> ");}

                 else {

                    if($imc<=25 && $imc<=29,9)
               
                      echo("Sobrepeso <br>");}

                      else{

                           if($imc<=30&&$imc<=34,9)

                              echo("Obecidad1 <br>");}

                              else{

                                   if($imc<=35&& $imc<= 39,9)

                                      echo("Obesidad2 <br>");}
                                      
                                      else{
                                           $imc>=40
                                             echo("esta muy gordito <br>");}
                                      

                              
                     
         
         
               
                
                
                     


  







?>
