Once you have Docker and Docker Compose installed, you can get this environment up and running with:

```
docker-compose build app
docker-compose up -d
```

A demo application to illustrate how Inertia.js works.
<img width="900" alt="Screenshot 2023-05-02 002127" src="https://user-images.githubusercontent.com/49956754/235510280-b003616c-dd18-4d2d-81e1-7b4433e4dad2.png">

![](https://user-images.githubusercontent.com/49956754/235510280-b003616c-dd18-4d2d-81e1-7b4433e4dad2.png)

## Installation

Clone the repo locally:

```sh
git clone ...
cd ./...
```

Install PHP dependencies:

```sh
composer install
```

Install NPM dependencies:

```sh
npm i
```

Build assets:

```sh
npm run dev
```

Setup configuration:

```sh
cp .env.example .env
```

Generate application key:

```sh
php artisan key:generate
```

Create an SQLite database. You can also use another database (MySQL, Postgres), simply update your configuration accordingly.

```sh
touch database/database.sqlite
```

Run database migrations:

```sh
php artisan migrate
```

Run database seeder:

```sh
php artisan db:seed
```

Run the dev server (the output will give the address):

```sh
php artisan serve
```
