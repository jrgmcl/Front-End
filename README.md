# **Face Recognition (FRONT END)**
> *Raspberry Pi 4B LAMPS web server*

## Raspberry Pi 4B required modules:
- **Apache2** *sudo apt install apache2 -y*
    - ***Change permission of website storage***
    - *sudo a2enmod rewrite*
    - *sudo systemctl restart apache2*
    - *sudo chown -R pi:www-data /var/www/html/*
    - *sudo chmod -R 770 /var/www/html/*
    - ***Modify Apache2 config file***
    - *sudo nano /etc/apache2/apache2.conf*
    - *From:*</br>
      *Directory /var/www/</br>
       Options Indexes FollowSymLinks</br>
       AllowOverride **None**</br>
       Require all granted</br>
       /Directory*</br>
    - *To:*</br>
      *Directory /var/www/</br>
       Options Indexes FollowSymLinks</br>
       AllowOverride **All**</br>
       Require all granted</br>
       /Directory*</br>
    - *sudo service apache2 restart*
- **PHP** *sudo apt install php libapache2-mod-php -y*
- **MariaDB/MySQL** *sudo apt-get install mysql-server php-mysql -y*
  - ***Setup MySQL Database***
  - *sudo mysql_secure_installation*
- **PHPMyAdmin** *sudo apt install phpmyadmin -y*

