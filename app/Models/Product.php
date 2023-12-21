<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Notifiable;
    protected $table = 'Product';

    protected $fillable = [
        'name',
        'description',
        'Price'
    ];
    use HasFactory;
}
