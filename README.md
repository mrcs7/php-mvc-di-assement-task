# php-mvc-di-assement-task
## What is Done

- Very Simple PHP application based on MVC structure using php-di,doctrine-migrations.

## Running The App
- clone the repo .
- composer install.
- edit src/Boozt/Configuration.php with your database configuration.
- run migrations and seeder: ./vendor/bin/doctrine-migrations migrate
- run the app using php developmentphp -S 0.0.0.0:8000 -t public/
- go to: http://localhost:8000.


## Details
- home page contains table for Total Orders,Total Customers Who Made Orders,Total Revenue with filter and the default is past 30 days.
- home page contains chart for the last 30 days orders.
- two apis for the the above: http://localhost:8000/statistics,http://localhost:8000/chart.
