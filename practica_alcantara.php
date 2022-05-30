<?php
/**
 * Ejemplo, phpDocumentor Jesus Daniel Alcantara Montes
 * IES Aguadulce curso 21/22 
 * Este es un fichero que se va modificar para la tarea 5 de Despliegue de Aplicaciones Web
 * Este archivo muestra el uso de la etiqueta @name 
 * @author Jesus Daniel Alcantara Montes
 * @version 1.0
 */
 
/**
 * Función suma de dos números
 * @param int num_a
 * @param int num_b
 * @return int
 */ 
function suma($num_a, $num_b){
$resultado = $num_a + $num_b;
return $resultado;
}
 /**
 * Función resta de dos números
 *@param int num_1
 *@param int num_2
 *@return $resultado_resta
 *{@param $resultado_resta} Indica la funcion resta entre dos numeros, puede dar negativos
 */
 
function resta($num_a, $num_b){

$resultado_resta = $num_a - $num_b;
return $resultado_resta;
}
$suma =suma(3, 7);
$resta = resta(4, 6);
echo $suma;
echo $resta;
?>
