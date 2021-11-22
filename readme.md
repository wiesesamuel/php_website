# Update local

    git reset --hard && git pull  

# SQL


    mysql -e "
    CREATE USER 'wiesesamuel'@'localhost' IDENTIFIED BY 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'; 
    " &&
    mysql -e "
    CREATE DATABASE wiesesamuel;
    " &&
    mysql -e "
    GRANT ALL PRIVILEGES ON wiesesamuel.* TO 'wiesesamuel'@'localhost' WITH GRANT OPTION;
    " &&
    mysql -e "
    FLUSH PRIVILEGES;
    " &&
    mysql -e "
    wiesesamuel < wiesesamuel.sql;
    "


# Server Setup

* server log:

      cat /var/log/apache2/error.log  

* permission denied:

      chown -R www-data:www-data /usr/share/cinecal  
      find /usr/share/cinecal -type d -print0 | xargs -0 chmod 0755   
      find /usr/share/cinecal -type f -print0 | xargs -0 chmod 0644  

* not working:
 
      nano /usr/share/cinecal/config.php  

# one liner init

    cd /usr/share/cinecal && rm -rf ./*  && rm -rf ./.git ./.gitignore && git clone https://samuelwiese@bitbucket.org/samuelwiese/wiesesamuel-website.git ./ && git clone https://samuelwiese@bitbucket.org/samuelwiese/cinecal.git cinecal && chown -R www-data:www-data /usr/share/cinecal && find /usr/share/cinecal -type d -print0 | xargs -0 chmod 0755 && find /usr/share/cinecal -type f -print0 | xargs -0 chmod 0644    
