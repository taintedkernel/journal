<?php

use App\Database\Database;

require_once __DIR__ . '/private/init.php';

$entityManager = Database::getInstance()->getEntityManager();
return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
