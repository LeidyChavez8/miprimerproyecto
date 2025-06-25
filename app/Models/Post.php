<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    protected $table='posts'; 
    use HasFactory;

//minuscula y primer mayuscula
    protected function name(): Attribute{
        return Attribute::make(
            set: function($value){
                return strtolower($value);
            },
            get: function($value)
            {
                return ucfirst($value);
            }
        ); 
     }
    protected function casts(): array{
        return [
            'published_at'=> 'datetime',
            'is_active' =>'boolean'
        ]; 
    }

    public function getRouteKeyName(){
        return 'slug';
    }

}
