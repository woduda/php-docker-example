# PHP Docker Example setup

This is simple and typical configuration for PHP on Docker with PHP-FPM + nginx + MariaDB for development environment. All required composer dependencies are installed inside Docker image (no need to run `composer install` after starting app container)

## How to run:

1. You must have Docker installed on your machine.
2. Clone this repo.
3. Copy `.env.example` file as `.env` and set your own variables if needed.
4. Run docker compose: `docker compose up -d`
6. Navigate to [http://localhost](http://localhost) in your web browser.

Your MariaDB instance in docker container listens on port 3306 so you can connect with any mysql client and change content of your database. All tables in your database will be listed on [http://localhost](http://localhost)
