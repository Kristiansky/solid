<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Connections\ConnectionInterface;
use Illuminate\Http\Request;

class PasswordReminder extends Controller
{
    private ConnectionInterface $connection;

    public function __construct(ConnectionInterface $connection)
    {
        $this->connection = $connection;
    }

    public function remind()
    {
        $this->connection->connect();
        echo 'Password reminder sent';
    }
}
