FROM mariadb:11.3.2
ARG CREATE_USER=User
ARG CREATE_PASSWORD=Password

RUN echo "CREATE USER '$CREATE_USER'@'%' IDENTIFIED VIA mysql_native_password USING PASSWORD('${CREATE_PASSWORD}');" > /docker-entrypoint-initdb.d/creation-script.sql
RUN echo "GRANT SELECT, SHOW VIEW ON *.* TO '$CREATE_USER'@'%' ;" >> /docker-entrypoint-initdb.d/creation-script.sql