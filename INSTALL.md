# Manual de instalación

## 1. Requerimientos

| Nombre       | Versión | Descripción                                            | Instalación                                      |
|--------------|---------|--------------------------------------------------------|--------------------------------------------------|
| `MySql` | ^8.0     | Gestor de base de datos.                               | <https://www.mysql.com/> |

## 2. Instalación

### Clonación del proyecto e instalación de dependencias

```bash
# Clonación del proyecto
git clone https://github.com/NaviG11/blog-laravel-proyect.git

# Ingresamos dentro de la carpeta del proyecto
cd blog-laravel-proyect

# Instalamos dependencias
composer install
npm install
```

### Archivos de configuración

Crear los archivos de configuración con base en los archivos `sample` y modificar los valores que sean necesarios.

```bash
# Variables de entorno globales
cp .env.example .env

# Otros parámetros requeridos

# Configuración para almacenamiento de archivos
php artisan storage:link
php artisan key:generate
```

## Configuración y migraciones de la Base de Datos

```bash
# Realizar las migraciones correspondientes
php artisan migrate:fresh --seed
```

<!-- Para más detalles ver el archivo [database/scripts/CREATE_DATABASE.md](./database/scripts/CREATE_DATABASE.md) -->

## Despliegue de la aplicación

```bash
# Ejecución en modo desarrollo
npm run dev
php artisan serve
# Ejecución en modo PRODUCCIÓN

```

## Comandos útiles para el modo desarrollo

## Variables de entorno

**Configuración de la base de datos**

| Variable                 | Valor por defecto | Descripción                                                                                       |
|--------------------------|-------------------|---------------------------------------------------------------------------------------------------|
| `DB_HOST`                | `localhost`       | Host de la base de datos.                                                                         |
| `DB_USERNAME`            | `root`        | nombre de usuario de la base de datos.                                                            |
| `DB_PASSWORD`            | ``        | contraseña de la base de datos.                                                                   |
| `DB_DATABASE`            | `blog_db`     | nombre de la base de datos.                                                                       |
| `DB_PORT`                | `3306`            | puerto de despliegue de la base de datos.                                                         |
