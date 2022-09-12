<?php

namespace App\Services;

require __DIR__ . '/../../vendor/autoload.php';

use App\Queues\RabbitMQ\Receiver;

$receiver = new Receiver();
echo $receiver->recive();
