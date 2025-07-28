<?php

namespace IST\DoctrineFirebirdDriver\Driver\MySQL\PDO;

use Doctrine\DBAL\Driver\PDOConnection;
use Doctrine\DBAL\Exception;

class Connection extends PDOConnection
{
    /**
     * {@inheritdoc}
     */
    public function beginTransaction()
    {
        return true;
    }
}
