# TODO List project

This is a TODO list project that was built using Laravel framework

## setup instructions

### 1.Clone the repository
git clone https://github.com/HidayahHani/test-hidayahHani.git

### 2. Navigate to the project directory
cd test-HidayahHani

### 3. Install Dependencies
composer install

### 4. setup environment configuration
create a copy of the '.env.example' and rename it to '.env'. update the database configuration in this file with your database credentials

### 5. generate application key
php artisan key:generate

### 6. run migrations
php artisan migrate

### 7.serve the application
php artisan serve

And visit the 'http://127.0.0.1:8000' in the browser to see the application running.
