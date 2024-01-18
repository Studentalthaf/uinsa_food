<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var string
     */
    protected $guarded = ['id'];

    public function order()
    {
        return $this -> belongsTo(Order::class);
    }
}
