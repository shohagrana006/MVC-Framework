<?php
namespace App\Models;

use App\Base\Model;

class User extends Model{
    private string $tableName = 'users';
    public function getAll() : array
    {
        return $this->fetchAll("SELECT * FROM {$this->tableName}");
    }
}