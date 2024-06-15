<div style="display:flex; margin:auto;">
<div style="width:50%;">
<a href="https://laravel.com" target="_blank"><img src="https://www.vectorlogo.zone/logos/laravel/laravel-ar21.svg" width="300" alt="Laravel 11"></a>
</div>
<div style="width:50%;">
<a href="https://es.react.dev/" target="_blank"><img src="https://www.vectorlogo.zone/logos/reactjs/reactjs-ar21.svg" width="300" alt="ReactJS"></a></div>
</div>

## Introduction
- In addition to typical, form based authentication, Laravel also provides a simple, convenient way to authenticate with OAuth providers using Laravel Socialite. Socialite currently supports authentication via Facebook, Twitter, LinkedIn, Google, GitHub, GitLab, and Bitbucket.

- The idea of ​​the project is to be able to enter through a Google account, only if the user is registered in the system.

<br/>

## Tech Stack
<p align="center">
  <a href="https://skillicons.dev">
    <img src="https://skillicons.dev/icons?i=laravel,tailwind,mysql,vscode" />
  </a>
</p>


## Deployment
- Clone project
```
git clone https://github.com/PabloDamianRomero/laravel-socialite-test.git
```
- Install dependencies from composer.json and package.json (inside the project directory)
```
composer install
```
```
npm install
```
```
npm run dev
```
- Create a new database and config your .env file (line 11 for reference)
  - Default Database name: socialite
  - If the .env file does not exist:
 
 ```
 cp .env.example .env
 ```
```
DB_CONNECTION=<your_db_connection>
DB_HOST=<your_host>
DB_PORT=<your_port>
DB_DATABASE=<your_database_name>
DB_USERNAME=<your_username>
DB_PASSWORD=<your_password>
```
- Run migrations to set your db tables structure
```
php artisan migrate
```
<br/>

- You must register at https://console.cloud.google.com and create a project, configurate OAuth Consent Screen and make the credential to copy on your .env file (line 60 for reference)

<br/>

- Serve it
```
php artisan serve
```

<br/>
<br/>

- If you have any 500 Server error, try CTRL+C and then
```
php artisan cache:clear
```
```
composer dump-autoload
```
```
php artisan key:generate
```
