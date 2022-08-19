<?php

/** @var \Laravel\Lumen\Routing\Router $router */


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    //return $router->app->version();
    echo 'test';
});

$attributes = [
    // do not change the prefix our the endpoints
    'prefix' => 'user',
    // Can change the namespace
    // 'namespace' => 'User',
];
$router->group(
    $attributes,
    function () use ($router, $attributes) {
        $router->post('/signup', ['uses' => 'UserController@signup']);
        $router->post('/login', ['uses' => 'UserController@login']);
    }
);

$attributes = [
    // do not change the prefix our the endpoints
    'prefix' => 'user',
    'middleware' => ['auth'],
    // Can change the namespace
    // 'namespace' => 'UserController',
];
$router->group(
    $attributes,
    function () use ($router, $attributes) {

        $router->get('/testauth', ['uses' => 'UserController@testAuth']);
        $router->post('/me', ['uses' => 'UserController@me']);
        $router->post('/logout', ['uses' => 'UserController@logout']);
    }
);

$attributes = [
    // do not change the prefix our the endpoints
    'prefix' => 'todonotes',
    // Can change the namespace
    // 'namespace' => 'TodoNotes',
    'middleware' => ['auth'],
];
$router->group(
    $attributes,
    function () use ($router, $attributes) {

        $router->get('/', function () use ($router) {
            // return paginated results of sorted (created_at) todonotes for this user
            // inputs: [api_token, ?page]
            // returns: {notes: [{todonote}, ...], next_page_exists: boolean, prev_page_exists: boolean}
            //     todonote = {id, note_string, created_at, completed_at}
            //     next_page_exists = true only if there exists todonotes in the next page number
            //     prev_page_exists = true only if there exists todonotes in the prev page number
            return $router->app->version();
        });

        $router->post('/create', function () use ($router) {
            // return an API token that is stored in the db/redis
            // inputs: [api_token, todo_note_string]
            // returns: api_token
            return $router->app->version();
        });

        $router->post('/mark/done/{todo_id}', function () use ($router) {
            // Marks a todo note as done and store the time it was finished
            // inputs: [api_token]
            // return: [success]
            return $router->app->version();
        });

        $router->post('/mark/pending/{todo_id}', function () use ($router) {
            // Marks a todo note as pending
            // inputs: [api_token]
            // return: [success]
            return $router->app->version();
        });
    }
);
