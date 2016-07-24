## Installation Instructions

Ensure you have the following in your system

* php >= 5.6
* MySQL DB
* Apache2
* Git

Clone this repo and run `composer install`


#### Requirements
In your web server configuration, set the document root for the desired url to point to public directory within this project's directory.
Ensure the public directions is readable. The storage directory should be granted read and write permissions.

Ensure also that you have a running instance of MySQL  on the server. Use the `database.sql` file within this projects directory to recreate a database for this project. Options like database username and password can be set by editing the file `.env` in this directory.

#### Configuration
To set configuration options for MySQL edit the corresponding lines in `.env` file. You must change the following lines to correct values.  

`DB_USERNAME=homestead`  
`DB_PASSWORD=secret`
