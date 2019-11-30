# Movie Review App
The app has 2 project as backend and frontend. I used Laravel for backend and  React for frontend. The main subject of the project is about sharing my personal comments for movies and discuss eachother on the web site. 

## Features  
- Movie details page
- Like or dislike system for movies
- Comments for movies to dicuss eachother
- Random Movie Selection

## Pre-requisites
1. (Required) `Nodejs v10.16.3` (https://nodejs.org/dist/v10.16.3/node-v10.16.3-x64.msi)
2. (Recommended) `Yarn` (https://yarnpkg.com/en/docs/install)
3. (For local env, it is better) `XAMPP` (https://www.apachefriends.org/xampp-files/7.3.11/xampp-windows-x64-7.3.11-0-VC15-installer.exe)
4. If you dont install `XAMPP`, You have to install `PHP` on your machine. (`PHP` is required but if you install `XAMPP` it will automatically manage your `PHP` and its settings)
5. If you dont install `XAMPP`, You have to install `MYSQL` on your machine. (`MYSQL` is required but if you install `XAMPP` it will automatically manage your `MSYQL` and its settings)
6.  (Required) Composer (https://getcomposer.org/Composer-Setup.exe)

## Installation (Only first time!!!)
Firstly, we need to clone the project.
`$ git clone git@github.com:mehmetcanhoroz/NETASCOOP4424.git`

Then, we will have project folder which is `NETASCOOP4424`
`$ cd NETASCOOP4424`

If we use `ls` command, we will see 2 folders of projects `backend` & `frontend`

#### Backend Installation
We need to install backend before frontend. Follow the steps to install backend.
1. `$ cd backend`
2. `$ composer install`
3. `$ php artisan key:generate`
4. We need to run `XAMPP` and start `Mysql and Apache` as below

![Image XAMPP](https://raw.githubusercontent.com/mehmetcanhoroz/NETASCOOP4424/master/mysql.png)


6. `$ cp .env.example .env`
7. Then need to go to the `phpmyadmin` page to create a new database: [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/)
8. Then click new button, on left of the screen and give a name to your database then create database. (Don't forget the databse name)
9. Open the .env file under backend folder with your text editor to modify database informations
10. In your file you will see 
``` DB_CONNECTION=mysql  
DB_HOST=127.0.0.1  
DB_PORT=3306  
DB_DATABASE=laravel  
DB_USERNAME=root  
DB_PASSWORD=
```
Modify here with your database name
```
DB_CONNECTION=mysql  
DB_HOST=127.0.0.1  
DB_PORT=3306  
DB_DATABASE=YOURDATABASENAME  
DB_USERNAME=root   (It will be root if you are using XAMPP, otherwise you need to put here your db user name)
DB_PASSWORD= (It will be empty if you are using XAMPP, otherwise you need to put here your db user password)
```
12. `$ php artisan migrate --seed` (With `--seed` parameter the project will have a few dummy data)
13. `$ php artisan serve` and we should see output like;
`Laravel development server started: http://127.0.0.1:8000`
Backend is ready now!

#### Frontend Installation
0. If you are still in backend folder, please follow this command `cd ..`
1. `$ cd frontend`
2. `$ yarn install` or `$ npm install`
3. `$ yarn start` or `$ npm start` It will need to open the browser
```
You can now view frontend in the browser.        

  Local:            http://localhost:3000/    
```

and you will be able to use the project now!

## Run project
`For backend` just you need 2 steps; (Bu sure XAMPP is working with Mysql)
1. `$ cd backend`
2. `$ php artisan serve`

`For frontend` you just need also 2 steps;
1. `$ cd frontend`
2. `$ yarn start` or `npm start`

## Add Movie
You can not add a movie in react page, you need to go to backend page which is [`http://localhost:8000/movies`](http://localhost:8000/movies) then you can add the movie with as many as you want images and trailers.

## 3rd Party Dependencies

1. "sweetalert2": "^9.4.0" [https://github.com/sweetalert2/sweetalert2](https://github.com/sweetalert2/sweetalert2)
2. "sweetalert2-react-content": "^2.0.2" [https://github.com/sweetalert2/sweetalert2-react-content](https://github.com/sweetalert2/sweetalert2-react-content)
3. "react-router-dom": "^5.1.2" [https://www.npmjs.com/package/react-router-dom](https://www.npmjs.com/package/react-router-dom)
4. "react-bootstrap": "^1.0.0-beta.16" [https://github.com/react-bootstrap/react-bootstrap](https://github.com/react-bootstrap/react-bootstrap)
5. "@fortawesome/fontawesome-svg-core": "^1.2.25" [https://github.com/FortAwesome/react-fontawesome](https://github.com/FortAwesome/react-fontawesome)
6. "@fortawesome/free-solid-svg-icons": "^5.11.2" [https://github.com/FortAwesome/react-fontawesome](https://github.com/FortAwesome/react-fontawesome)
7. "@fortawesome/react-fontawesome": "^0.1.7" [https://github.com/FortAwesome/react-fontawesome](https://github.com/FortAwesome/react-fontawesome)
8. "axios": "^0.19.0" [https://github.com/axios/axios](https://github.com/axios/axios)
9. "bootstrap": "^4.3.1" [https://getbootstrap.com/docs/4.0/about/license/](https://getbootstrap.com/docs/4.0/about/license/)

When you use the project with 3rd party dependencies, their(3rd) own licences and their stricts are applied.

## License
[MIT](https://github.com/mehmetcanhoroz/NETASCOOP4424/blob/master/LICENSE)