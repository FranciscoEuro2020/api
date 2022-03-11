Instalacion Inicial
1) Ejecutamos make up
2) make bash
3)curl -sS https://get.symfony.com/cli/installer | bash
4)mv /root/.symfony/bin/symfony /usr/local/bin/symfony
5)symfony new symfony --dir=/var/www/symfony

Descargarlo
1) git clone 
2) make up
3) make bash
4) Instalamos dependencias: composer install
5) Crear las tablas MySQL: php bin/console doctrine:schema:update --force
6) Abrimos http://localhost:8000 en el navegador
