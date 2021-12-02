# REDIRECT AND REWRITE URLS USING LARAVEL HTTP CLIENT

## Installation

Here you can set up this project in two ways

### 01. Normal process

1. Clone this repository
    ```
    $ git clone https://github.com/ashenud/laravel-http-client.git
    ```
2. Install backend depedencies and front end depedencies.
    ```
    $ cd laravel-http-client
    $ composer install
    ```
3. Edit configuration files.
    ```
    $ cp .env.example .env
    $ nano .env
    ```
5. Changes the api host and default parameter values
    ```
    SETTING_API_SOURCE=http://localhost:8060
    SETTING_PER_PAGE=50
    SETTING_PAGE=1
    ```
6. Generate an application key and clear the cache
    ```
    $ php artisan key:generate
    $ php artisan config:cache
    ```
7. Serve the project
    ```
    $ php artisan serve
    ```

###  02. Run in a Docker container

0. Initial setup on amarzon linux 2 EC2 (Optional)
    ```
    $ sudo su
    $ yum update -y
    $ yum install -y docker
    $ service docker start
    $ yum update -y
    $ yum install git -y
    $ curl -L https://github.com/docker/compose/releases/latest/download/docker-compose-$(uname -s)-$(uname -m) -o /usr/local/bin/docker-compose
    $ chmod +x /usr/local/bin/docker-compose
    $ ln -s /usr/local/bin/docker-compose /usr/bin/docker-compose
    ```

1. Clone this repository
    ```
    $ git clone https://github.com/ashenud/laravel-http-client.git
    ```
2. Edit configuration files.
    ```
    $ cd laravel-http-client
    $ cp .env.example .env
    $ nano .env
    ```
3. Changes the api host and default parameter values
    ```
    SETTING_API_SOURCE=http://localhost:8060
    SETTING_PER_PAGE=50
    SETTING_PAGE=1
    ```
4. Run docker containers.
    ```
    $ docker-compose up -d
    ```
5. Install backend depedencies and front end depedencies.
    ```
    $ docker exec -it backend composer update
    ```
6. Generate an application key and create a passport key
    ```
    $ docker exec -it backend php artisan key:generate
    $ docker exec -it backend php artisan config:cache
    ```
7. Give permission to storage folder
    ```
    $ docker exec -it backend chmod -R 777 storage
    ```

## Usage

Use postman to check requests.

* Login URL

> `http://127.0.0.1:8000/api/login`

When using the Docker container, use 9090 as the port, you can change it in docker compose file

Credentials 

```
email : 
password : 
```

* Get customers URL

> `http://127.0.0.1:8000/api/clients/{client_uuid}/customers?perPgae={perPage}&page={page}`

Use the token you receive when logging as the authorization Bearer Token in here


## Author

* **[Ashen Udithamal](https://www.linkedin.com/in/ashenud/)** 
