# API Rick y Morty

Este proyecto es una API desarrollada en Laravel (PHP) que te permite realizar operaciones CRUD (Crear, Leer, Actualizar, Eliminar) en una base de datos SQLite para administrar personajes de la serie "Rick y Morty" la cual fue Proporcionada por la Empresa.

## Funcionalidad

La API te permite realizar las siguientes operaciones:

### 1. Listar todos los personajes

- Método: GET
- Ruta: `/api/characters`
- Descripción: Obtiene una lista de todos los personajes registrados en la base de datos.

### 2. Crear un nuevo personaje

- Método: POST
- Ruta: `/api/characters`
- Descripción: Crea un nuevo personaje en la base de datos con los datos proporcionados.

### 3. Obtener detalles de un personaje

- Método: GET
- Ruta: `/api/characters/{id}`
- Descripción: Obtiene los detalles de un personaje específico según el ID proporcionado.

### 4. Actualizar un personaje

- Método: PUT
- Ruta: `/api/characters/{id}`
- Descripción: Actualiza los detalles de un personaje específico según el ID proporcionado.

### 5. Eliminar un personaje

- Método: DELETE
- Ruta: `/api/characters/{id}`
- Descripción: Elimina un personaje específico según el ID proporcionado.

## Uso

1. Clona este repositorio en tu máquina local.
2. Configura tu entorno local de Laravel y la base de datos SQLite.
3. Ejecuta `php artisan migrate` para crear las tablas en la base de datos.
4. Ejecuta `php artisan serve` para iniciar el servidor.
5. Utiliza herramientas como Thunder Client para probar las rutas de la API.
6. Archivos usados para revision de codigo(app/controllers) esta el controlador en (app/models) esta el modelo, en la carpeta(database) esta la base de datos y en la carpeta (routes/api) estan todas las rutas de cada una de las funcionalidades, para hacer mis peticiones, utilice Thunder Client.


## Créditos

Este proyecto fue desarrollado por [Daniel Ramos] como parte del ejercicio [API Rick y Morty] como [Prueba Tecnica para Proceso de admicion en la empresa Carry*t].

