<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->connection = env('APP_ENV') === 'testing' ? 'mysql_test' : env('DB_CONNECTION');
    }
}
