<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected $table = 'categories';
    
    protected $fillable = [
        'name'
    ];
    
    public $timestamps = false;
    
    public function rules()
    {
        return [
            'name' => 'required|string|max:30',
        ];
    }
    
    public function foods()
    {
        return $this->belongsToMany(Food::class, 'food_category');
    }
}
