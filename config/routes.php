<?php

use NoahBuscher\Macaw\Macaw;

Macaw::get('index/welcome', 'Application\controller\IndexController@Welcome');

Macaw::get('(:all)', function ($fu) {
    echo 'invalid routes' . $fu;
});

Macaw::dispatch();