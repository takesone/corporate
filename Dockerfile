FROM wordpress:latest
EXPOSE 80
COPY ./theme /var/www/html/wp-content/themes/takesone
