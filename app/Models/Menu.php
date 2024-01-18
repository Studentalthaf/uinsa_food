<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */

    protected $table = 'table_menu';
    protected $guarded = ['id'];

    protected $fillable = [
        'menu_pic',
        'menu_name',
        'menu_price',
        'menu_desc'
    ];

    static function menu_list(){
        $data = Menu::all();
        return $data;
    }

    static function add_menu($menu_pic,$menu_name,$menu_price,$menu_desc){
        Menu::create([
            "menu_pic" => $menu_pic,
            "menu_name" => $menu_name,
            "menu_price" => $menu_price,
            "menu_desc" => $menu_desc
        ]);
    }


    public function user()
    {
        return $this -> hasMany(User::class);
    }

    public function category()
    {
        return $this -> belongsTo(Category::class);
    }

    public function order()
    {
        return $this -> belongsTo(Order::class);
    }

    public function vendor()
    {
        return $this -> belongsTo(Menu::class);
    }
}