Once you have Docker and Docker Compose installed, you can get this environment up and running with:

```
docker-compose build app
docker-compose up -d
```

#### docker setup
`docker build . -t gouravsingh258/laravel-k8` 

`docker push gouravsingh258/laravel-k8`

#### k8s setup
`kubectl apply -f php_service.yaml` 

`kubectl apply -f php_deployment.yaml`

`kubectl apply -f nginx_configMap.yaml`

`kubectl apply -f nginx_service.yaml`

`kubectl apply -f nginx_deployment.yaml`

#### check endpoints
`kubectl get endpoints php`

#### configs
`kubectl get pods ( copy any pod id )`

`kubectl exec -it php_pod_id bash`

`cp -r /var/www/. /code/app`

#### start dev server
`minikube service nginx`


A demo application to illustrate how it works.

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

History for troubleshooting :

  Id CommandLine
  -- -----------
   1 try { . "c:\Users\gouravsingh01\AppData\Local\Programs\Microsoft VS Code\resources\app\out\vs\workbenc...
   2 docker build . -t gouravsingh258/laravel-k8:final
   3 docker logout
   4 docker login
   5 docker push gouravsingh258/laravel-k8:final
   6 kubectl apply -f php-service.yaml
   7 kubectl apply -f .\php_service.yaml
   8 kubectl apply -f .\php_deployment.yaml
   9 kubectl apply -f .\nginx_configMap.yaml
  10 kubectl apply -f .\nginx_service.yaml
  11 kubectl apply -f .\nginx_deployment.yaml
  12 kubectl get pods
  13 kubectl get all
  14 kubectl get all
  15 kubectl get endpoints php
  16 minikube service nginx
