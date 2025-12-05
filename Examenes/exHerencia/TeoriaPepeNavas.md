# 📚 EXAMEN FINAL DE TEORÍA - DWES 2025
## Temas 2, 3 y 4 - PHP 8.4, Base de Datos y POO

| **Información del Examen** | |
|---------------------------|---|
| **Valor** | 75% de la nota final |
| **Duración** | 2 horas (teoría + práctica) |
| **Parte Teoría** | 50 puntos |
| **Material permitido** | ❌ SIN APUNTES |
| **Fecha** | _________________ |

---

| **Alumno/a** |                                   |
|-------------|-----------------------------------|
| **Nombre** | José Gonzalo  |
| **Apellidos** | Almendros Navas |

---

# PARTE A: TEST (20 puntos - 1 punto cada pregunta)
### Marca con una X la respuesta correcta

---

## TEMA 2: PHP 8.4 Básico

### 1. ¿Cuál es la forma correcta de declarar una variable en PHP?
- [ ] a) `var $nombre = "Juan";`
- [x] b) `$nombre = "Juan";`
- [ ] c) `let nombre = "Juan";`
- [ ] d) `nombre := "Juan";`

### 2. ¿Qué tipo de dato devuelve la expresión `3 / 2` en PHP?
- [ ] a) `int`
- [x] b) `float`
- [ ] c) `string`
- [ ] d) `double`

### 3. ¿Cuál es la diferencia entre `==` y `===` en PHP?
- [ ] a) No hay diferencia, son equivalentes
- [ ] b) `==` compara valor y tipo, `===` solo valor
- [x] c) `===` compara valor y tipo, `==` solo valor
- [ ] d) `===` es para strings, `==` para números

### 4. ¿Qué función se usa para obtener la longitud de un array en PHP?
- [ ] a) `length($array)`
- [ ] b) `size($array)`
- [x] c) `count($array)`
- [ ] d) `len($array)`

### 5. ¿Cuál es la sintaxis correcta de la expresión `match` en PHP 8.4?
- [ ] a) `match($x) { 1: "uno", 2: "dos" }`
- [x] b) `match($x) { 1 => "uno", 2 => "dos" }`
- [ ] c) `match $x { case 1: "uno"; case 2: "dos"; }`
- [ ] d) `match($x) { when 1 then "uno", when 2 then "dos" }`

### 6. ¿Qué valor devuelve `isset($variable)` si `$variable = null`?
- [] a) `true`
- [x] b) `false`
- [ ] c) `null`
- [ ] d) Error de sintaxis

### 7. ¿Cuál es la forma correcta de concatenar strings en PHP?
- [ ] a) `$a + $b`
- [x] b) `$a . $b`
- [ ] c) `$a & $b`
- [ ] d) `concat($a, $b)`

---

## TEMA 3: Acceso a Base de Datos

### 8. ¿Qué significa PDO en PHP?
- [x] a) PHP Data Object
- [ ] b) PHP Database Operations
- [ ] c) PHP Data Objects
- [ ] d) Personal Database Objects

### 9. ¿Cuál es el modo de error recomendado para PDO en producción?
- [ ] a) `PDO::ERRMODE_SILENT`
- [ ] b) `PDO::ERRMODE_WARNING`
- [x] c) `PDO::ERRMODE_EXCEPTION`
- [ ] d) `PDO::ERRMODE_DEBUG`

### 10. ¿Qué método de PDO se usa para obtener el ID del último registro insertado?
- [ ] a) `getLastId()`
- [ ] b) `insertId()`
- [x] c) `lastInsertId()`
- [ ] d) `getInsertedId()`

### 11. ¿Cuál es la principal ventaja de usar prepared statements?
- [ ] a) Son más rápidos
- [x] b) Previenen SQL Injection
- [ ] c) Usan menos memoria
- [ ] d) Son más fáciles de escribir

### 12. ¿Qué método se usa para obtener todos los resultados de una consulta SELECT?
- [ ] a) `fetch()`
- [x] b) `fetchAll()`
- [ ] c) `getAll()`
- [ ] d) `selectAll()`

### 13. ¿Qué operación SQL se usa en una relación 1:N para unir tablas?
- [ ] a) `MERGE`
- [ ] b) `UNION`
- [x] c) `JOIN`
- [ ] d) `CONCAT`

### 14. ¿Cuál es el propósito de `$pdo->beginTransaction()`?
- [ ] a) Iniciar una nueva conexión
- [x] b) Iniciar un grupo de operaciones que se ejecutan como unidad
- [ ] c) Resetear la base de datos
- [ ] d) Crear una nueva tabla

---

## TEMA 4: Clases y Herencia (POO)

### 15. ¿Cuál es la visibilidad por defecto de una propiedad en PHP si no se especifica?
- [x] a) `private`
- [ ] b) `protected`
- [ ] c) `public`
- [ ] d) Error de sintaxis (debe especificarse)

### 16. ¿Qué palabra clave se usa para heredar de una clase en PHP?
- [ ] a) `inherits`
- [x] b) `extends`
- [ ] c) `implements`
- [ ] d) `derives`

### 17. ¿Cuál es la diferencia entre una clase abstracta y una interfaz?
- [ ] a) No hay diferencia
- [x] b) Una clase abstracta puede tener implementación, una interfaz no (antes de PHP 8)
- [ ] c) Una interfaz puede tener propiedades, una clase abstracta no
- [ ] d) Solo se puede heredar de interfaces

### 18. ¿Qué son los Property Hooks en PHP 8.4?
- [x] a) Funciones para validar propiedades al asignarlas o accederlas
- [ ] b) Eventos que se disparan al crear objetos
- [ ] c) Decoradores de métodos
- [ ] d) Macros de preprocesamiento

### 19. ¿Cuál es la sintaxis correcta para Asymmetric Visibility en PHP 8.4?
- [ ] a) `public(get) private(set) string $nombre`
- [x] b) `public private(set) string $nombre`
- [ ] c) `get:public set:private string $nombre`
- [ ] d) `@visibility(public, private) string $nombre`

### 20. ¿Para qué sirven los Traits en PHP?
- [ ] a) Para crear interfaces múltiples
- [x] b) Para reutilizar código entre clases no relacionadas por herencia
- [ ] c) Para definir constantes globales
- [ ] d) Para crear variables estáticas

---

# PARTE B: PREGUNTAS CORTAS (15 puntos - 3 puntos cada una)

### 21. Explica la diferencia entre `include` y `require` en PHP. ¿Cuándo usarías cada uno?

```
'include' incluye el archivo pero en ningún momento valida si ese archivo existe o no, y la ejecución del código sigue.
'requiere' requiere que el archivo exista para proceder con la ejecución del código, si no da error.

En función de la importancia del archivo y su uso usaría uno u otro, pero por lo general prefiero usar 'requiere' porque me sirva para validar si el archivo existe o la ruta está bien implementada.
```

### 22. ¿Qué es "Soft Delete" en base de datos? Escribe un ejemplo de consulta SQL que lo implemente.

```
Un soft delete no borra el archivo, simplemente se le atribuye una propiedad que dictamina si la fila estaría hipotéticamente borrada, pero sin perder la información.
'ALTER TABLE productos ADD 'eliminado' BOOLEAN';
'UPDATE productos SET eliminado = true WHERE id = 2';
```

### 23. Explica qué es una transacción en base de datos y para qué sirven los métodos `commit()` y `rollBack()`.

```
Es un conjunto de operaciones que se ejecutan como uno. Se requiere que todas las operaciones se completen para ejecutarse. Un caso práctico es un ingreso y un recibo de efectivo, si el recibo falla, no se ingresa, y viceversa.
$pdo->commit() registra la acción y setea un punto de guardado a partir del cual se intentaría ejecutar la operación.
$pdo->rollBack() revierte las acciones, en caso de error, en el bloque catch.
```

### 24. ¿Cuál es la diferencia entre `public`, `private` y `protected` en POO? Pon un ejemplo de cuándo usarías cada uno.

```
public -> Propiedad accesible desde dentro y fuera de la clase. Ej -> En ningún caso querría negar la visibilidad de la propiedad 'nombre' de mi clase 'Vehículo', es un tipo de información que debe ser visible para todos los usuarios.
private -> Propiedad únicamente accesible desde la misma clase, no es accesible ni desde sus hijas ni desde fuera del archivo. Ej-> Una propiedad 'contraseña' debe ser segura, es información delicada y se debe manejar con privacidad.
protected -> Propiedad accesible desde la propia clase y desde sus hijas. Ej -> 'AutorId' es una propiedad que un usuario público no debe tener acceso pero sí debo yo, como "administrador", tener acceso a él. 
```

### 25. Explica qué es el operador nullsafe (`?->`) en PHP 8.4 y pon un ejemplo de su uso.

```
Es un tipo de operador que sirve para ejecutar de forma más cómoda la devolución de valores de un array asociativo mediante comprobación del valor de una clave.

return usuario ?-> direccion ?-> codigoPostal;
 
```

---

# PARTE C: CÓDIGO Y ANÁLISIS (15 puntos - 5 puntos cada pregunta)

### 26. Analiza el siguiente código e indica qué errores tiene y cómo los corregirías:

```php
<?php
class Producto {
    public $nombre;
    private $precio;
    
    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }
    
    private function getPrecio() {
        return $this->precio;
    }
}

$p = new Producto("Manzana", 2.50);
echo $p->getPrecio();
?>
```

**Errores encontrados y correcciones:**
```
Estás declarando un getter con accesibilidad privada de una propiedad privada al cual luego intentas llamar cuando declaras un objeto Producto. También es recomendable tipar las propiedades y la devolución de una función :)
```

---

### 27. Escribe el código PHP para conectar a una base de datos MySQL llamada "tienda" con las siguientes características:
- Host: localhost
- Puerto: 3306
- Usuario: admin
- Contraseña: secret123
- Debe configurarse para lanzar excepciones en caso de error

```php
<?php
// Escribe tu código aquí:
try{
    $pdo = new PDO('mysql:host=localhost, port=3306; username=admin; password=secret123');
}catch(PDOException){
    echo "Error: " . PDO::ERRMODE_EXCEPTION;
}
?>
```

---

### 28. Dado el siguiente diagrama de clases, escribe la declaración de la clase `Empleado` en PHP 8.4 usando Property Hooks:

```
┌─────────────────────────────┐
│         Empleado            │
├─────────────────────────────┤
│ - nombre: string            │
│ - salario: float (≥ 1000)   │
│ - email: string             │
├─────────────────────────────┤
│ + getNombreCompleto()       │
│ + subirSalario(porcentaje)  │
└─────────────────────────────┘
```

**Requisitos:**
- El salario mínimo es 1000 (validar al asignar)
- El nombre debe guardarse en mayúsculas
- El email es de solo lectura después de crearse

```php
<?php
// Escribe tu código aquí:
class Empleado  {
    private string $nombre{
        set => $this->nombre = strtoupper($nombre);
    }
    private float $salario{
        set => if($value < 1000) ? throw new Exception("Salario mínimo de 1000") : $this->salario = $value;
    }
    
   public string $email;

    public function getNombreCompleto(): string{
        return $this->nombre;
    }
    public function subirSalario(float $porcentaje){
        $this->salario *= ($porcentaje+1);
    }
    
} 


?>
```

---

# PARTE D: TEORÍA CONCEPTUAL (10 puntos)

### 29. (5 puntos) Explica los tipos de relaciones en Base de Datos (1:1, 1:N, N:M) con ejemplos del mundo real:

```
ONE-TO-ONE (1:1):

Relación única entre una entidad y otra.

Ejemplo: Un producto sólo tiene una categoría y esa categoría sólo pertenecería a ese producto (caso hipotético)

ONE-TO-MANY (1:N):

Una entidad puede estar relacionada con otras varias entidades pero esas entidades no tienen por qué estar relacionadas entre sí.

Ejemplo: Un producto tiene varias categorías. Una naranja puede tener de categoría 'frutas' y 'naranja' (categoría para color naranja) 

MANY-TO-MANY (N:M):

Varias entidades pueden tener relación con otras varias entidades.

Ejemplo: Un dueño puede tener varias mascotas distintas, y esas mascotas pueden tener varios dueños (caso en el que una mascota puede tener dueño y dueña).
```

---

### 30. (5 puntos) Explica las diferencias entre **Clase Abstracta**, **Interface** y **Trait** en PHP. ¿Cuándo usarías cada uno?

```
CLASE ABSTRACTA:
¿Qué es? Una clase abstracta es una clase que debe tener implementada el uso de al menos una función. No pueden instanciarse objetos directos de la clase.

¿Cuándo usarla? Cuando quieres generalizar un tipo de objeto pero ese objeto no tiene suficientes características para ser válido como instancia por sí solo. Ej-> Vehículo. Un vehículo es demasiado abstracto. ¿Cuántas ruedas tiene? ¿Qué tipo de chasis? Necesita más especificación, a diferencia de un coche, por ejemplo.

INTERFACE:
¿Qué es? No implementa ningún método ni tiene atributos. Se diferencia esencialmente para definir características o cosas de la que puede ser capaz el objeto que implementa la interfaz. Ej -> Nadable.

¿Cuándo usarla? Se usa para definir características en común que pueden tener objetos que NO tienen relación directa entre ellos.

TRAIT:
¿Qué es? La manera alternativa que se han inventado los de PHP para solucionar el problema de la herencia múltiple. 

¿Cuándo usarlo? Cuando quieres heredar otra clase

¿Puede una clase usar los tres a la vez? Explica: _________________________________

_______________________________________________________________________________
```

---

## 📊 TABLA DE PUNTUACIÓN

| Parte | Puntos Máximos | Puntos Obtenidos |
|-------|----------------|------------------|
| A - Test | 20 | |
| B - Preguntas Cortas | 15 | |
| C - Código y Análisis | 15 | |
| D - Teoría Conceptual | 10 | |
| **TOTAL TEORÍA** | **50** | |

---

> ⏰ **Recuerda:** Esta es solo la parte teórica. Después continuarás con la parte práctica donde SÍ podrás usar apuntes.
