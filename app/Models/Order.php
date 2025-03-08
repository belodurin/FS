<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // Указываем, какие поля можно массово присваивать
    protected $fillable = [
        'user_id',
        'solution_name',
        'description',
    ];
}
