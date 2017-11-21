# PHPSimplier
A PHP Framework for building web application. 

# How to Use  PHPSimplier
1. Rename RewriteBase in public/.htacccess 
    if the folder that contains this framework files is named goodApp then the RewriteBase will be /goodApp/public 
    if your are putting this in a server without any folder to contain the files then it should just be /public

2. Rename Database info in the config/config,php to suit the information about your database
    define("DB_HOST", 'YOUR SERVER HOST');
    define("DB_USER", 'YOUR USERNAME TO DATABASE');
    define("DB_PASS", 'YOUR PASSWORD TO DATABASE');
    define("DB_NAME", 'YOUR DATABASE NAME');
3. Rename URLROOT and SITE NAME
    define("URLROOT", "YOUR BASE URL");
     if you have a folder to hold the framework files then the base url will be http://hostname/folder such as 
     http://localhost/goodApp.
     if you are just hosting on your domain without creating any folder to hold the files then http://domainName
    //site name 
    define("SITENAME", "YOUR SITE NAME");
