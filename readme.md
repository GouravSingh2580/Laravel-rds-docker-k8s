Once you have Docker and Docker Compose installed, you can get this environment up and running with:

```
docker-compose build app
docker-compose up -d
```

A demo application to illustrate how Inertia.js works.

![](https://raw.githubusercontent.com/inertiajs/pingcrm/master/screenshot.png)

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
