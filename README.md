# Image to QR Code Generator Using Google API

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)


In this repository, you can upload image and scan link via QR code. 

As soon as you upload the image, the QR code of the image is generated, which you can scan and visit that link. For this Google QR API has been used.

1. upload image
2. once done uploading
3. you get an QR Code
4. you can scan the code
5. you will get a link of the image

## Official Documentation of Framework

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contribution for the framework

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Contribution for the project


    1. Fork it
    2. Create your feature branch (git checkout -b my-new-feature)
    3. Make your changes
    4. Run the tests, adding new ones for your own code if necessary (phpunit)
    5. Commit your changes (git commit -am 'Added some feature')
    6. Push to the branch (git push origin my-new-feature)
    7. Create new Pull Request


## Security Vulnerabilities of framework

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## Security Vulnerabilities of project

If you discover a security vulnerability within the project, please send an e-mail to Eishwar Patley at eishwar9@gmail.com. All security vulnerabilities will be promptly addressed.


## Project License

The project is available to be used freely for personal and educational purposes, cloning the project does not gives you any rights to sell it online/offline.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

## Requirement

1. PHP version 8.0+
3. [PHP Mysql](http://php.net/manual/en/ref.pdo-mysql.php)
4. [Composer](https://getcomposer.org/)

## How can I support developers ?
* Star our GitHub repo :star:
* Create pull requests, submit bugs, suggest new features or documentation updates :wrench:
* Hire us for your next project :heart:

## Installation

It is preferred to have git setup installed on your local system.

If you have git on your local, run git clone https://github.com/EishwarPHP else you can download the zip https://github.com/EishwarPHP

Once downloaded/cloned go to the project directory on terminal/command line and run composer install or composer.phar install

Once composer is installed, run migration: 

    php artisan migrate

After migration, run the env copy command: 

    cp .env.example .env
    
Generate artisan key :

    php artisan key:generate
    
Demo version of the project can be found over [here](http://qrcode.techvake.com)    

## Please do not change password on demo site 
  I
