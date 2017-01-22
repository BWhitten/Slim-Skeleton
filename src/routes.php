<?php
// Routes

$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    $reply = array( 'message' => null );
    if (isset($args['name'])) {
        $reply['message'] = 'Hello '.$args['name'];
    }

    // Render index view
    return $response->withJson($reply);
});
