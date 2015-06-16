RESTful webservice
==============================

It's one of example how to use RESTful applications 
to post data (create and/or update), 
read data (e.g., make queries), 
and delete data. 
REST uses HTTP for all four CRUD (Create/Read/Update/Delete) operations.

Requirements
------------

- Please install [XAMPP](https://www.apachefriends.org/index.html)
    - setup port to 8081 (probably less conflicts with executed services in your system)
- Please see the [composer.json](composer.json) file.
- Please find `config\application.config.php` and change the path it is necessary
`'config_glob_paths' => array(`
`'H:\\xampp\\htdocs\\restful1\\config/autoload/{,*.}{global,local}.php',`
`...`
`)`
- SQLite DB `data/dbtest.sqlite`


How to start
------------

Start with XAMPP server or Do one of the following:

- Create a vhost in your web server that points the DocumentRoot to the
  `public/` directory of the project
- Fire up the built-in web server in PHP (5.4.8+) (**note**: do not use this for
  production!)

In the latter case, do the following:

```bash
cd path/to/install
php -S 0.0.0.0:8081 -t public public/index.php
```

You can then visit the site at http://localhost:8081/ - which will bring up a
welcome page and the ability to visit the dashboard in order to create and
inspect your APIs.


### NOTE ABOUT USING THE PHP

You must use a version &gt;= 5.4.8 to start supporting the `PATCH` HTTP method

How to check?
--------------
e.g. over tool in PHPstorm (Test RESTful webservice)
![Test RESTful webservice](https://raw.githubusercontent.com/tom-sapletta-com/restful1/master/public/img/img1.png)
