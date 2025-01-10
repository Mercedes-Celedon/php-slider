

---

# Proyecto de Prueba Técnica para Desarrollador

Este proyecto es una prueba técnica para conseguir trabajo como desarrollador, en donde se desarrolló un módulo para la visualización de proyectos, tanto para dispositivos de escritorio como para móviles. Se utilizó PHP, SCSS/CSS, Swiper y JavaScript para su construcción.

## Tecnologías Usadas

- **PHP**: Para la creación del backend y la gestión de la base de datos.
- **SCSS/CSS**: Para la creación de estilos y el diseño responsive.
- **Swiper**: Para crear el slider de los proyectos.
- **JavaScript**: Para la interactividad, incluyendo la apertura del modal con la información de cada proyecto.

## Estructura de Carpetas

La estructura del proyecto es la siguiente:

```
/assets
  /css          # Contiene los archivos SCSS y el archivo CSS compilado
  /images       # Contiene las imágenes utilizadas en el proyecto
  /js           # Contiene los scripts de JavaScript
/src
  /controller   # Contiene la consulta SQL para obtener los proyectos
  /database     # Contiene el archivo de conexión a la base de datos
  /template     # Contiene los archivos de plantilla como el modal y las cards
index.php       # Archivo principal que renderiza el contenido
```

### Beneficios de la Estructura de Carpetas

Esta estructura es rentable porque organiza el código de forma modular. Separamos los recursos estáticos (imágenes, CSS, JS) de los componentes del backend (conexión a la base de datos, plantillas) y el archivo principal `index.php`, lo cual mejora la mantenibilidad y escalabilidad del proyecto. 

- **/assets**: Guarda todos los archivos públicos que el navegador necesita, como imágenes, CSS y JavaScript.
- **/src**: Mantiene los archivos PHP que gestionan la lógica del backend y la conexión a la base de datos.
- **index.php**: Archivo principal que recoge las plantillas y los datos de la base de datos y los muestra al usuario.

## Configuración Inicial

### 1. Crear la Base de Datos

Primero, necesitas crear la base de datos `technical_test` en MySQL. Para ello, abre phpMyAdmin en XAMPP y ejecuta el siguiente SQL:

```sql
CREATE DATABASE technical_test;

USE technical_test;

CREATE TABLE projects (
  id INT(10) NOT NULL AUTO_INCREMENT,
  title VARCHAR(255) NOT NULL,
  url_photo VARCHAR(255) NOT NULL,
  price DECIMAL(10,2)	 NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB;
```

### 2. Levantar el Proyecto en XAMPP

1. **Inicia XAMPP**: Abre el panel de control de XAMPP y asegúrate de que Apache y MySQL estén corriendo.
2. **Mover los archivos**: Coloca todos los archivos de tu proyecto dentro de la carpeta `htdocs` de XAMPP.
3. **Accede al proyecto**: Abre un navegador y ve a `http://localhost/nombre-de-tu-carpeta/index.php`.

### 3. Configurar la Conexión a la Base de Datos

Asegúrate de que el archivo `src/database/connection.php` contiene la configuración correcta para conectarse a tu base de datos MySQL:

```php
<?php
$host = 'localhost'; 
$dbname = 'technical_test'; 
$username = 'root'; // Por defecto en XAMPP
$password = ''; // Dejar vacío si no se ha configurado una contraseña
$connection = new mysqli($host, $username, $password, $dbname);
if ($connection->connect_error) {
    die("Conexión fallida: " . $connection->connect_error);
}
?>
```

## Construcción del archivo `styles.scss`

En el archivo `styles.scss` se utilizan diferentes módulos para gestionar los estilos:

```scss
@use 'variables';      // Variables globales como colores, fuentes y tamaños
@use 'global';         // Estilos generales para la estructura y layout
@use 'layout';         // Estilos relacionados con el diseño de la página
@use 'typography';     // Estilos tipográficos como fuentes y tamaños de texto
@use 'swiper';         // Personalización del swiper (slider de los proyectos)
@use 'modal';          // Estilos del modal de información de los proyectos
```

### Explicación de cada archivo SCSS

- **variables.scss**: Aquí se definen todas las variables globales como colores, tamaños de fuente, márgenes, etc. Esto permite que los estilos sean fácilmente configurables.
- **global.scss**: Contiene estilos generales que se aplican a todo el sitio (por ejemplo, márgenes, padding, y configuraciones de fuente global).
- **layout.scss**: Maneja la estructura de la página, como el diseño de la cabecera, el contenido y la disposición de las secciones.
- **typography.scss**: Especifica los estilos relacionados con la tipografía (fuentes, tamaños de texto, líneas de texto).
- **swiper.scss**: Personaliza los estilos del componente Swiper para los slides y la paginación.
- **modal.scss**: Estilos específicos para el modal que se muestra cuando el usuario hace clic en un proyecto.

### Cómo Compilar SCSS a CSS

Cada vez que realices cambios en el archivo `styles.scss`, necesitarás compilarlo a CSS para que los cambios sean aplicados en el navegador. Para hacerlo, usa el siguiente comando en la terminal:

```bash
sass assets/css/styles.scss assets/css/styles.css
```

Este comando convertirá tu archivo SCSS a CSS, y el archivo resultante se podrá usar en la página web.

## Conclusión

Este proyecto te permite comprender cómo organizar un sitio web utilizando PHP y tecnologías front-end como SCSS, JavaScript y Swiper para crear una experiencia interactiva. La estructura modular permite una fácil escalabilidad, y la configuración de la base de datos proporciona un control completo sobre los datos que se muestran en la interfaz.


--- 
