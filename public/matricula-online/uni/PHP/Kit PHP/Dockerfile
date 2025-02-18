FROM php:7-apache

COPY PagoEfectivo /var/www/html

RUN touch configura.json 

RUN touch log.txt 

RUN chmod 777 configura.json 

RUN chmod 777 log.txt 

RUN echo '{ "ServidorPagoEfectivo": "", "AccessKey": "", "SecretKey": "", "IDComercio": "", "NombreComercio": "", "EmailComercio": "", "ModoIntegracion": "", "TiempoExpiracionPago": "", "Pais": "", "TipoMoneda": "", "Monto": "" }' > configura.json

EXPOSE 80