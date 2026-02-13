# CRUD


## Tecnologías Utilizadas

- PHP 8.2.12
- Laravel 12.50.0
- Composer 2.9.5
- PostgreSQL 18.1
- Node.js 24.12.0
- NPM 11.6.2
- HTML5 + CSS3

---

## Requisitos Previos

Antes de ejecutar el proyecto, asegúrese de tener instalado:

- PHP
- Composer
- PostgreSQL
- Node.js y NPM
- Servidor local (XAMPP, Laragon o similar)

---

## Instalación y Ejecución del Proyecto

Siga estos pasos para ejecutar el proyecto en su entorno local:

### 1️⃣ Clonar el repositorio
````
git clone https://github.com/Leonky27/Practica-crud.git
````
Entrar en la carpeta del proyecto:
- cd nombre-del-proyecto

### 2️⃣ Instalar dependencias de PHP
````
composer install
````
### 3️⃣ Crear archivo de entorno
````
cp .env.example .env
````
### 4️⃣ Generar clave de la aplicación
````
php artisan key:generate
````
### 5️⃣ Configurar base de datos

Editar el archivo .env y configurar:
````
DB_DATABASE=crud
DB_USERNAME=
DB_PASSWORD=
````
Luego crear la base de datos en Postgre y exportar el archivo que esta en la carpeta backup_base_datos en pgAdmin 4

### 6️⃣ Ejecutar migraciones
````
php artisan migrate
````
### 7️⃣ Ejecutar el proyecto
````
composer run dev
````
