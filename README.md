## Prototype laravel app for Test II: Programming Implementation
![](https://github.com/iCHIrTmA/cordero-zeald-php-test/blob/main/cordero-zeald-php-test.gif)

This web application (1) shows general player information, (2) lists player statistics, and (3) export information to csv file format

### How to setup

1.  Install Docker Desktop

2. Install [Laravel Sail](https://laravel.com/docs/9.x/sail#installing-sail-into-existing-applications) (vendor folder is not uploaded by default)

3. In your CLI (ex. gitbash or powershell)
```
./vendor/bin/sail up -d // run containers
./vendor/bin/sail ps -a // check if all containers are running
./vendor/bin/sail composer install // composer dependencies (laravel excel)
./vendor/bin/sail php artisan key:generate
./vendor/bin/sail php artisan migrate:fresh --seed // --seed runs DatabaseSeeder to import nba sql file
./vendor/bin/sail npm install
./vendor/bin/sail npm run dev // for styling
```

### Package used for implementing Export to CSV Featur

- **[Laravel Excel](https://docs.laravel-excel.com/3.1/getting-started/installation.html)**


