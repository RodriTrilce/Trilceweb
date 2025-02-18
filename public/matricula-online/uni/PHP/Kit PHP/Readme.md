# Proyecto Pago Efectivo PHP
## Prerrequisitos

* [Docker](https://www.docker.com/)

## Levantar ambiente de Desarrollo

1. Situarse en la raiz del proyecto
2. Ejecutar el comando: docker build -t pagoefectivo .
3. Ejecutar el comando: docker run -p xx:80 -d pagoefectivo (xx cambiar por el puerto deseado, ejemplo de configuración de puertos 3000:80)
4. El intérprete de comandos devolverá un ID, por ejemplo: "ae679d5f9071e43249893c468928579a21c8c02956b934ed756f178076e3b300"
5. Ingresar al navegador y colocar la ruta "http://localhost:xx/genera.php" o si la asignación de IP es default "http://192.168.99.100:xx/genera.php" (xx es el puerto asignado anteriormente, además, la ruta depende de la instalación hecha del Docker). 
6. Para visualizar los dockers activos: docker ps
7. Para parar la ejecución del docker, utilizar este comando: docker stop xxx (Reemplazar xxx por los 3 primeros caracteres devueltos anteriormente o verificando usando el comando "docker ps", ejemplo: ae6)  