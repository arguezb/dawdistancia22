<?php
   /**
   * @author Rodriguez Bustos, Alberto
   * @version string 1.0
   
   /**
   * El metodo sumar calcula los dos parametros y devuelve el resultado
   * @param int $num1. Primer parametro de la función sumar
   * @param int $num2. Seguendo parametro de la función sumar
   * @return int. Resultado de las sumas de los parametros de la función sumar
   */
   $resultado_de_suma;
   
   function sumar($num1, $num2){
      $resultado = $num1 + $num2;
      return $resultado. '<br />';
   }
   $resultado_de_suma = sumar(25, 7);
   echo $resultado_de_suma;
   

   /**
   * El metodo verificarMultiplo coge el número del parametro y calcula si es divisible entre
   * dos
   * @param int $num1. Parametro para la función verificarMultiplo
   * @return boolean. Resultado, true (si puede), false (si no puede)
   */
   function verificarMultiplo($num1){
   $num1 = 30;
      if($num % 2 == 0){
         return true;
      }else{
         return false;
      }
   }
?>
