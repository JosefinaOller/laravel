# Aprendiendo Laravel con Develoteca

Este repositorio documenta mi progreso y aprendizaje sobre Laravel mientras seguía un tutorial en YouTube del canal **Develoteca**. A continuación, se detallan los temas y conceptos que fui aprendiendo durante el tutorial.

---

## Contenidos Aprendidos

### Introducción a Laravel
- Descripción general de Laravel y su importancia en el desarrollo web moderno.
- Ventajas de usar Laravel: sintaxis elegante, herramientas integradas y comunidad activa.

### Herramientas necesarias
- **Composer**: Gestor de dependencias para PHP.
- **XAMPP**: Servidor local para desarrollo.
- **Visual Studio Code**: Editor de código recomendado.

### Instalación de Laravel
- Creación de un nuevo proyecto usando Composer:
  ```bash
  composer create-project --prefer-dist laravel/laravel nombre-del-proyecto
  ```
- Configuración inicial del proyecto.

### Estructura de un proyecto Laravel
- Explicación de la estructura de carpetas y archivos:
  - **app**: Lógica de la aplicación (controladores, modelos, etc.).
  - **routes**: Definición de rutas.
  - **resources**: Vistas y assets.
  - **database**: Migraciones y seeders.
  - **config**: Configuraciones de la aplicación.

### Configuración de la base de datos
- Conexión a la base de datos mediante el archivo `.env`.
- Uso de **phpMyAdmin** para gestionar la base de datos.
- Creación de una base de datos para el proyecto.

### Rutas y Vistas
- Definición de rutas en el archivo `web.php`.
- Creación de vistas usando Blade.
- Uso de la función `view()` para retornar vistas desde las rutas.

### Personalización de Vistas
- Modificación de vistas con HTML y Blade.
- Uso de plantillas para reutilizar código (header, footer, etc.).

### Manejo de Rutas
- Rutas con parámetros.
- Rutas con nombres.
- Grupos de rutas.

### Formularios y Método POST
- Creación de formularios en Blade.
- Manejo de datos enviados por POST en las rutas.
- Uso de la función `request()` para obtener datos del formulario.

### Controladores
- Creación de controladores usando Artisan:
  ```bash
  php artisan make:controller NombreController
  ```
- Manejo de la lógica de la aplicación en controladores.
- Validación de datos recibidos desde formularios.

### Blade Templates
- Uso de plantillas Blade para crear vistas dinámicas.
- Herencia de plantillas con `@extends` y `@section`.
- Inclusión de componentes reutilizables.

### Migraciones
- Creación de migraciones para definir la estructura de la base de datos:
  ```bash
  php artisan make:migration create_nombre_tabla
  ```
- Ejecución de migraciones:
  ```bash
  php artisan migrate
  ```

### Modelos y Controladores
- Creación de modelos y controladores en un solo comando:
  ```bash
  php artisan make:model NombreModelo -mc
  ```
- Relación entre modelos, controladores y la base de datos.

### Mostrar Datos en Laravel
- Consulta de datos desde la base de datos usando Eloquent.
- Paso de datos desde el controlador a la vista.
- Mostrar datos en una vista usando Blade.

### Proyecto Práctico
- Desarrollo de un proyecto aplicando todos los conceptos aprendidos.
- Integración de rutas, controladores, vistas, modelos y migraciones.

---

## Cómo usar este repositorio
1. Clona el repositorio:
   ```bash
   git clone https://github.com/JosefinaOller/laravel.git
   ```
2. Instala las dependencias de Composer:
   ```bash
   composer install
   ```
3. Configura el archivo `.env` con tus credenciales de base de datos.
4. Ejecuta las migraciones:
   ```bash
   php artisan migrate
   ```
5. Inicia el servidor de desarrollo:
   ```bash
   php artisan serve
   ```

---

## Recursos Adicionales
- [Documentación oficial de Laravel](https://laravel.com/docs)
- [Canal de YouTube Develoteca](https://www.youtube.com/c/Develoteca)

---

¡Gracias por seguir mi progreso! 
