<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Forum:
Forum is a question and answer website for programmers. It features questions and answers on a selected category of topics in computer programming. The website serves as a platform for users to ask and answer questions.

![logo](screenshots/forumlogo.png)

-----
## About Laravel:

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

-----
## Table of Contents:

* [Features](#item1)
* [Forum Overview/Specifications](#item2)
* [Installation Guide](#item3)
* [Database](#item4)
* [Flowchart](#item5)
* [Screenshots](#item6)

-----
<a name="item1"></a>

## Features:

* Welcome Page
* Login & Registration
* Email Verification
* Reset Password
* Asking Questions
* Upload Code
* Comment-Reply System
* User Details
* Logout

* Front-end
  * Html, Css, Javascript & Bootstrap
* Backe-end
  * Php & Php Laravel

-----
<a name="item2"></a>

## Forum Overview/Specifications:
First of all in Forum’s home page we have a navbar, button for login/registration page (no can access the next page without login or registration, old user can login to this site and new user have to register as well as have to complete email verification for accessing this site) and category(C, C++, JAVA, HTML CSS & JAVASCRIPT, PYTHON & PHP). If anyone click on any language category(C, C++, JAVA, HTML CSS & JAVASCRIPT, PYTHON & PHP) example: if I want to go C language category page, then I will click on C category. If user click on any category(C, C++, JAVA, HTML CSS & JAVASCRIPT, PYTHON & PHP), then user will see the all questions(problems) posted or asked by other users related to this category(C, C++, JAVA, HTML CSS & JAVASCRIPT, PYTHON & PHP). If any user click on any question (problem posted by other user) simply they will redirect to this question (problem) page where anyone can give the solution of this problem by comment. Users also have a ‘mydata’ page where they can see their account details and what kind of questions they asked.

-----
<a name="item3"></a>


## Installation Guide:

* [Step 1: Download the Repository](#step1)
* [Step 3: Run Forum](#step2)

-----
<a name="step1"></a>

### Step 1: Download the Repository

Either Clone the repository using git clone: `git clone https://github.com/ozdemirburak/laravel-8-simple-cms.git` 
or install via <a target="_blank" href="https://github.com/ozdemirburak/laravel-8-simple-cms/archive/master.zip">zip</a> and extract 
to any of your folders you wish.

-----
<a name="step2"></a>

### Run Forum:
To serve the forum application, you can use `php artisan serve`, then open [http://localhost:8000](http://localhost:8000) from your browser.
-----

<a name="item4"></a>

## Database:

Import the `forum.sql` file in your phpMyAdmin database.

-----
<a name="item5"></a>

## Flowchart:
![Flowchart](screenshots/flowchart.png)

-----
<a name="item6"></a>

## Screenshots:

![Welcome](screenshots/welcome.png)
![Login](screenshots/login.png)
![Registration](screenshots/registration.png)
![Home](screenshots/home.png)
![Questions](screenshots/questions.png)
![Question & Comment](screenshots/question&omment.png)
![Ask Question](screenshots/askquestion.png)
![User Data](screenshots/userdata.png)