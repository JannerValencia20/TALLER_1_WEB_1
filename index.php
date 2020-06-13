

<?php


// PUNTO 1 DEL TALLER
// 1
// Hacer un programa en PHP que permita mostrar en pantalla la suma, resta, multiplicación, de dos números enteros
// almacenados en 2 variables diferentes Conserve el siguiente formato de impresión
// La suma de () + () = ()
// La resta de ()--()= ()
// La multiplicación de ()x() =()
// La división de ()/()=()

// echo("-------------------------------------------");
// echo("<br>");
// echo("....CALCULADORA....");
// echo("<br>");
// echo("-------------------------------------------");
// echo("<br>");
// $numsuma1=45;
// $numsuma2=35;
// $resulsuma=$numsuma1+$numsuma2;
// $numresta1=1100;
// $numresta2=5600;
// $resulresta=$numresta1 - $numresta2;
// $nummulti1=5681;
// $nummulti2=1001;
// $resulmulti=$nummulti1*$nummulti2;
// $numdivicion1=7998121;
// $numdivicion2=10000;
// $resuldivicion=$numdivicion1/$numdivicion2;

// echo("la suma de ".$numsuma1." + ".$numsuma2." = ".$resulsuma);
// echo("<br>");
// echo("la resta de ".$numresta1." - ".$numresta2." = ".$resulresta);
// echo("<br>");
//  echo("la multiplicación de ".$nummulti1." x ".$nummulti2." = ").$resulmulti;
//  echo("<br>");
// echo("la suma de ".$numdivicion1." + ".$numdivicion2." = ".$resuldivicion);
// echo("<br>");
// echo("-------------------------------------------");




//PUNTO 2 DEL TALLER

// El gimnasio Bodytech lo contrata para desarrollar una aplicación web que permita a sus 
// usuarios calcular el índice de
// masa corporal, basado en la formula 𝐈𝐌𝐂=𝑷𝒆𝒔𝒐𝑨𝒍𝒕𝒖𝒓𝒂𝒙𝑨𝒍𝒕𝒖𝒓𝒂

// La clasificación del IMC es la siguiente
// •
// IMC 18 4 (Insuficiencia de peso)
// •
// 18 5 <= 24 9 (Peso normal)
// •
// 25 <= 29 9 (
// •
// 30 <= 34 9 (Obesidad 1
// •
// 35 <= 39 9 (Obesidad 2
// •
// IMC>= 40 (Obesidad 3
// Ejecute su programa para un usuario cuyo peso es de 85 KG y cuya estatura es de
// 1 78 m y muestre en pantalla el resultado obtenido

// echo("-------------------------------------------");
//  echo("<br>");
//  echo("....GIMNASIO BODYTECH....");
//  echo("<br>");
//  echo("-------------------------------------------");
// echo("<br>");

// $peso = 85;
// $estatura= 1.78;
// $imc = $peso/($estatura*$estatura);

// //condicionales
//  if($peso==85 && $estatura==1.78){
//   echo(" || Señor usuario su peso es ".$peso."gk su estatura es".$estatura);
  
// }else{
//      if($imc <= 18.4){
//        echo(" || Señor usuario su IMC es ".$imc." Tienes insuficiencia de peso");
//       }

//  }if(18.5 <= $imc && $imc <= 24.9){
//   echo(" || Señor usuario su IMC es  ".$imc." usted tienes un peso normal");
  
//  }
//    if(25<= $imc && $imc <=29.9){
//          echo(" || Señor usuario su IMC es ".$imc." tienes sobrepeso");
   
//  }else{
 
//  if (30 <= $imc && $imc <= 34.9){
   
//   echo(" || Señor usuario su IMC es ".$imc." Tienes obesidad 1");
//  }


// }if(35 <= $imc && $imc <= 39.9){
  
//   echo(" || Señor usuario su IMC es ".$imc." tienes obesidad 2");

// }if(40 <= $imc ){
//             echo(" || Señor usuario su IMC es ".$imc." tienes obesidad 3");
//     }

  
// PUNTO 3 DEL TALLER
// Hacer un programa en PHP para la tienda Spring Step que tiene una promoción de descuento para vender al mayor, esta
// dependerá del número de zapatos que se compren Si son 3 pares se les dará un 10 de descuento sobre el total de la
// compra si el número de zapatos es mayor 3 pares pero menor o igual de 5 pares, se le otorga un 20 de descuento y si son
// más 5 pares de zapatos se otorgará un 40 de descuento Defina la cantidad de variables que necesite, el precio de cada
// pare de zapatos 150 000 y establezca el valor total de una compra de 5 pares de zapatos

// echo("-------------------------------------------");
// echo("<br>");
// echo("....Spring Step....");
// echo("<br>");
// echo("-------------------------------------------");
// echo("<br>");

// $cantidadZapatos=12;
// $costoneto=150000;
// $totalCompra=($cantidadZapatos *$costoneto);
// $valordescuento;
// $valorPagar=($cantidadZapatos * $costoneto);
// $d;

// if( $cantidadZapatos == 3){
//   $valordescuento=$totalCompra-0.10;
    
// }else{
// if ( $cantidadZapatos > 3 && $cantidadZapatos <= 5 ){
//     $valordescuento = $totalCompra - 0.20 ;
// }
    
// }
//    if( $cantidadZapatos > 5 ){
//   $valordescuento = $totalCompra- 0.40 ;
//    }

// echo( "-Cantidad Vendida:" .$cantidadZapatos);
// echo("<br>");
// echo(".");
// echo("<br>");
// echo("-Costo Neto:" .$costoneto);
// echo("<br>");
// echo(".");
// echo("<br>");
// echo("-Valor del Descuento:" .$valordescuento);
// echo("<br>");
// echo("-------------------------------------------");
// echo("<br>");
// echo("- Valor a Pagar es:".$valorPagar);
// echo("<br>");
// echo("-------------------------------------------");

// PUNTO 4 DEL TALLER
// Hacer un programa en PHP para ayudar a un trabajador de Postobón a saber cuál será su sueldo semanal, se sabe que si
// trabaja 40 horas o menos, se le pagará 20000 por hora, pero si trabaja más de 40 horas entonces las horas extras se le
// pagarán a 25 por hora Ejecute su código para calcular el salario con 36 horas trabajadas
// echo("-------------------------------------------");
//  echo("<br>");
//  echo("....POSTOBON S.A.S....");
//  echo("<br>");
//   echo("-------------------------------------------");
//   echo("<br>");
//  echo("....COLILLA DE PAGO....");
//  echo("<br>");
//  echo("-------------------------------------------");
//   echo("<br>");

// $horas_trabajadas=36;
// $val_horas1=20000;
// $val_horas2=25000;
// $sueldo1= $horas_trabajadas * $val_horas1;
// $sueldo2= $horas_trabajadas * $val_horas2;

// // condicionales

//   if($horas_trabajadas <= 40 ){
//    echo("Señor trabajador usted trabajo ".$horas_trabajadas." hora por lo tanto su sueldo es ".$sueldo1);
//   }else{
//    if($horas_trabajadas >40){
//      echo("Señor trabajador usted trabajo ".$horas_trabajadas." hora por lo tanto su sueldo es ".$sueldo2);
//    }
// }

//  PUUNTO 5 DEL TALLER
// 5. Después de realizar una consulta en la base de datos DE LA JUGOSA SAS se tienen almacenados los valores de dicha consulta en un
// arreglo denominado salpicón, el cual presenta la siguiente configuración:
// [dulce1]=>”Banano”
// [dulce2]=>”Manzana”
// [dulce3]=>”Durazno”
// [acido1]=>”Piña”
// [acido2]=>”Naranja”
// [acido3]=>”Lulo”
// Defina el arreglo salpicón e imprima utilizando un ciclo foreach el contenido deeste.

// $salpicon=array("dulce1"=>"Banano","dulce2"=>"Manzana","dulce3"=>"Durazno","acido1"=>"Piña","acido2"=>"Naranja", "acido3"=>"lulo");
// // print_r($salpicon);

// foreach ($salpicon as $clave=>$valor) {
//   echo"[$clave] => $valor <br>";
//   }
?>