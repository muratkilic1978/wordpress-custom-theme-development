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
5. Now go and edit **index.php** and add **get_header();** on top of the file and add **get_footer();** on bottomline in the file. Here is the code for **index.php**:
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
6. Repeat the same procedure where you add **get_header();** on first line and add **get_footer();** on last line in both files **page.php** and **single.php**.
Here is the code for **page.php**:
```PHP
<?php
    get_header();
    while (have_posts()) {
        the_post(); ?>
    <h1>This is a page not a post</h1>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>


<?php }
    get_footer();
?>
```
### Step05 - Load style.css and update header.php and footer.php files
1. Go and update **header.php** file with ```<DOCTYPE>```, begin ```<HEAD>``` tag, and closing ```</HEAD>``` tag and finally a begin ```<body>``` tag. Lastly go and add **wp_head();** function just after the begin ```<head>``` tag.
Here is the updated *header.php* file:

```PHP
<!DOCTYPE html>
<html lang="en">
<head>
   <?php wp_head(); ?>
    <meta charset="UTF-8">
    <title>Business Academy Aarhus</title>
</head>
<body>
```

2. Next go and update **footer.php** file with closing ```</body>``` tag and closing ```</HTML>``` tag. Lastly go and add **wp_footer();** function just before the closing ```</head>``` tag. The *wp_footer();* function is commonly used by WordPres to insert web statistics code, such as Google Analytics. 
Here is the updated *footer.php* file:
```PHP

<?php wp_footer(); ?>
</body>
</html>
```

3. Go and create a new **functions.php** php file inside your WordPress custom theme folder *wp-content/themes/university-theme*. The default WordPress theme contains a *functions.php* file that defines many of features. Suggested uses for this file:
- Enqueue theme stylesheets and scripts. 
- Enable Theme Features such as Sidebars, Navigation Menus, Post Thumbnails, Post Formats, Custom Headers, Custom Backgrounds and others.
- Define functions used in several template files of your theme.

The following line of php code enables to attach the *style.css* file to the custom theme.
Here is the code for **functions.php**:
```PHP
<?php

function university_files() {
    wp_enqueue_style('university_main_styles',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','university_files');
?>
```

4. Finally go and update your style.css file with a selector that makes the font-color *forestgreen*. Here is the updated code for **style.css**:
```CSS
* {
    color: forestgreen;
}
```

### Step06 - Convert static HTML Template into WordPress
1. Go and download a static HTML Template that is already made from github.com. \* A Special thank to Brad Schiff owner of
LearnWebCode for inspiring me to make this WordPress Custom Theme tutorial-guide.
Here is the URL to the static HTML source-code from LearnWebCode By Brad Schiff.: **https://github.com/LearnWebCode/university-static**
2. After having downloaded all static files from github.com, you now have following folders and files:
- CSS *folder*
- JS *folder*
- Images *folder*
- index.html *file*
- interior-page.html *file*
- style.css *file*
3. Go and open **index.html** with your favorite editor and cut out following code from **index.html** file:
```HTML
  <header class="site-header">
    <div class="container">
      <h1 class="school-logo-text float-left"><a href="#"><strong>Fictional</strong> University</a></h1>
      <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
      <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
      <div class="site-header__menu group">
        <nav class="main-navigation">
          <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Programs</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Campuses</a></li>
            <li><a href="#">Blog</a></li>
          </ul>
        </nav>
        <div class="site-header__util">
          <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
          <a href="#" class="btn btn--small  btn--dark-orange float-left">Sign Up</a>
          <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
      </div>
    </div>
  </header>
```
4. Paste the previous code-snippet into **header.php** file inside your WordPress custom theme folder *wp-content/themes/university-theme*.
Here is the updated *header.php* file:
```PHP
<!DOCTYPE html>
<html lang="en">
<head>
   <?php wp_head(); ?>
    <meta charset="UTF-8">
    <title>Business Academy Aarhus</title>
</head>
<body>
  <header class="site-header">
    <div class="container">
      <h1 class="school-logo-text float-left"><a href="#"><strong>Fictional</strong> University</a></h1>
      <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
      <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
      <div class="site-header__menu group">
        <nav class="main-navigation">
          <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Programs</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Campuses</a></li>
            <li><a href="#">Blog</a></li>
          </ul>
        </nav>
        <div class="site-header__util">
          <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
          <a href="#" class="btn btn--small  btn--dark-orange float-left">Sign Up</a>
          <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
      </div>
    </div>
  </header>
```
5. Go and open **index.html** again with your favorite editor and cut out following code from **index.html** file:
```PHP

  <footer class="site-footer">

    <div class="site-footer__inner container container--narrow">

      <div class="group">

        <div class="site-footer__col-one">
          <h1 class="school-logo-text school-logo-text--alt-color"><a href="#"><strong>Fictional</strong> University</a></h1>
          <p><a class="site-footer__link" href="#">555.555.5555</a></p>
        </div>

        <div class="site-footer__col-two-three-group">
          <div class="site-footer__col-two">
            <h3 class="headline headline--small">Explore</h3>
            <nav class="nav-list">
              <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Programs</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Campuses</a></li>
              </ul>
            </nav>
          </div>

          <div class="site-footer__col-three">
            <h3 class="headline headline--small">Learn</h3>
            <nav class="nav-list">
              <ul>
                <li><a href="#">Legal</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Careers</a></li>
              </ul>
            </nav>
          </div>
        </div>

        <div class="site-footer__col-four">
          <h3 class="headline headline--small">Connect With Us</h3>
          <nav>
            <ul class="min-list social-icons-list group">
              <li><a href="#" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
              <li><a href="#" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              <li><a href="#" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
          </nav>
        </div>
      </div>

    </div>
  </footer>
```
6. Go and paste the previous code-snippet into **footer.php** file inside your WordPress custom theme folder *wp-content/themes/university-theme*.
Here is the updated *footer.php* file:
```PHP

  <footer class="site-footer">

    <div class="site-footer__inner container container--narrow">

      <div class="group">

        <div class="site-footer__col-one">
          <h1 class="school-logo-text school-logo-text--alt-color"><a href="#"><strong>Fictional</strong> University</a></h1>
          <p><a class="site-footer__link" href="#">555.555.5555</a></p>
        </div>

        <div class="site-footer__col-two-three-group">
          <div class="site-footer__col-two">
            <h3 class="headline headline--small">Explore</h3>
            <nav class="nav-list">
              <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Programs</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Campuses</a></li>
              </ul>
            </nav>
          </div>

          <div class="site-footer__col-three">
            <h3 class="headline headline--small">Learn</h3>
            <nav class="nav-list">
              <ul>
                <li><a href="#">Legal</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Careers</a></li>
              </ul>
            </nav>
          </div>
        </div>

        <div class="site-footer__col-four">
          <h3 class="headline headline--small">Connect With Us</h3>
          <nav>
            <ul class="min-list social-icons-list group">
              <li><a href="#" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
              <li><a href="#" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              <li><a href="#" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
          </nav>
        </div>
      </div>

    </div>
  </footer>

<?php wp_footer(); ?>
</body>
</html>
```
7. Go and open the **style.css** file that you just downloaded from github.com with your favorite editor.
8. Mark all code in the *style.css* file and copy and paste it into to your style.css inside your WordPress custom theme folder *wp-content/themes/university-theme/*.
9. Now go and check the website by clicking on the Dashboard inside WordPress and then click on *visit site*. We now see that the website looks much nicer than before.
10. Next go and open the **functions.php** inside your WordPress custom theme folder *wp-content/themes/university-theme/*. and attach font-awesome icons to your custom theme. Add following php-code inside your **functions.php**.
Here is the updated *functions.php* file:
```PHP
<?php

function university_files() {
   \# Load the main style.css into WordPress custom theme 
   wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); 
   
   \# Load font-awesome icons into WordPress custom theme
   wp_enqueue_style('university_main_styles',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','university_files');
?>
```
11. Now go and open the **functions.php** again inside your WordPress custom theme folder *wp-content/themes/university-theme/*. This time I will add a custom Google font to our Custom WordPress Theme. Add following php-code inside your **functions.php**.
Here is the updated *functions.php* file:
```PHP
<?php

function university_files() {
   \# Load custom Google Font into WordPress custom theme 
   wp_enqueue_style('custom-google-font', "https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i"); 
   
   \# Load the main style.css into WordPress custom theme 
   wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); 
   
   \# Load font-awesome icons into WordPress custom theme
   wp_enqueue_style('university_main_styles',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','university_files');
?>
```
