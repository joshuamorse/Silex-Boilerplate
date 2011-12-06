Silex Boilerplate
=================

A collection of standards, components and methodologies to get your Silex
project up and running quickly.


Installation
------------

The quickest way to get started is to run the install script:


    php bin/install


This script will copy all needed ``*.dist`` files to their appropriate
counterparts.

Note: there are files in the Boilerplate that come "packaged" with examples,
but are commented. Feel free to use this as a starting point, uncommenting what
you need, and removing what you don't.

For example, you'll likely want to edit your newly-created ``deps`` file and
remove any repositories you won't be using. The bare minimum you'll need to get
your project rolling is the Silex repository:

    [Silex]
        git = https://github.com/fabpot/Silex.git


### .htaccess

Your Silex installation is going to need rewrite rules. As such, you'll need to
copy ``web/htaccess.dist`` to ``web/.htaccess`` (the install script wil do this
for you).

Optionally, if you're interested in speeding things up a bit, you can move the
rewrite rules in ``web/htaccess.dist`` to your virtual host entry. It should
look something like this:


    <VirtualHost *:80>
        DocumentRoot "/path/to/Silex-Boilerplate/web"
        ServerName your-silex-boilerplate-install
        <Directory "/path/to/Silex-Boilerplate/web"
            AllowOverride All 
            Allow from All

            Options -MultiViews
            RewriteEngine On
            RewriteCond %{REQUEST_FILENAME} !-f 
            RewriteRule ^ index.php [L] 
        </Directory>
    </VirtualHost>


### Adding New Vendors

If you've updated your deps file post-install and need to update your vendors,
you'll want to run the vendors script:


    php bin/vendors install


### Updating Vendors

If you want to update your vendors' repositories, you'll need to run the vendors script:


    php bin/vendors update



Usage
-----

Your main app file is located in ``app/app.php``. It's required at runtime via
``web/index.php``.


### Setting up Controller Providers

In ``app/bootsrap.php``, you can add your controller providers:


    /**
     * Define various controller providers to be mounted. 
     */
    $app['controller_providers'] = array(
        //'/route/example' => new Example\Provider\Controller\HelloWorld(),
    );
