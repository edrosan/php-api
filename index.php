<?php

require 'flight/Flight.php';
include 'v1/routes/estudioRoutes.php';

Flight::route('GET /', function () {
    echo 'Inicio API';
});

Flight::map('notFound', function(){
    echo '404 No encontrado';
});

Flight::start();
