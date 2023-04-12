## LAYOUT

Creamos el diseño siguiendo las especificaciones dadas

Para eso añadimos las clases en [tailwind.config.js](../tailwind.config.js)

```json
     height: {
        "10vh": "10vh",
        "15vh": "15vh",
        "65vh": "65vh"
    },
    colors: {
        "header": "#E6621F",
        "nav": "#EDEDEE",
        "main": "#FFFFFF",
        "footer": "#898989"
},
```

-   Establecemos el [layout.blade.php](../resources/views/layout.blade.php)
-   Lo probamos

1. Creo una nueva ruta que retorne una pagina que exteinda de layout
2. creamos la ruta

```php
Route::view("main", "empresa.main");
```

3. creo la pagina [main.blade.php](../resources/views/empresa/main.blade.php)
4. Lo probamos [http://localhost:8000/main](http://localhost:8000/main)
