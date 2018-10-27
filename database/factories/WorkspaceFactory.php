<?php

use Faker\Generator as Faker;
use App\Model\Workspace;

$factory->define(Workspace::class, function (Faker $faker) {
    $workspaceName = str_random(15);
    return [
        'name' => $workspaceName,
        'url' => 'https://' . $workspaceName . '.zlack.com',
    ];
});
