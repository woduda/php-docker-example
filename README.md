# PHP Docker Example configuration

This is simple and typical configuration for PHP on Docker with PHP-FPM for development environment

## How to run:

1. You must have docked installed on your machine.
2. Clone this repo.
3. Change directory to `docker` subfolder.
4. Run docker compose: `docker compose up -d`
5. `docker exec php-docker-example-app composer install`
6. Navigate to `http://localhost` in your web browser.
