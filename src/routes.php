<?php
// Routes

$app->get('/chicken', App\Plugins\Chickens\ChickenController::class . ':getChicken');
$app->get('/chicken/loader', App\Plugins\Chickens\ChickenController::class . ':getLoader');

$app->get('/greet/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    $reply = array( 'message' => null );
    if (isset($args['name'])) {
        $reply['message'] = 'Hello '.$args['name'];
    }

    // Render index view
    return $response->withJson($reply);
});
