# Install project

## 1. Run comand ```git clone https://github.com/landerg/Embassy.git```
## 2. Run composer install ```composer install```
## 3. Run comand ```cp .env.example .env```
## 4. Install laravel key ```php artisan key:generate```
## 5. Edit `.env` and add DB connect
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_name
DB_USERNAME=user_db
DB_PASSWORD=
```
## 6. Enter your domain in .env file ```APP_URL=http://your.domain```
## 7. Run migrations ```php artisan migrate```
