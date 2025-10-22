# 📚 Ejercicio PHP - Navegación Dinámica

## 🎯 ¿Cómo funciona?

Este proyecto usa **navegación dinámica con parámetros GET**. Esto significa que:

- **Un solo archivo (`index.php`)** controla toda la web
- Las páginas se cargan dinámicamente según el parámetro `?page=` en la URL
- Header y Footer están modularizados (se incluyen una sola vez)

---

## 🔗 Estructura de URLs

```
http://localhost/index.php              → Página principal (home.php)
http://localhost/index.php?page=home    → Página principal
http://localhost/index.php?page=sobremi → Página "Sobre mí"
http://localhost/index.php?page=contacto → Página de contacto
```

---

## 📂 Estructura de archivos

```
/EjerciciosEntrega/
├── index.php           ← PUNTO DE ENTRADA (único archivo que se abre)
├── config/
│   └── config.php      ← Variables globales (nombre, fecha, etc.)
├── includes/
│   ├── header.php      ← Menú de navegación
│   └── footer.php      ← Pie de página
├── pages/
│   ├── home.php        ← Contenido de la página principal
│   ├── sobremi.php     ← Contenido "Sobre mí"
│   └── contacto.php    ← Formulario de contacto
└── assets/
    ├── styles.css
    └── img/
```

---

## 🧩 ¿Cómo funciona la navegación dinámica?

### 1️⃣ El usuario hace clic en un enlace

En `header.php`, los enlaces tienen este formato:

```php
<a href="index.php?page=sobremi">Sobre mí</a>
```

### 2️⃣ PHP lee el parámetro GET

En `index.php`, obtenemos el valor del parámetro:

```php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
```

**Explicación:**
- `$_GET['page']` → Lee el valor de `?page=` en la URL
- Si no existe, usa `'home'` por defecto

### 3️⃣ Validación de seguridad

```php
$allowed_pages = ['home', 'sobremi', 'contacto'];

if (!in_array($page, $allowed_pages, true)) {
    $page = 'home';
}
```

**¿Por qué?** Para evitar que alguien intente cargar archivos no permitidos como:
- `index.php?page=../../config/config`
- `index.php?page=hackeo`

**Nota:** El tercer parámetro `true` en `in_array()` hace una comparación estricta (tipo y valor).

### 4️⃣ Cargar la página solicitada

```php
$page_file = "./pages/" . $page . ".php";
include($page_file);
```

**Resultado:** Carga `./pages/sobremi.php` dentro de `<main>`

**Nota:** Ya no necesitamos `file_exists()` porque la whitelist garantiza que el archivo existe.

---

## ✅ Ventajas de este sistema

1. **Un solo punto de entrada** → Fácil de mantener
2. **Header/Footer se cargan una sola vez** → No duplicas código
3. **URLs limpias y legibles** → `?page=contacto`
4. **Fácil añadir nuevas páginas:**
   - Crear `pages/nuevapagina.php`
   - Añadir `'nuevapagina'` al array `$allowed_pages`
   - Añadir enlace en `header.php`

---

## 🚀 Cómo usar

1. **Abrir en el navegador:**
   ```
   http://localhost/EjerciciosEntrega/index.php
   ```

2. **Navegar usando los enlaces del menú**

3. **O escribir manualmente:**
   ```
   http://localhost/EjerciciosEntrega/index.php?page=contacto
   ```

---

## 🎓 Conceptos clave aprendidos

### `$_GET`
- Variable superglobal de PHP
- Contiene parámetros de la URL
- Ejemplo: `?page=contacto` → `$_GET['page']` = `"contacto"`

### `isset()`
- Verifica si una variable existe y no es `null`
- Evita errores si el parámetro no está en la URL

### `in_array()`
- Verifica si un valor existe en un array
- Usado para validar páginas permitidas (whitelist)
- Con tercer parámetro `true` hace comparación estricta

### `include()` / `require()`
- Incluyen archivos PHP dentro de otro
- `require()` da error fatal si no encuentra el archivo
- `include()` solo muestra un warning

---

## 🔒 Seguridad básica implementada

✅ Validación de páginas permitidas (whitelist) con comparación estricta  
✅ Sanitización del input ANTES de usar `$_GET['page']`  
✅ Valor por defecto si el parámetro no existe  
✅ Solo archivos autorizados pueden ser incluidos

---

¡Ahora ya sabes cómo funciona la navegación dinámica con PHP! 🎉
