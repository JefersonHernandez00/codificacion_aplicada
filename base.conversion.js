//Este código tiene una validación simple y una prueba unitaria básica


// Función para convertir un número x de base 10 a base k
function baseConversion(x, k) {
  // Variable para almacenar el resultado de la conversión
  let result = "";
  // Mientras x sea mayor a 0
  while (x > 0) {
    // Se agrega el residuo de la división x entre k al resultado
    result = (x % k) + result;
    // Se actualiza el valor de x como el cociente de la división entre k
    x = Math.floor(x / k);
  }
  // Se retorna el resultado de la conversión
  return result;
}

// Se definen dos variables: el número a convertir y la base a la que se quiere convertir
let num = 287;
let base = 4;
// Se imprime el resultado de la conversión en consola
console.log(baseConversion(num, base)); // Imprimirá "10133"


/**
Ejemplo basico de prueba unitaria con condicionales

para pruebas se recomienda el uso de frameworks para pruebas como Jest o Mocha
*/

// Se almacena el resultado de la conversión
let result = baseConversion(num, base);

// Se realiza una comparación para verificar que el resultado es el esperado
if (result === "10133") {
  console.log("La prueba ha pasado");
} else {
  console.log("La prueba ha fallado");
}
