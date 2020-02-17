<?php

$app = require '../bootstrap/app.php';

$request = \Bobby\Component\Http\Request\InstanceFactory::make();

$app->responsePipeline($request);