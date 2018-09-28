```
docker pull wordpress
docker pull mysql

docker images

docker run --name mysql01 -e MYSQL_ROOT_PASSWORD=sialaBabaMak -d mysql
docker run --name wordpress01 --link mysql01 -p 8080:80 -e WORDPRESS_DB_HOST=mysql01:3306 -e WORDPRESS_DB_USER=root -e WORDPRESS_DB_PASSWORD=sialaBabaMak -e WORDPRESS_DB_NAME=wordpress -e WORDPRESS_TABLE_PREFIX=wp_ -d wordpress

firefox http://localhost:8080

docker ps

docker exec -i -t wordpress01 /bin/bash

docker stop wordpress01
docker rm wordpress01

docker run --name wordpress01 --link mysql01 -p 8080:80 -v /home/gstlt/workdir/szot/docker-wordpress-dev/02_wp_mysql_net/plugin:/var/www/html/wp-content/plugins/myplugin -e WORDPRESS_DB_HOST=mysql01:3306 -e WORDPRESS_DB_USER=root -e WORDPRESS_DB_PASSWORD=sialaBabaMak -e WORDPRESS_DB_NAME=wordpress -e WORDPRESS_TABLE_PREFIX=wp_ -d wordpress
```
