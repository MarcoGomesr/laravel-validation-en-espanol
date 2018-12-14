# 🔥 Localización de Laravel 5.7 al español          

## Instalación:

### Atreves de la Terminal

1. Copiamos el repositorio `https://github.com/MarcoGomesr/laravel-validation-en-espanol.git`
2. Luego nos dirigimos al root de nuestro proyecto
3. Clonamos el repositorio `git clone` en la ruta `resources/lang/es` (por defecto git creara la carpeta `es` si este ya existe git te mostrara una alerta y tendras que eliminarla o modificar su nombre )

4. Asi debera verse una vez estes en el root 
 
``` git clone https://github.com/MarcoGomesr/laravel-validation-en-espanol.git resources/lang/es ```


### De forma Manual
1. Descargar la carpeta `es` y colocarla dentro del directorio `/resources/lang/` de tu proyecto.
2. Abrir el archivo `/config/app.php` y remplazar el valor de la variable `locale` por `es`.

```php

  /*
  |--------------------------------------------------------------------------
  | Application Locale Configuration
  |--------------------------------------------------------------------------
  |
  | The application locale determines the default locale that will be used
  | by the translation service provider. You are free to set this value
  | to any of the locales which will be supported by the application.
  |
  */

  'locale' => 'es',

```

##### Author: Marco Gomes <http://marcogomesweb.com>
##### Contribuidores: lcamacho franciscollanquipichun feltoxXx carlospc pupi1985 CarloRodriguez Briones    
