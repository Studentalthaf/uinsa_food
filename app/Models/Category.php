<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $table = 'table_category';
    protected $primaryKey = 'category_id';

    protected $fillable = [
        'category_name',
    ];

    public function menu()
    {
        return $this -> hasMany(Menu::class);
    }
}