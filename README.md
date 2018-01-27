# wordpress-custom-theme-development
This is a step-by-step guide that demonstrate how you easily can built an wordpress custom theme from scratch.

# Step01 - Setup WordPress Database with Phpmyadmin-tool
1. Open your browser and enter in the _url_ either **localhost/phpmyadmin** or **localhost:8080/phpmyadmin** or **localhost/MAMP and the click on Phpmyadmin in upper right corner**
2. Create a new database by entering following name _wordpress-custom-theme_ and then click on the **create** button
3. You have now created a new blank database

# Step02 - Setup WordPress configuration-files
1. Rename **wp-config-sample.php** file to **wp-config.php**
2. Open **wp-config.php** with your favorite editor eg. *Brackets* or *Sublime*
3. Go to line *23* that begins with _define('DB_NAME', 'database_name_here')_ and override the text inside the quote that says _'database_name_here'_ with your own databasename eg. _wordpress-custom-theme_
4. Go to line *26* that begins with _define('DB_USER', 'username_here')_ and override the text inside the quote that says _'username_here'_ with your own username. If you MAMP then your default username is *root* and if you have XAMPP then your default username is *root*

