# Local environment requirement
- composer must be installed [https://getcomposer.org/download/]
- PHP 7.1 minimum must be installed

# Installation
- Clone repository
```sh
  git clone https://github.com/kaixersoft/apithrotling.git foldername
```
- Run composer install inside foldername
```sh
  composer install
```  
- Copy .env.example to foldername/.env
```sh
  cp .env.example .env
```  
- Open .env file and make sure to set the following correctly based on your local setup
  - DB_CONNECTION=mysql
  - DB_HOST=127.0.0.1
  - DB_PORT=3306
  - DB_DATABASE=emftest
  - DB_USERNAME=root
  - DB_PASSWORD=root
- Run migration to create tables on your database
```sh
  php artisan migrate
```  
- Run key generate to avoid any error
```sh
  php artisan key:generate
```  

# Testing
- Serve the application on your local
```sh
php artisan serve
```
- Issue curl request
```sh
 curl http://localhost:8000/api/test
``` 

# Table
`api_logs`
|ip_address|request_uri|request_response|allowed|created_at|updated_at|
