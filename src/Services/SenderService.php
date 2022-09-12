<?php

namespace App\Services;

require __DIR__ . '/../../vendor/autoload.php';

use App\Queues\RabbitMQ\Sender;

$sender = new Sender();
echo $sender->send();
