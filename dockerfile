# Use an official PHP image with Apache
FROM php:8.1-apache

# Copy your PHP file to the web server directory
COPY db.php /var/www/html/api/db.php

# Expose port 80 (default for Apache)
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
