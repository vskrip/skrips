skrips.ru
=========
#Desctiption

Project of hair dresser сabinet site skrips.ru
This project builded with PHP, HTML, CSS, JavaScript, MySQL technologies and
based on the Yii Framework 1.1.14 version.

#Deploy Configuration

##Setting Up Permissions

Some folders of project should be writable.
For this type in console

~~~
sudo chmod -R 777 /Library/WebServer/Documents/skrips/assets
sudo chmod -R 777 /Library/WebServer/Documents/skrips/protected/runtime
~~~

##Setting Up httpd

In /etc/apache2/httpd.conf add ability to using virtual hosts

~~~
sudo nano /etc/apache2/httpd.conf
~~~

through uncomment the next row

~~~
Include /private/etc/apache2/extra/httpd-vhosts.conf
~~~

In /private/etc/apache2/extra/httpd-vhosts.conf

~~~
sudo nano /private/etc/apache2/extra/httpd-vhosts.conf
~~~

insert the next

~~~
<VirtualHost *:80>
        ServerAdmin webmaster@skrips.local
        ServerName skrips.local
        DocumentRoot /Library/WebServer/Documents/skrips
        <Directory />
                Options FollowSymLinks
                AllowOverride All
        </Directory>
        <Directory /Library/WebServer/Documents/skrips>
                Options Indexes FollowSymLinks MultiViews
                AllowOverride All
                Order allow,deny
                allow from all
        </Directory>
</VirtualHost>
~~~

Check the correctness of the changes made

~~~
sudo service apachectl -t
~~~

If all OK, reload apache server

~~~
sudo service apachectl restart
~~~

##Yii Framework Configuration

For correct working with date function of the PHP to add the next row into /protected/config/main.php

~~~
'timeZone' => 'Europe/Moscow'
~~~