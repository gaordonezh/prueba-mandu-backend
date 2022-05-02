## PRUEBA TÉCNICA - MANDU

API-REST desarrollador con Laravel 8.

Pasos para la instalación:

-   Clonar el repositorio
-   ### `composer install` ─ Comando para instalar las dependencias
-   Clonar el archivo .env.example y nombrarlo .env en la raíz del proyecto
-   Modificar el valor campo DB_DATABASE por prueba_mandu
-   Crear una base datos con el nombre prueba_mandu
-   ### `php artisan migrate` ─ Comando para ejecutar las migraciones
-   ### `php artisan db:seed` ─ Comando para llenar la base de datos a travez de los seeders (opcional)
-   ### `php artisan serve` ─ Comando para iniciar el servidor

Si todo salió bien, el servidor se habrá iniciado :)
