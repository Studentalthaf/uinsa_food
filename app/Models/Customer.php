<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $table = 'table_customer';
    protected $primaryKey = 'customer_id';

    protected $fillable = [
        'cust_name',
        'cust_pass',
        'cust_phone_num',
        'unit_kerja'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'cust_pass'
    ];

    public function menu()
    {
        return $this -> hasMany(Menu::class);
    }

    public function order()
    {
        return $this -> hasMany(Order::class);
    }
}