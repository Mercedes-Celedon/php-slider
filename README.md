

---

# Slider Interactivo con PHP y JavaScript

Este proyecto es un slider interactivo diseñado para mostrar contenido dinámico de forma atractiva y responsive. Fue desarrollado utilizando **PHP** para gestionar la lógica del backend y **JavaScript** para la interactividad, con la ayuda de la librería Swiper para crear la funcionalidad del slider.

## Características del Proyecto

- **Responsive**: El slider está optimizado para dispositivos móviles y de escritorio.
- **Modularidad**: Código organizado para facilitar la escalabilidad y el mantenimiento.
- **Interactividad**: Uso de JavaScript para transiciones suaves y controles interactivos.
- **Back-end con PHP**: Carga dinámica del contenido desde una base de datos.

---

## Tecnologías Usadas

- **PHP**: Para manejar el backend y cargar el contenido del slider desde una base de datos.
- **JavaScript**: Para controlar la interactividad y personalizar la funcionalidad del slider.
- **Swiper.js**: Librería de sliders moderna para crear carruseles atractivos y fluidos.
- **SCSS/CSS**: Para los estilos del proyecto y garantizar un diseño responsive.

---

## Estructura de Carpetas

El proyecto está organizado de la siguiente manera:

```
/assets
  /css          # Contiene los archivos SCSS y el archivo CSS compilado
  /images       # Imágenes utilizadas en el slider
  /js           # Scripts de JavaScript
/src
  /database     # Archivo para la conexión a la base de datos
  /template     # Plantillas para los elementos del slider
index.php       # Archivo principal que renderiza el slider
```

### Descripción de Carpetas

- **`/assets`**: Recursos estáticos como estilos, scripts y archivos multimedia.
- **`/src/database`**: Archivo que define la conexión a la base de datos MySQL.
- **`/src/template`**: Plantillas PHP que generan dinámicamente el HTML del slider.
- **`index.php`**: Punto de entrada del proyecto.

---

## Configuración Inicial

### 1. Crear la Base de Datos

Crea la base de datos `slider_project` y la tabla para el contenido del slider:

```sql
CREATE DATABASE slider_project;

USE slider_project;

CREATE TABLE slides (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  description TEXT,
  image_url VARCHAR(255) NOT NULL,
  link VARCHAR(255)
);
```

### 2. Levantar el Proyecto en XAMPP

1. **Inicia XAMPP**: Asegúrate de que Apache y MySQL están corriendo.
2. **Coloca los archivos**: Copia el proyecto en la carpeta `htdocs` de XAMPP.
3. **Accede al slider**: Abre un navegador y ve a `http://localhost/nombre-de-tu-proyecto/index.php`.

### 3. Configurar la Conexión a la Base de Datos

Edita el archivo `src/database/connection.php` para incluir tus credenciales de MySQL:

```php
<?php
$host = 'localhost'; 
$dbname = 'slider_project'; 
$username = 'root'; // Usuario por defecto
$password = ''; // Sin contraseña por defecto en XAMPP
$connection = new mysqli($host, $username, $password, $dbname);
if ($connection->connect_error) {
    die("Error de conexión: " . $connection->connect_error);
}
?>
```

---

## Personalización de Estilos

El archivo principal de estilos `styles.scss` utiliza módulos SCSS para mantener los estilos organizados:

```scss
@use 'variables';      // Variables globales como colores y tamaños
@use 'global';         // Estilos generales para el sitio
@use 'layout';         // Estilos para la estructura del slider
@use 'swiper';         // Personalización de Swiper
```

### Cómo Compilar SCSS a CSS

Para compilar los estilos de SCSS a CSS, ejecuta el siguiente comando:

```bash
sass assets/css/styles.scss assets/css/styles.css
```

---

## Uso de Swiper.js

Swiper.js se utiliza para manejar el comportamiento del slider. Algunas opciones implementadas incluyen:

- **Slides Per View**: Ajusta el número de diapositivas visibles.
- **Responsive Breakpoints**: Cambia la configuración según el tamaño de la pantalla.
- **Navigation & Pagination**: Agrega botones y paginación para facilitar la navegación.

```javascript
const swiper = new Swiper('.swiper-container', {
  slidesPerView: 1,
  spaceBetween: 10,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },
});
```

---

## Conclusión

Este proyecto demuestra cómo crear un slider interactivo con un diseño moderno utilizando PHP y JavaScript. La estructura modular y el uso de tecnologías como Swiper hacen que sea fácil de mantener, personalizar y escalar según las necesidades del proyecto.

--- 