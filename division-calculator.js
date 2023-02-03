// Función que recibe dos números y retorna la división de ambos
function division(a, b) {
  // Se valida que se estén proporcionando números como entrada
  if (typeof a !== 'number' || typeof b !== 'number') {
    throw new Error('Los parámetros deben ser números');
  }
  // Se valida que no se esté realizando una división por cero
  if (b === 0) {
    throw new Error('No se puede realizar una división por cero');
  }
  // Se realiza la operación de división y se retorna el resultado
  return a / b;
}

// Pruebas unitarias
try {
  let resultado = division(10, 2);
  console.log('Prueba 1:', resultado === 5); // Debería imprimir "Prueba 1: true"
} catch (error) {
  console.error('Prueba 1:', error.message);
}

try {
  let resultado = division(10, 0);
  console.log('Prueba 2:', resultado === 5); 
} catch (error) {
  console.error('Prueba 2:', error.message);
  //Prueba 2: No se puede realizar una división por cero
}

try {
  let resultado = division('10', 2);
  console.log('Prueba 3:', resultado === 5); 
} catch (error) {
  console.error('Prueba 3:', error.message);
  //Prueba 3: Los parámetros deben ser números
}
