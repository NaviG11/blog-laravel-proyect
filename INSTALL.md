# Manual de instalación

## 1. Requerimientos

| Nombre       | Versión | Descripción                                            | Instalación                                      |
|--------------|---------|--------------------------------------------------------|--------------------------------------------------|
| `MySql` | ^14     | Gestor de base de datos.                               | <https://www.mysql> |

## 2. Instalación

### Clonación del proyecto e instalación de dependencias

```bash
# Clonación del proyecto
git clone 

# Ingresamos dentro de la carpeta del proyecto
cd 

# Instalamos dependencias
```

### Archivos de configuración

Crear los archivos de configuración con base en los archivos `sample` y modificar los valores que sean necesarios.

```bash
# Variables de entorno globales
cp .env.sample .env

# Otros parámetros requeridos

```

## Configuración y migraciones de la Base de Datos

```bash
# Crear los siguientes esquemas de base de datos:

```

Para más detalles ver el archivo [database/scripts/CREATE_DATABASE.md](./database/scripts/CREATE_DATABASE.md)

```bash
# Configura la base de datos.
php migrate
```

## Despliegue de la aplicación

```bash
# Ejecución en modo desarrollo

# Ejecución en modo PRODUCCIÓN

```

## Comandos útiles para el modo desarrollo

```bash
# Verifica la sintaxis

# Crea una nueva migración
npm run seeds:create database/seeds/addColumnCategoria

# Ejecuta las migraciones
npm run seeds:run
```

## Variables de entorno

**Configuración de la base de datos**

| Variable                 | Valor por defecto | Descripción                                                                                       |
|--------------------------|-------------------|---------------------------------------------------------------------------------------------------|
| `DB_HOST`                | `localhost`       | Host de la base de datos.                                                                         |
| `DB_USERNAME`            | `root`        | nombre de usuario de la base de datos.                                                            |
| `DB_PASSWORD`            | ``        | contraseña de la base de datos.                                                                   |
| `DB_DATABASE`            | `blog_db`     | nombre de la base de datos.                                                                       |
| `DB_PORT`                | `3306`            | puerto de despliegue de la base de datos.                                                         |

**Configuración para almacenamiento de archivos**

```bash
php artisan storage:link
```
