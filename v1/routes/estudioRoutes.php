<?php

include 'controllers/estudioController.php';
Flight::route('GET /v1/', 'getPerfilesService');

Flight::route('GET /v1/estudios/', 'getEstudios');

Flight::route('POST /v1/estudios/', 'setEstudio');
