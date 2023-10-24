# MIKI TRAN SAYS HELLO

# EXTENSIONS

-   vscode: `LARAVEL ARTISAN`, `laravel blade snipp`, `laravel blade spacer`, `laravel goto view`
-   extension `live sass compiler`, `beauty css/sass/scss/less`
-   extension `PHP IntelliSense`, `Getter and setter Generator`, `Bracket Pair Colorization Toggler`
-   extensions `Javascript (ES6) code snippets`

# CAU LENH

-   Tao controller `php artisan make:controller ProductsController --force`, voi --force la cho phep cai de

# LUU Y

-   sung dung cmd `dir` de list cac thanh phan trong folder; s dung `dir /w` de xem dang rut gon.
-   su dung `php artisan list` de liet ke cac cau lenh ho tro
-   `VENDORS` chua cac thu vien cho Laravel;
-   `"laravel/framework": "^10.10",` theo dang `(patch).(alpha).(beta)`
-   search theo `PACKAGIST` thu vien cho laravel.
-   SU DUNG `php artisan storage:link` -> save images to `storage` folder.

# CAI DAT

-   cai dat `composer create-project laravel/laravel app-name`;
-   chay `php artisan serve` de chay project;
    -   de thay doi port su dung `php artisan serve --port=8082`
-   de cai dat lai/update modules su dung `composer update` hoac `composer install`
-   sau khi edit version hay xoa thu vien thi chay lai `composer update`

# NOI DUNG

-   Environment Variables;
-   View Engine mac dinh dung `BLADE`
-   buid controller & view `products`:
    -   `with` method can only send 1 parameter.
-   dinh nghia router name
-   buil PagesController: layout su dung chung
-   some basic commands in Blade (nhung PHP trong view)
-   Syntactically Awesome Style Sheets `SASS` xem muc lien quan SCSS

1:11:13 - Add MySQL Database using XAMPP
1:14:26 - Database Migration
1:23:09 - Some SQL commands in Eloquent
1:41:49 - Insert fake data to MySQL
1:49:14 - CRUD with Controller and View in Laravel
1:57:21 - Prevent CSRF attack
2:21:53 - Add more models and migrate
2:41:23 - Validate input request
2:49:21 - Validation by creating a custom Request
2:52:10 - Upload image to server

## SCSS:

-   cai dat tai file o thu muc goc `webpack.mix.js`
-   chay `npm install` de cai dat cac package can thiet
-   phien ban 10 so voi ban 9 cai dat SASS khac nhau; do v10 su dung VITE di kem LARAVEL
-

# TUONG TAC MYSQL

-   su dung cau lenh `mysql -u root -p` de ket noi
-   su dung `show databases;` de hien thi danh sach DB
-   tao CSDL `create database laravelApp;`
-   tao controller moi `php artisan make:controller PostsController`
-   bo sung route vao `posts` o file `web.php`
