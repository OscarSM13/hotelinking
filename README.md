# Hotelinking
Activacion de tikets para hotelinking
## Empezando
Primero de todo hay que clonar el proyecto con git clone https://github.com/OscarSM13/hotelinking.git.
### Installing
Hay que instalar composer: 
```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```
## Base de datos
Hay que añadir las credenciales de la base de datos en .env (DB_DATABASE, DB_USERNAME, DB_PASSWORD) .
####Migraciones
Hay que ejecutar las migraciones para crear las tablas de la base de datos.
```
php artisan migrate
```
### Construido con
* [PHP](http://php.net/) - Lenguaje utilizado
* [Laravel](https://laravel.com/) - Freamwork de PHP
* [Vue](https://vuejs.org/) - Freamwork de js
* [Boostrap](https://getbootstrap.com/) - Freamwork
## Author 
* Oscar Sitges
