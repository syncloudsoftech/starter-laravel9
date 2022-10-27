# starter-laravel9

Starter project based on [Laravel](https://laravel.com/) 9 + [Docker](https://www.docker.com/), uses [Bootstrap](https://getbootstrap.com/) 5 + [Font Awesome](https://fontawesome.com/) 6 for styling.

## Development

To start developing with the code, please make sure to have [Docker](https://www.docker.com/), [Node.js](https://nodejs.org/en/), [Yarn](https://yarnpkg.com/), [PHP](https://www.php.net/) and [composer](https://getcomposer.org/) installed on your workstation.
Once done, download/clone the code and run below commands in project folder:

```shell
# install dependencies
$ composer install && yarn install

# create sample .env file
$ php -r "file_exists('.env') || copy('.env.example', '.env');"

# set application key
$ php artisan key:generate

# start Docker services
$ docker-compose up -d

# prepare database
$ php artisan migrate --seed
```

### Running

Finally, you can run the project using below command:

```shell
$ php artisan serve
```

## Extras

The [Docker](https://www.docker.com/) setup also include below services to ease local development:

- [MailCatcher](https://mailcatcher.me/) - to catch all outgoing emails, access on [http://localhost:8025](http://localhost:8025)
- [MinIO](https://min.io/) - an S3 compatible storage, access on [http://localhost:9091](http://localhost:9091)
- [phpMyAdmin](https://www.phpmyadmin.net/) - to manage SQL database, access on [http://localhost:8080](http://localhost:8080)
- [Redis Commander](http://joeferner.github.io/redis-commander/) - to manage Redis data, access on [http://localhost:8081](http://localhost:8081)

## Notes

Some additional configuration described below may be needed for extended functionality.

### File uploads

Before uploading files, you may need to log in to [MinIO](https://min.io/) console at [http://localhost:9091/](http://localhost:9091/) using `starterapp` as both (username and password) and create a bucket named `starterapp`.
Once created, go to bucket's settings and change its **Access Policy** to `Public`.
