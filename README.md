# wordpress-custom-theme-development
This is a step-by-step guide that demonstrate how you easily can built an wordpress custom theme from scratch.

# Prerequisite to setup WordPress custom theme
1. Install a Development Environment on your machine. If your have a MAC you can either choose MAMP or XAMMP and if you have Windows you can choose XAMPP or WAMP. This guide will primarily focus on XAMPP and MAMP.

# Step01 - Setup WordPress Database with Phpmyadmin-tool
1. Open your browser and enter the _url_ **localhost/phpmyadmin** or **localhost:8080/phpmyadmin** or **localhost/MAMP and the click on Phpmyadmin in upper right corner**
2. Create a new database by entering following name _wordpress-custom-theme_ and then click on the **create** button
3. You have now created a new blank database with Phpmyadmin

# Step02 - Setup WordPress configuration-files
1. Rename **wp-config-sample.php** file to **wp-config.php**
2. Open **wp-config.php** with your favorite editor eg. *Brackets* or *Sublime*
3. Go to line *23* that begins with _define('DB_NAME', 'database_name_here')_ and override the text inside the quote that says _'database_name_here'_ with your own databasename eg. **wordpress-custom-theme**
4. Go to line *26* that begins with _define('DB_USER', 'username_here')_ and override the text inside the quote that says _'username_here'_ with your own username. If you have a MAMP then your default username is **root** and if you have XAMPP then your default username is **root**
5. Go to line *29* that begins with _define('DB_PASSWORD', 'password_here')_ and override the text inside the quote that says _'password_here'_ with either **root** if you have a MAMP on your machine or blank if you XAMMP on your machine. **Blank** is the same as keeping the quotes empty.
6. Go to line *44* that begins with *You can generate these using the {@link **https://api.wordpress.org/secret-key/1.1/salt/** WordPress.org secret-key service}* and copy the url into your browser. Copy the code snippet on the screen and go back to the file **wp-config.php**. Select now line line  49 to 56 and paste the code-snippet in your memory here.
7. Go to line *66* that begins with _$table_prefix  = 'wp_'_ and override the text inside the quote that says _'wp_'_ with a table-prefix name eg. **wp_custom-theme**.


