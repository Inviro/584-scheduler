# 584-scheduler
Scheduling application that written using [Laravel](https://laravel.com/) and [Vue.js](https://vuejs.org/)

<br>

# Table of Contents
- [Installation](#installiation)
- [API](#api)
    * TBD
- [License](#license)

<br>

# Installation
1. Clone the repository
2. Install [PHP](https://www.php.net/downloads), [Composer](https://getcomposer.org/download/), and [Node.js](https://nodejs.org/en/) if needed
3. Make a copy of `.env.example` and rename it to `.env`
4. Make sure that lines 10 - 15 in `.env` point to the correct database
  * If you are using [XAMPP](https://www.apachefriends.org/download.html), you just need to create a new database named `laravel`
5. Start your SQL server (optional)
6. Run the following commands:
    ```js
    $ php artisan key:generate
    $ composer install
    $ npm install
    $ php artisan migrate
    // Start backend
    $ php artisan serve
    // Start frontend
    $ npm run watch
    ```

<br>

### **Section Name**

<br>

#### Title
---
Description
* **URL:**
/api/asdf
* **Method:**
`GET`
* **URL Params:**
none
* **Body Params:**
none
* **Authorization Params in header:**
```
Authorization: ...
```
* **Success Response:**
  > **Code:** 200 
* **Content:**
```js

```
* **Error Responses:**
  > **Code:** 403 Forbidden, 401 UNAUTHORIZED, 400 BAD REQUEST


<br>

# License
This project is currently unlicensed, but check again soon for updates!