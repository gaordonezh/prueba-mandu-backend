## PRUEBA TÉCNICA - MANDU

Proyecto desarrollador con Laravel 8.

Pasos para la instalación:

-   Clonar el repositorio
    Comando para instalar las dependencias
-   ### `composer install`
-   Clonar el archivo .env.example y nombrarlo .env en la raíz del proyecto
-   Modificar el valor campo DB_DATABASE por prueba_mandu
-   Crear una base datos con el nombre prueba_mandu
    Comando para ejecutar las migraciones
-   ### `php artisan migrate`
    Comando para llenar la base de datos a travez de los seeders (opcional)
-   ### `php artisan db:seed`
    Comando para iniciar el servidor
-   ### `php artisan serve`

Si todo salió bien, el servidor se habrá iniciado :)
