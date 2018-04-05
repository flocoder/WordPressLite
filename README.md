# WordPressLite - A ready made WordPress CMS package
The main objective of creating this project is to create a ready made WordPress package which just runs by copying and pasting the folder without setting up database. No any strings attached. This is minimalistic version of WordPress with flat file database. Most of the sites don't need heavy configuration in the first place to start running. Just copy the folder and paste. 

### Why do you need WordPressLite?
WordPressLite is copy, paste and starts running WordPress CMS without any configuration on the database side. I was being sick and tired to configure database in the WordPress CMS everytime to move from localhost to staging and staging to production. The migration is alwasy not smooth. WordPressLite has no database as it is flat file database. So, no database and configuration needed. Happy migration :-)

### When do you use this package?
Following is the list of conditions best suitable to use this package:
1. If your website is small and medium sized. For large websites MySQL is best. 
2. If you want to quickly create and setup WordPress website.
3. If you want quickly migrate the website to various environment ie. staging and production without much hassle.
4. If you want to do backup and maintenance of the website smoothly and quickly.
5. If your website hosting has limitation of creating certain number of MySQL databases.

### How to use guide 
1. Download the package
2. Upload 
3. Run http://example.com

### Default WordPress login
Login URL: http://example.com/app/wp-admin
User: admin
Password: admin

WARNING! Please change the default username and password.

### Access database
http://example.com/dbconfig.php
Password: admin

WARNING! Please change the default password (Edit file dbconfig.php)

### Post install 
Update WordPress core files, themes and plugins to the latest versions.

### Package includes
- WordPress 4.5.3 package from (wordpress.org) 
- Flat file database with SQLite
- phpLiteAdmin (https://bitbucket.org/phpliteadmin/public)
- Comment Blacklist for WordPress (https://github.com/splorp/wordpress-comment-blacklist)
- Twenty Sixteen WordPress theme
- Shortcodes Ultimate Plugin by Vladimir Anokhin
- SQLite Integration plugin by Kojima Toshiyasu

### Discalimer: By using WordPressLite you agree that you use the package by your own risk.
