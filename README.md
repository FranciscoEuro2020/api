Instalacion Inicial
1. Ejecutamos make up
2. make bash
3. curl -sS https://get.symfony.com/cli/installer | bash
4. mv /root/.symfony/bin/symfony /usr/local/bin/symfony
5. symfony new symfony --dir=/var/www/symfony

Descargarlo
1. git clone https://github.com/FranciscoEuro2020/api.git
2. Crear carpeta mysql en el raiz
3. make up
4. make bash
5. Instalamos dependencias: composer install
6. Crear las tablas MySQL: php bin/console doctrine:schema:update --force
7. Abrimos http://localhost:8000 en el navegador
