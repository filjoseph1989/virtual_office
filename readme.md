# README #

This README is a document whatever steps are necessary to get your application up and running.

### What is this repository for? ###

* Quick summary
* Version
1.0.0

### How do I get set up? ###

* Summary of set up
  1. Install nodejs
  2. Install composer
  3. Xampp (optional) it could be other
  4. clone from the repo:
  5. run composer install

* Bootstrap.js
  1. open public/js/app.js
  2. put above custom js put the codes from bootstrap.js

* Database configuration
  MPCI VO database is strict with foraign key contraints be sure to follow correctly the following before setting
  your application.

  1. Edit your .env file in set database credentials
  2. Remove temporary from database/migrations this files
    a. 2014_10_12_000000_create_users_table.php
    b. 2017_05_11_161459_create_admins_table.php
  3. Open terminal and run `php artisan migrate`
  4. Add back 2014_10_12_000000_create_users_table.php in database/migrations and run `php artisan migrate`
  5. Add back 2017_05_11_161459_create_admins_table.php  in database/migrations and run `php artisan migrate --seed`

* Email configuration
  1. open .env file or duplicate the .env.example
  2. Update the information here
        MAIL_DRIVER=smtp
        MAIL_HOST=smtp.mailtrap.io
        MAIL_PORT=2525
        MAIL_USERNAME=[your-username]
        MAIL_PASSWORD=[email-password]
        MAIL_ENCRYPTION=null
  3. Refer to this https://laravel.com/docs/5.4/mail

* How to run tests
* Deployment instructions

### Contribution guidelines ###

* Writing tests
* Code review
* Other guidelines

### Who do I talk to? ###

* Repo owner or admin
* Other community or team contact
