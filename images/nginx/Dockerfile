FROM nginx:1.13.5
RUN apt-get update && apt-get install openssl
RUN mkdir -p /etc/nginx/ssl/ && mkdir -p /var/www/html

# 自己証明書を発行
RUN openssl genrsa 2048 > /etc/nginx/ssl/server.key \
&& openssl req -new -key /etc/nginx/ssl/server.key -subj "/C=JP/ST=Tokyo/L=Tokyo/O=Example Inc./OU=web/CN=localhost" > /etc/nginx/ssl/server.csr \
&& openssl x509 -in /etc/nginx/ssl/server.csr -days 3650 -req -signkey /etc/nginx/ssl/server.key > /etc/nginx/ssl/server.crt \
&& chmod 755 -R /var/www/html \
&& chmod 400 /etc/nginx/ssl/server.key