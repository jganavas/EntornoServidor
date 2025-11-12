# EXAMEN: PHP 8.4 Básico (Tema 2\)

## Duración: 2 horas | Puntuación total: 100 puntos

**Nombre del estudiante:** José Gonzalo Almendros Navas **Fecha:** 12/11/25  
**Calificación:** \_\_\_\_\_\_\_\_\_\_\_\_\_\_\_\_\_\_\_\_\_\_\_\_

---

## PARTE I: TEORÍA (30 puntos)

**Tiempo estimado: 30 minutos**

### Pregunta 1 (5 puntos)

**¿Cuál es la diferencia entre `echo` y `print` en PHP? Explica con un ejemplo.**

echo permite imprimir múltiples valores por pantalla y print un único valor, pero print en el caso de querer mostrar por consola, por ejemplo, los valores que incluye un array, sí te muestra el contenido a diferencia de echo que te muestra “Array”.

***EJEMPLO:***

$array \= \[“fresas”, “platanos”, “peras”\]

**echo $array \=\>** *Array*  
**print($array) \=\>** *fresas, platanos, peras*

---

### Pregunta 2 (5 puntos)

**Explica qué son las constantes en PHP y cómo se diferencian de las variables. Proporciona un ejemplo de definición.**

**Tu respuesta:**

Una constante se define como constante porque no se modifica su valor a lo largo de la ejecución del código, o dicho de otra manera, su valor no “varía”. Se define como estándar usando las mayúsculas (ej: const DESCUENTO \= 25 / define(“DESCUENTO”, 25)).

Dentro de las constantes, podemos usar **const**, interpretada en tiempo de ejecución o **define**, en tiempo de compilación.

---

### Pregunta 3 (5 puntos)

**¿Cuáles son los operadores de comparación en PHP? Lista al menos 5 y explica qué hace cada uno.**

**Tu respuesta:**

**\==** operador común de comparación, compara únicamente valor (5 y “5” se cumple porque su valor es el mismo, aunque haya una variable tipo int y otra string)

**\===** operador más completo de comparación, compara valor y tipo (Se requiere de “5” y “5” para que se cumpla, en el anterior caso daría negativo. También podría ser 5 y 5\)

**||** operador comúnmente conocido como OR. “Usa” la condición que se de por verdadera y únicamente hace falta una condición verdadera para que el resultado sea verdadero while(\!partidaCompletada || vidas \> 0\)

**&&** operador conocido como AND. Requiere de dos condiciones verdaderas para dar resultado positivo   
if(edad \> 18 && edad \< 25\) joven \= true;

**\>=** Mayor o igual. Se cumple si la variable es mayor o igual que la segunda variable 

---

### Pregunta 4 (5 puntos)

**¿Qué es una función en PHP? Explica la diferencia entre parámetros y argumentos.**

**Tu respuesta:**

Una función es un bloque de código que se espera que se repita y cumple el propósito de no reescribir su bloque múltiples veces. Optimiza el tiempo que pasamos escribiendo y simplifica el entendimiento de nuestro código. Parámetro es el valor in situ que le pasamos a la función cuando la llamamos. Argumento es el tipo de variable o variables que **esperamos** que la función reciba para su correcto funcionamiento.

---

### Pregunta 5 (5 puntos)

**¿Cuál es la diferencia entre un array indexado y un array asociativo? Proporciona ejemplos.**

**Tu respuesta:**

Un array indexado es un array dentro de un array, una posición del array padre contiene un array hijo.

**$array** \= \[  
\[“nose, nosee”\],   
\[“frutas”, “peras”, “almendrillas”\],  
\[“yavesbro\]  
\];

Un array asociativo se basa en pares clave y valor con correspondencia. Una clave contiene un valor y un valor es parte de una clave. Dicho valor puede ser “único” (una única expresión), o contener otro array asociativo

**$arrayAsociativo** \= \[  
	nombre \=\> “Pepe”,  
	direccion \=\> \[  
			calle \=\> “crta malaga”,  
			C.P \=\> 186969  
\],  
	edad \=\> 26  
\];

---

### Pregunta 6 (5 puntos)

**Explica qué es el "scope" o ámbito de variables en PHP. ¿Cuál es la diferencia entre variables locales y globales?**

**Tu respuesta:**

El scope o ámbito se refiere al contexto dónde se reconoce una variable en función de si es global o local. 

Global (const, var, global…) se refiere a una variable reconocible desde todo el “proyecto”, ya sea dentro de una función o fuera.

Local se refiere de esta manera porque el ámbito es reducido a un bloque de código (normalmente reconocible por el uso de {}). Dicha variable solo es referenciable dentro del bloque y nunca desde fuera (genera error). De hecho, puedes tener en tu proyecto dos variables llamadas de la misma manera mientras una sea global y la otra global (no aconsejable)

---

## 

## 

## PARTE II: PRÁCTICA (70 puntos)

**Tiempo estimado: 90 minutos**

### Ejercicio 1: Análisis de código (15 puntos)

Analiza el siguiente código y responde las preguntas:

\<?php

$numero \= "42";

$resultado \= $numero \+ 8;

echo $resultado;

echo gettype($resultado);

$array \= \[1, 2, 3, 4, 5\];

$suma \= 0;

foreach ($array as $valor) {

    $suma \+= $valor;

}

echo $suma;

?\>

**Pregunta 1 (5 puntos):** ¿Qué imprime la primera línea de `echo`? ¿Por qué?

Imprime 50 porque se pasa por el forro de los c las comillas e interpreta “42” como un número

**Tu respuesta:**

---

**Pregunta 2 (3 puntos):** ¿Qué tipo de dato muestra `gettype()`?

**Tu respuesta:**

int.   
gettype() es un método que devuelve el tipo de dato de la variable con la que lo llamas

$precio \= 25.00003;  
echo gettype($precio) \=\> float 

---

**Pregunta 3 (3 puntos):** ¿Cuál es el resultado final de `$suma`?

**Tu respuesta:**

15\. Recorre cada posición para acumularla en la variable $suma. 5 \+ 4 \+ 3 \+ 2 \+ 1 es 15\.

---

**Pregunta 4 (4 puntos):** ¿Qué hubiera pasado si usáramos `$suma .= $valor` en lugar de `$suma += $valor`?

**Tu respuesta:**

Concatenaría los valores en un string de resultado “12345”

### Ejercicio 2: Completar código (20 puntos)

Completa el siguiente código para que funcione correctamente. Solo rellena los espacios en blanco (\_\_\_):

\<?php

// Declarar una constante para el precio base

const PRECIO\_BASE \= 10;

// Crear una función que calcule el precio con IVA

//NO ENTIENDO EL USO DEL PRECIO BASE SI NO PUEDO AÑADIR CÓDIGO. LA USARÍA EN FUNCIÓN DE SI EL PRECIO ES 0 O NEGATIVO. DE OTRA MANERA NO TIENE SENTIDO TENER UNA VARIABLE CONSTANTE SI EL OBJETIVO COMÚN DE UNA FUNCIÓN CALCULAR IVA SERÍA USANDO PRECIOS DISTINTOS. O SEA, RECIBE UN PRECIO DETERMINADO  Y LO CALCULA

function calcularIVA($precio) {

    $iva \= 0.21;

    $precio\_final \= $precio \* ($iva \+ 1);

    return $precio\_final;

}

// Llamar la función

$resultado \= calcularPrecio(25.08);

echo "El precio final es: $" . $resultado;

?\>

---

### Ejercicio 3: Escribir una función (20 puntos)

Escribe una función llamada `validarEmail()` que:

- Reciba un email como parámetro  
- Verifique que contenga un `@`  
- Verifique que contenga un `.`  
- Verifique que el `@` esté antes del `.`  
- Retorne `true` si es válido, `false` si no

**Ejemplo de uso:**

echo validarEmail("usuario@ejemplo.com");  // true

echo validarEmail("usuarioejemplo.com");   // false

echo validarEmail("usuario@.com");         // false

**Tu código:**

function validarEmail($email) {

    $contieneArroba \= $email.includes(“@”);  
    $contienePunto \= $email.includes(“.”);  
    $arrobaAntesDePunto \= false;  
    $valido \= false;

if($contieneArroba && $contienePunto){  
	for($i \= 0; $i \< strlen($email); i++){  
	if($email\[$i\] \== “.”){   
break;  
}  
	if($email\[$i\] \== “@”){   
$arrobaAntesDePunto \= true;   
break;  
}  
}  
};

if($contieneArroba && $contienePunto && $arrobaAntesDePunto){  
$valido \= true;  
}  
return $valido;  
}

---

### Ejercicio 4: Trabajar con arrays (15 puntos)

Dado el siguiente array de estudiantes:

$estudiantes \= \[

    \['nombre' \=\> 'Juan', 'calificacion' \=\> 8.5\],

    \['nombre' \=\> 'María', 'calificacion' \=\> 9.2\],

    \['nombre' \=\> 'Carlos', 'calificacion' \=\> 7.3\],

    \['nombre' \=\> 'Ana', 'calificacion' \=\> 8.9\],

\];

#### Parte 1 (7 puntos): Imprimir el estudiante con la calificación más alta

**Tu código:**

$notaMax \= 0;  
foreach($estudiantes as $clave \=\> $valor){  
	if(($clave\[“calificacion”\] \=\> $valor) \> $notaMax){  
		$notaMax \= $valor;  
};  
};

//No se muy bien recorrer claves y valores pero creo que se entiende el objetivo x)

$mejoresEstudiantes \= $estudiantes.filter($estudiante \=\> $estudiante\[“calificacion”\] \== $notaMax);

echo $mejoresEstudiantes;

---

#### Parte 2 (8 puntos): Calcular el promedio de calificaciones

**Tu código:**

$promedio \= $estudiantes.reduce(($estudiante, $suma) \=\> {suma \= $estudiante\[“calificacion”\] \+ $suma}  
	return $suma;  
)

$promedio \= $promedio / count($estudiantes);

echo $promedio;

---

## INSTRUCCIONES FINALES

1. **Entrega:**  
     
   - Crea un SOLO archivo `examen_tema2_[TuNombre].php o .md o .doc`  
   - Incluye comentarios con tus respuestas teóricas si es php sino normal como texto  
   - Incluye el código de los ejercicios prácticos  
   - Asegúrate de que el código sea ejecutable

   

2. **Formato de respuestas teóricas:**  
     
   /\*  
     
   PREGUNTA 1:  
     
   Tu respuesta aquí...  
     
   \*/  
     
3. **Formato de ejercicios prácticos:**  
     
   // EJERCICIO 1: Análisis de código  
     
   // Pregunta 1: ...  
     
   // Pregunta 2: ...  
     
   // EJERCICIO 2: Completar código  
     
   // \[Tu código aquí\]  
     
   // EJERCICIO 3: Función validarEmail  
     
   function validarEmail($email) {  
     
       // Tu código aquí  
     
   }  
     
   // EJERCICIO 4: Arrays  
     
   // Parte 1: \[Tu código aquí\]  
     
   // Parte 2: \[Tu código aquí\]  
     
4. **Requisitos:**  
     
   - El archivo debe ser válido PHP (sin errores de sintaxis)  
   - Incluye comentarios explicativos  
   - Responde todas las preguntas  
   - Sé claro y conciso

---

## ESCALA DE CALIFICACIÓN

| Puntos | Calificación | Descripción |
| :---- | :---- | :---- |
| 90-100 | Excelente (A) | Dominio completo del tema |
| 80-89 | Muy Bien (B) | Buen dominio con pequeños errores |
| 70-79 | Bien (C) | Dominio aceptable |
| 60-69 | Suficiente (D) | Conocimiento básico |
| \< 60 | Insuficiente (F) | Necesita refuerzo |

---

## MATERIAL DE REFERENCIA PERMITIDO

- Ninguno

---

## NOTAS IMPORTANTES

- **No se permite:** Copiar de internet, usar IA para generar respuestas, copiar de compañeros  
- **Se permite:** NULL  
- **Tiempo:** Gestiona bien el tiempo entre teoría y práctica (30 min \+ 90 min)  
- **Dudas:** Levanta la mano si tienes preguntas sobre el enunciado

---

**Asignatura:** Programación Web \- PHP 8.4  
**Nivel:** Grado Superior  
**Fecha:** Noviembre 2025  
