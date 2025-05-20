# Clasificador de Edad - Portal de Salud Preventiva

Este es un sistema web desarrollado en Laravel 11 para una institución de salud preventiva, cuyo objetivo es **clasificar a las personas según su edad** y redirigirlas a secciones informativas específicas antes de cualquier registro o autenticación.

---

## Objetivo del Proyecto

Clasificar a los usuarios según su edad mediante un middleware seguro, modular y validado, redirigiéndolos a rutas informativas dedicadas a su rango etario, como parte de una experiencia de orientación previa al ingreso al sistema.

---

## Tecnologías Usadas

- **PHP 8.1+**
- **Laravel 11**
- **MySQL**
- **Bootstrap 5 (CDN)**
- **Blade Templates**

---

## Instalación y Ejecución

1. Clona o descomprime el proyecto:

```bash
git clone https://github.com/usuario/portal-salud-edades.git
cd portal-salud-edades
```

2. Instala dependencias:

```bash
composer install
```

3. Crea y configura tu archivo .env:


```bash
cp .env.example .env
```

Configura tu base de datos en el archivo .env:

```bash
DB_DATABASE=salud
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
```

4. Genera la clave de la app:

```bash
php artisan key:generate
```

5. Ejecuta las migraciones:

```bash
php artisan migrate
```

6. Levanta el servidor local:

```bash
php artisan serve
```

Accede al sistema en http://localhost:8000


