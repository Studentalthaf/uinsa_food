<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'quantity'
    ];

    public function user()
    {
        return $this -> belongsTo(User::class);
    }

    public function purchase()
    {
        return $this -> belongsTo(Purchase::class);
    }

    public function menu()
    {
        return $this -> hasMany(Order::class);
    }
}