<p align="center"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" alt="Laravel Logo"><img src="https://www.vectorlogo.zone/logos/reactjs/reactjs-ar21.svg" width="250" alt="ReactJS"></p>

## Introduction
- Netflix clone using Laravel 11 and ReactJS. (⚠️ **In Progress**)

<br/>

## Tech Stack
<p align="center">
  <a href="https://skillicons.dev">
    <img src="https://skillicons.dev/icons?i=laravel,react,tailwind,mysql,vscode" />
  </a>
</p>

## Resources
- <a href="https://github.com/overtrue/laravel-favorite">❤️ User favorite feature for Laravel Application. </a>


## Deployment
- Clone project
```
git clone https://github.com/prom97/pochoclo.git
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
- Create a new database and config your .env file (line 22 for reference)

- ⚠️If the .env file does not exist:
 
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
