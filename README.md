# Scrawlr Hiring | Full Stack Technical Assessment

Hello and welcome to Scrawlr's technical assessment for Full Stack candidates.
Please see the instructions below and contined within the source code for the requirements for submission.

Expected completion time: 2-3 hours

## Requirements for submission

1. The focus of this project is the connection between the frontend and backend
    - this means that we will not be grading the styling of frontend UI or the database design
2. Must support offline mode
    - offline mode allows for viewing of existing cached content if the internet connection goes down
3. Must support graceful API interactions if the API shuts down
    - you can manually shut down the API with the command `make api.stop`
    - HINT: update the visuals as though it succeeded and then try to resend the request until it succeeds
        or too much time has passed

## How to get this running

### Development Requirements

1. make
2. docker v20+ (check that `docker compose version` works)
    - Docker Compose version v2.5.0

### Installation instructions

1. `cp .env.example .env` -- make any edits to `.env` as required
    - You can change ports here if you run into conflicts
2. `cp src/api/.env.example src/api/.env` -- make any edits to `.env` as required
3. `make up` - start all of the containers
4. `make api.install` - runs composer install for the api
5. `make db.migrate` - setup the database initial migration

### Useful Commands

Please see all commands inside `Makefile`.

- `make api` - this will get you a bash terminal inside the API.
    You can use `php artisan` to create laravel files quickly
- `make logs.watch` - this will show you all docker logs and automatically update them
    - You can use `make logs.{api,ui,db}` to filter it to a specific container
