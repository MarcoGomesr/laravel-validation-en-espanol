# 🔥 Localización de Laravel ~~5.7~~ 8 al español          

## Instalación

### A traves de la Terminal

1. Copiamos el repositorio `https://github.com/MarcoGomesr/laravel-validation-en-espanol.git`
2. Luego nos dirigimos al root de nuestro proyecto
3. Clonamos el repositorio `git clone` en la ruta `resources/lang/es` (por defecto git creará la carpeta `es`, si la carpeta ya existe git te mostrará una alerta y tendrás que eliminarla o modificar su nombre )
4. Así deberá verse una vez estés en el root 
 
``` git clone https://github.com/MarcoGomesr/laravel-validation-en-espanol.git resources/lang/es ```


### De forma Manual

1. Descargar la carpeta `es` y colocarla dentro del directorio `/resources/lang/` de tu proyecto.
2. Abrir el archivo `/config/app.php` y reemplazar el valor de la variable `locale` por `es`.

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
##### Contribuidores: lcamacho franciscollanquipichun feltoxXx carlospc pupi1985 CarloRodriguez Briones PedroBlanco
