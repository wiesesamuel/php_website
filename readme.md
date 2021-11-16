# server log
cat /var/log/apache2/error.log  

# permission denied

chown -R www-data:www-data /usr/share/cinecal  
find /usr/share/cinecal -type d -print0 | xargs -0 chmod 0755  
find /usr/share/cinecal -type f -print0 | xargs -0 chmod 0644  

# not working
nano /usr/share/cinecal/config.php  
