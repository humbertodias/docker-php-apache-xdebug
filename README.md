## Docker project for PHP and Apache2

This is a docker project to create a container with PHP, Xdebug and Apache2. 

    docker compose up

Starts the container named php-apache2

Browse to http://localhost:8002
or
http://localhost:8002/db.php


A sample employee list page is displayed.


See Dockerfile and [docker-compose.yml](docker-compose.yml) for configuration details.


Apache2 
Xdebug port 9000

Service | Version   | Port
---     | ---       | ---
Apache2 | 2.4.54    | 8002 | 
PHP     | 8.0.24    | 8002 | 
Xdebug  | 3.1.5     | 9000 |