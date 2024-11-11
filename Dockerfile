# Use a image with PHP and Apache
FROM php:8.1-apache

#Copy the files in your aplication on root Apache
COPY . /var/www/html/

#Allow the rights permission for the files
RUN chown -R www-data:www-data /var/www/html/

#Expose the port 80 to access the server
EXPOSE 80

#Start Apache when the container begin
CMD ["apache2-foreground"]
