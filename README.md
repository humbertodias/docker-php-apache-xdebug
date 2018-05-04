## Docker project for PHP7 and Apache2

This is a docker project to create a container with PHP7, Xdebug and Apache2. 

* docker-compose up

    Starts the container named php7-apache2

* Browse to http://localhost:8002

    A sample employee list page is displayed.

See Dockerfile and docker-compose.yml for configuration details.


Apache2 
Xdebug port 9000

Service | Version | Port
--- | --- | ---
Apache2 | 2.4.25 | 8002 | 
PHP | 7.2.5 | 8002 | 
Xdebug | 2.6.0 | 9000 |