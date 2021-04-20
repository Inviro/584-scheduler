# 584-scheduler
Scheduling application that written using [Laravel](https://laravel.com/) and [Vue.js](https://vuejs.org/)

<br>

# Table of Contents
- [Installation](#Installation)
- [API](#api)
    * TBD
- [License](#license)

<br>

# Installation
1. Clone the repository
2. Install [PHP](https://www.php.net/downloads), [Composer](https://getcomposer.org/download/), and [Node.js](https://nodejs.org/en/) if needed
3. Make a copy of `.env.example` and rename it to `.env`
4. Fill out `.env` with correct information
  * Make sure that lines 10 - 15 in point to the correct database name and credentials
    * If you are using [XAMPP](https://www.apachefriends.org/download.html), you just need to create a new database named `laravel`
  * Fill in the lines starting with `GOOGLE_` with a valid Google OAuth 2.0 Client ID
    * These can be obtained by following the detailed instructions [here](https://developers.google.com/adwords/api/docs/guides/authentication#create_a_client_id_and_client_secret).
5. Start up your SQL server
6. Run Setup Commands:
    ```properties
    $ php artisan key:generate
    $ composer install
    $ npm install
    $ php artisan migrate
    ```
    **Or** run this command for all of them at once:
    ```properties
    $ npm run setup
    ```
7. Commands for running the app:
    ```properties
    $ php artisan serve
    $ npm run watch
    ```
## API

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