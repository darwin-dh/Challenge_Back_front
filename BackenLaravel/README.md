# Challenge Back-end
## Framework laravel
## migraciones personas , productos

::: tip Personas migracion
    create_personas_table
:::
::: tip Personas seeder
    PersonaSeeder
:::
::: tip Personas modelo
    PersonaS
:::
::: tip Personas controlador
    PersonaController
    funciones
    getPersona : Obtiene todos los datos de la tabla persona
    getPersonabyid: obtiene registro por "id"
:::
::: tip Personas api
    rutas
    http://127.0.0.1:8000/api/persona/
    http://127.0.0.1:8000/api/persona/2
:::
### Resultado api ruta   http://127.0.0.1:8000/api/persona/
```json
{
"id": 1,
"Nombre": "maria",
"Apellido": "LÓPEZ",
"cedula": "17000001",
"created_at": "2022-03-12T04:18:22.000000Z",
"updated_at": "2022-03-12T04:18:22.000000Z"
},
{
"id": 3,
"Nombre": "maria",
"Apellido": "LÓPEZ",
"cedula": "17000001",
"created_at": "2022-03-12T04:18:22.000000Z",
"updated_at": "2022-03-12T04:18:22.000000Z"
},

```
### Resultado api ruta   http://127.0.0.1:8000/api/persona/2
```json
{
"id": 2,
"Nombre": "maria",
"Apellido": "LÓPEZ",
"cedula": "17000001",
"created_at": "2022-03-12T04:18:22.000000Z",
"updated_at": "2022-03-12T04:18:22.000000Z"
}
```

::: tip Productos migracion
    create_Productos_table
:::
::: tip Productos seeder
    Productoseeder
:::
::: tip Productos modelo
    Productos
:::
::: tip Productos controlador
    PersonaController
    funciones
    getProducts : Obtiene todos los datos de la tabla persona
    getProductosbyid: obtiene registro por "id"
:::
::: tip Personas api
    rutas
    http://127.0.0.1:8000/api/products/
    http://127.0.0.1:8000/api/products/2
:::
### Resultado api ruta   http://127.0.0.1:8000/api/product/
```json
{
{
"id": 1,
"Nombre_producto": "tv",
"Color": "white",
"Categoria": "linea blanca",
"created_at": "2022-03-12T04:18:22.000000Z",
"updated_at": "2022-03-12T04:18:22.000000Z"
},
{
"id": 2,
"Nombre_producto": "mouse",
"Color": "white",
"Categoria": "computacion",
"created_at": "2022-03-12T04:18:22.000000Z",
"updated_at": "2022-03-12T04:18:22.000000Z"
},

```
### Resultado api ruta   http://127.0.0.1:8000/api/products/2
```json
{
"id": 2,
"Nombre_producto": "mouse",
"Color": "white",
"Categoria": "computacion",
"created_at": "2022-03-12T04:18:22.000000Z",
"updated_at": "2022-03-12T04:18:22.000000Z"
}
```