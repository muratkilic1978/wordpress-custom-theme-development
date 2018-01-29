# WordPress-custom-theme-development
This is a step-by-step guide that demonstrate how you easily can built an wordpress custom theme from scratch.

#### Prerequisite to setup WordPress
1. Install a Development Environment on your machine. If your have a MAC you can either choose MAMP or XAMMP and if you have Windows you can choose XAMPP or WAMP. This guide will primarily focus on XAMPP and MAMP.

### Step01 - Setup WordPress Database and WordPress configuration-file
1. Open your browser and enter the _url_ **localhost/phpmyadmin** or **localhost:8080/phpmyadmin** or **localhost/MAMP and the click on Phpmyadmin in upper right corner**
2. Create a new database by entering following name _wordpress-custom-theme_ and then click on the **create** button
3. You have now created a new blank database with Phpmyadmin
4. Rename **wp-config-sample.php** file to **wp-config.php**
5. Open **wp-config.php** with your favorite editor eg. *Brackets* or *Sublime*
6. Go to line *23* that begins with _define('DB_NAME', 'database_name_here')_ and override the text inside the quote that says _'database_name_here'_ with your own databasename eg. **wordpress-custom-theme**
7. Go to line *26* that begins with _define('DB_USER', 'username_here')_ and override the text inside the quote that says _'username_here'_ with your own username. If you have a MAMP then your default username is **root** and if you have XAMPP then your default username is **root**
8. Go to line *29* that begins with _define('DB_PASSWORD', 'password_here')_ and override the text inside the quote that says _'password_here'_ with either **root** if you have a MAMP on your machine or blank if you XAMMP on your machine. **Blank** is the same as keeping the quotes empty.
9. Go to line *44* that begins with *You can generate these using the {@link **https://api.wordpress.org/secret-key/1.1/salt/** WordPress.org secret-key service}* and copy the url into your browser. Copy the code snippet on the screen and go back to the file **wp-config.php**. Select now line line  49 to 56 and paste the code-snippet in your memory here.
10. Go to line *66* that begins with _$table_prefix  = 'wp\_'_ and override the text inside the quote that says _'wp\_'_ with a table-prefix name eg. **wp_custom_theme**.
#### This is only for MAC-users 
11. Go to line *20* and insert following text **define('FS_METHOD', 'direct');**. This will enable WordPress to download themes and and plugins from Internet without using FTP-settings in WordPress.

### Step02  - Creating a new theme
1. Go to Wordpress installation folder and then go to *wp-content/themes/* folder. Create a new sub-folder with following name **university-theme**. 
2. Create a new file inside the subfolder *wp-content/themes/university-theme* with following name **index.php**.
3. Create another file inside the subfolder *wp-content/themes/university-theme* with following name **style.css**. Write the  following inside the **style.css**. *Hint: Remember to change Author Name for your own name. Author URI, theme URI and description should also be changed to something else.
```CSS
/*
Theme name: University Theme
Theme URI: https://github.com/muratkilic1978/wordpress-custom-theme-development
Author: Murat Kilic
Author URI: https://github.com/muratkilic1978/
Version: 1.0
Description: Coming soon
License: GNU General Public License v2 or later
*/
```
4. Make a new image-file in photoshop or download an image from Internet (be sure that the image are licensed for reuse) and rename the image-file **screenshot.png** and save it next to the other two files (index.php & style.css)
5. Go and edit index.php by entering some text eg. **This is my amazing WordPress custom theme**
6. Log into your WordPress account and click on **Themes** and activate your new custom theme **University Theme**. Next go to the left top corner and click on **Visit Site**. You will for the first time see your new custom theme.

### Step03 - The Famaous Loop in WordPress
1. Go and update **index.php** file inside your WordPress custom theme folder *wp-content/themes/university-theme* with a PHP While-loop. I am looping through all blog-posts inside WordPress and displaying them. Here is the newly updated code inside **index.php**
```PHP
<?php

while (have_posts()) {
    the_post();
?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_content(); ?>
<hr>

<?php }
?>
```
2. Then create a new file **single.php**. The *single* post template file is used when a single post is queried. For this and all other query templates, index.php is used if the query template is not present. Here is the code for **single.php** file:
```PHP
<?php

while (have_posts()) {
    the_post();
?>
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>

<?php }
?>
```
3. Finally go and create following file **page.php**. This file is used when an individual Page is queried. Here is the code for **page.php**:
```PHP
<?php

while (have_posts()) {
    the_post();
?>
<h1>This is a page not a post</h1>
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>

<?php }
```

### Step04 - Every website needs a Header and Footer
1. Go and create a **header.php** file inside your WordPress custom theme folder *wp-content/themes/university-theme*. 
2. Edit **header.php** file and enter following text inside it:
```HTML
<h1>Greeting from header.php</h1>
```
3. Then go and create a **footer.php** file inside your WordPress custom theme folder *wp-content/themes/university-theme*.
4. Edit **footer.php** file and enter following text inside it:
```HTML
<p>Greetings from footer.php</p>
```
5. Now go and edit **index.php** and add **get_header();**on top of the file and **get_footer();** on bottomline in the file. Here is the code for **index.php**:
```PHP
\\<?php get_header();

    while (have_posts()) {
        the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_content(); ?>
    <hr>

<?php }

    \\get_footer();
?>
```