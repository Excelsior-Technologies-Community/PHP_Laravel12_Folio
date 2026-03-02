# PHP_Laravel12_Folio


## Project Description

PHP_Laravel12_Folio is a Laravel 12 based portfolio/demo project that demonstrates the use of Folio, a page-based routing package.
It allows developers to create static, nested, and dynamic pages quickly by simply creating Blade templates. Folio automatically generates routes for these pages without manually defining them in web.php.

This project is perfect for building personal portfolios, blogs, or small web apps with minimal routing setup.


## Features

- Page-Based Routing: Automatically maps Blade files in resources/views/pages to URL routes.

- Nested Pages: Supports folder-based nested routes like /blog and /blog/article.

- Dynamic Routes: Create dynamic pages using [param], e.g., /users/{id}.

- Auto-Generated Routes List: View all routes with php artisan folio:list.

- Simple CSS Styling: Inline CSS included for layout and navigation.

- Fully Static Pages: Great for simple portfolios or blogs without a database.

- Lightweight: No heavy controllers or route definitions needed for basic pages.



## Technologies Used

1. PHP 8.2+ – Server-side scripting language.

2. Laravel 12 – PHP framework for building web applications.

3. Laravel Folio – Page-based routing package for Laravel.

4. Blade Templates – Laravel’s template engine for creating HTML pages.

5. MySQL (Optional) – Database support if you want to extend pages with dynamic data.

6. HTML5 & CSS3 – Front-end structure and styling.




---



## Installation Steps


---


## STEP 1: Create Laravel 12 Project

### Open terminal / CMD and run:

```
composer create-project laravel/laravel PHP_Laravel12_Folio "12.*"

```

### Go inside project:

```
cd PHP_Laravel12_Folio

```

#### Explanation:

Installs a fresh Laravel 12 project with all default directories and files.



## STEP 2: Database Setup (Optional)

### Update database details:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel12_folio
DB_USERNAME=root
DB_PASSWORD=

```

### Create database in MySQL / phpMyAdmin:

```
Database name: laravel12_folio

```

#### Explanation:

Configures Laravel to connect to a MySQL database (optional for Folio pages).






## STEP 3: Install Folio

### Install the page‑based routing package:

```
composer require laravel/folio

```


### Then publish the config (optional):

```
php artisan folio:install

```

#### Explanation: 

Installs Folio, the package that enables page-based routing in Laravel.

Registers Folio service provider and optional config files.






## STEP 4: Set Up Directory

### In your Laravel project, create:

```
resources/views/pages/

```

#### Folio scans this folder and automatically maps each Blade file to a route.




## STEP 5: Create Folio Pages


### File: resources/views/pages/index.blade.php

```
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Folio | Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f9f9f9;
        }

        header {
            background: #4f46e5;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav a {
            margin: 0 15px;
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        main {
            padding: 40px;
            text-align: center;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #ddd;
            margin-top: 40px;
        }

        h1 {
            color: #4f46e5;
        }

        p {
            font-size: 18px;
            color: #333;
        }

        a.button {
            background: #4f46e5;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
            display: inline-block;
        }
    </style>
</head>

<body>
    <header>
        <h1>Welcome to Laravel Folio!</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
            <a href="/blog">Blog</a>
        </nav>
    </header>
    <main>
        <p>This is your Home Page (Folio) with Laravel 12.</p>
        <a class="button" href="/blog">Visit Blog</a>
    </main>
    <footer>
        &copy; 2026 PHP_Laravel12_Folio
    </footer>
</body>

</html>

```



### File: resources/views/pages/about.blade.php

```
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Folio | About</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #eef2ff;
        }

        header {
            background: #4f46e5;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav a {
            margin: 0 15px;
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        main {
            padding: 40px;
            text-align: center;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #ddd;
            margin-top: 40px;
        }

        h1 {
            color: #4f46e5;
        }

        p {
            font-size: 18px;
            color: #333;
        }
    </style>
</head>

<body>
    <header>
        <h1>About Laravel Folio</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/contact">Contact</a>
            <a href="/blog">Blog</a>
        </nav>
    </header>
    <main>
        <p>This project uses Folio routing in Laravel 12.</p>
        <p>Folio allows page-based routing: just create Blade files and they become routes automatically!</p>
    </main>
    <footer>
        &copy; 2026 PHP_Laravel12_Folio
    </footer>
</body>

</html>

```


### File: resources/views/pages/contact.blade.php

```
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Folio | Contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #fff4f4;
        }

        header {
            background: #4f46e5;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav a {
            margin: 0 15px;
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        main {
            padding: 40px;
            text-align: center;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #ddd;
            margin-top: 40px;
        }

        h1 {
            color: #4f46e5;
        }

        p {
            font-size: 18px;
            color: #333;
        }

        form input,
        form textarea {
            width: 300px;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        form button {
            padding: 10px 20px;
            background: #4f46e5;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <header>
        <h1>Contact Us</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/blog">Blog</a>
        </nav>
    </header>
    <main>
        <p>Email: example@example.com</p>
        <form>
            <input type="text" placeholder="Your Name"><br>
            <input type="email" placeholder="Email"><br>
            <textarea placeholder="Message"></textarea><br>
            <button>Send Message</button>
        </form>
    </main>
    <footer>
        &copy; 2026 PHP_Laravel12_Folio
    </footer>
</body>

</html>

```

#### Explanation:

These pages demonstrate static Folio pages with inline CSS.




## STEP 6: Nested Routes Example

### Create:

```
resources/views/pages/blog/

```

### Then: blog/index.blade.php

```
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Folio | Blog</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f0fff4;
        }

        header {
            background: #4f46e5;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav a {
            margin: 0 15px;
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        main {
            padding: 40px;
            text-align: center;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #ddd;
            margin-top: 40px;
        }

        h2 {
            color: #4f46e5;
        }

        a.button {
            background: #4f46e5;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <header>
        <h2>Blog Home</h2>
        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </nav>
    </header>
    <main>
        <p>List of blog posts will appear here.</p>
        <a class="button" href="/blog/article">Read Article</a>
    </main>
    <footer>
        &copy; 2026 PHP_Laravel12_Folio
    </footer>
</body>

</html>

```

### blog/article.blade.php

```
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Folio | Blog Article</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #fffaf0;
        }

        header {
            background: #4f46e5;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav a {
            margin: 0 15px;
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        main {
            padding: 40px;
            text-align: center;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #ddd;
            margin-top: 40px;
        }

        h2 {
            color: #4f46e5;
        }

        p {
            font-size: 18px;
            color: #333;
        }

        a.button {
            background: #4f46e5;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <header>
        <h2>Blog Article</h2>
        <nav>
            <a href="/">Home</a>
            <a href="/blog">Back to Blog</a>
        </nav>
    </header>
    <main>
        <p>This is an example article page.</p>
        <a class="button" href="/blog">← Back to Blog</a>
    </main>
    <footer>
        &copy; 2026 PHP_Laravel12_Folio
    </footer>
</body>

</html>

```

#### Explanation: 

Nested folders in pages/ automatically create URL paths for sub-pages.





## STEP 7: Dynamic Route Example

### Create: resources/views/pages/users/[id].blade.php

```
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Folio | User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f0f8ff;
        }

        header {
            background: #4f46e5;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav a {
            margin: 0 15px;
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        main {
            padding: 40px;
            text-align: center;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #ddd;
            margin-top: 40px;
        }

        h1 {
            color: #4f46e5;
        }

        p {
            font-size: 18px;
            color: #333;
        }
    </style>
</head>

<body>
    <header>
        <h1>User Profile</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/users/{{ $id }}">Refresh</a>
        </nav>
    </header>
    <main>
        <p>User ID: <strong>{{ $id }}</strong></p>
    </main>
    <footer>
        &copy; 2026 PHP_Laravel12_Folio
    </footer>
</body>

</html>

```

### This route will handle any URL like:

```
/users/1
/users/99

```

#### Explanation: 

Folio supports dynamic routes using [param]; any /users/{id} URL will render this page with $id injected.




## STEP 8: Add Route

### Open: routes/web.php

```
<?php

use Illuminate\Support\Facades\Route;

// Optional: redirect root if needed
Route::get('/', function () {
    return view('pages.index');
});

```




## STEP 9: List All Folio Routes

### From project root:

```
php artisan folio:list

```

#### Explanation: 

Lists all pages automatically routed by Folio, including nested and dynamic routes.




## STEP 10: Run the App

### Start Laravel dev server:

```
php artisan serve

```

### Open in browser:

```
http://127.0.0.1:8000

```

#### Explanation: 

You can now visit all Folio pages like /, /about, /contact, /blog, /blog/article, and /users/{id}.






## So you can see this type Output:

#### Folio auto-routes pages


<img width="1919" height="870" alt="image" src="https://github.com/user-attachments/assets/26faed38-50ea-4a68-8c9c-7ab3593b42bf" />


### About Page:


<img width="1919" height="865" alt="Screenshot 2026-03-02 175503" src="https://github.com/user-attachments/assets/88bd69fe-99c4-471e-8860-a305594f269f" />


### Contact Page:


<img width="1919" height="893" alt="Screenshot 2026-03-02 175524" src="https://github.com/user-attachments/assets/33e5dbe4-60d1-42cd-abd7-b9d30a8a1957" />


### Blog Page:


<img width="1919" height="874" alt="Screenshot 2026-03-02 175542" src="https://github.com/user-attachments/assets/044ecc31-fe8e-45c0-b2f3-ad96fb16928f" />


### Blog/article:


<img width="1919" height="870" alt="Screenshot 2026-03-02 175551" src="https://github.com/user-attachments/assets/47fe876a-b935-4154-9945-fa5a1e18a073" />


### Users/{id}:


<img width="1919" height="793" alt="Screenshot 2026-03-02 175651" src="https://github.com/user-attachments/assets/5c0d75b4-a5ae-4056-904c-e46489a2e828" />



---

# Project Folder Structure:

```
PHP_Laravel12_Folio/
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
│   ├── views/
│   │   └── pages/
│   │       ├── index.blade.php           → Route: /
│   │       ├── about.blade.php           → Route: /about
│   │       ├── contact.blade.php         → Route: /contact
│   │       ├── blog/
│   │       │   ├── index.blade.php       → Route: /blog
│   │       │   └── article.blade.php     → Route: /blog/article
│   │       └── users/
│   │           └── [id].blade.php        → Route: /users/{id}
├── routes/
│   └── web.php
├── vendor/
├── .env
├── composer.json

```
