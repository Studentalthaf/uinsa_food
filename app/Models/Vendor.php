<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var string
     */
    protected $table = 'table_vendors';
    protected $guarded = ['id'];

    protected $fillable = [
        'vendor_name',
        'vendor_phone_num',
        'vendor_address',
    ];

    public function menu()
    {
        return $this -> hasMany(Menu::class);
    }
}