# wordpress-custom-theme-development
This is a step-by-step guide that demonstrate how you easily can built an wordpress custom theme from scratch.

# Step01 - Setup WordPress Database with Phpmyadmin-tool
1. Open your browser and enter in the _url_ **localhost/phpmyadmin** or **localhost:8080/phpmyadmin** or **localhost/MAMP and the click on Phpmyadmin in upper right corner**
2. Click on *databases* and then create a new database with following name _wordpress-custom-theme_

# Step02 - Setup WordPress configuration-files
1. Rename **wp-config-sample.php** file to **wp-config.php**
2. Open **wp-config.php** with your favorite editor eg. *Brackets* or *Sublime*
3. Go to line *23* that begins with _define('DB_NAME', 'database_name_here')_ and override the text inside the quote that says _'database_name_here'_ with your own databasename eg. _wordpress-custom-theme_
4. 

