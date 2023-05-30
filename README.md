# README
## ¿Qué es este repositorio?
 Este repositorio es un proyecto diseñado para obtener conocimientos. En particular, se centra en el desarrollo de una aplicación utilizando el framework PHP Laravel y contenedores Docker.

## Estructura de los directorios
El repositorio contiene los siguientes directorios:

* docker: Este directorio contiene los archivos necesarios para ejecutar el proyecto en contenedores Docker.
* laravel: Este directorio contiene el código fuente de la aplicación Laravel.


## Configuración del entorno de desarrollo
Para poder ejecutar este proyecto, se necesitan los siguientes requisitos previos:

* Docker
* Docker Compose

## Cómo ejecutar este proyecto
 Para ejecutar este proyecto, siga estos pasos:

* 1 Descargue el proyecto de GitHub.
* 2 Asegúrese de tener instalado Docker y Docker Compose.
* 3 Abra una terminal y navegue hasta la carpeta del proyecto.
* 4 Ejecute el comando ```docker-compose up -d``` Esto levantará los contenedores necesarios para ejecutar el proyecto.
* 5 Ejecute el comando ```docker exec -it my-project-app-1 /bin/bash```.
* 6 Dentro del contenedor, ejecute el comando ```composer install```.
* 7 Dentro del contenedor, ejecute el comando ```php artisan migrate```.
* 8 Dentro del contenedor, ejecute el comando ```php artisan optimize```.
* 9 Una vez que se hayan completado estos pasos, la aplicación Laravel debería estar lista para su uso.

## Creación de un proyecto Laravel y MySQL con Docker desde cero
Si desea crear un proyecto Laravel y MySQL con Docker desde cero, siga estos pasos:

* 1 Cree una carpeta para almacenar el proyecto.
* 2 Cree los archivos ```docker-compose.yml``` y ```env```. Puede copiar estos archivos de un proyecto anterior y modificarlos según sea necesario.
* 3 Copie la carpeta ```docker``` de un proyecto anterior y elimine el directorio ```bddata``` que contiene.
* 4 Cree una carpeta llamada laravel.
* 5 Abra una terminal y navegue hasta la carpeta del proyecto.
* 6 Ejecute el comando ```docker-compose up -d```. Esto levantará los contenedores necesarios para ejecutar el proyecto.
* 7 Utilice el siguiente comando para ver el nombre del proyecto: ```docker ps```.
* 8 Reemplace ```my-project-app-1``` por el nombre que haya designado en ```docker-compose.yml``` en el siguiente comando: ```composer create-project --prefer-dist laravel/laravel```.
* 9 Ejecute el comando anteriormente modificado en la terminal.
* 10 Si no ha cambiado la dirección, utilice la siguiente URL para visualizar el proyecto: ```http://localhost:8083/```.


## Información adicional
Aquí hay algunos enlaces útiles que pueden ser relevantes para el proyecto:

* https://www.stackhawk.com/blog/laravel-content-security-policy-guide-what-it-is-and-how-to-enable-it/
* https://releases.jquery.com/
* https://datatables.net/manual/installation