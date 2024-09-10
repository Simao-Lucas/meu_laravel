<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public static function tipos(){
        return[
            'Nacional',
            'Internacional'
        ];
    }

    //retona do banco de dados
    public function getPrecoAttribute($preco){
        return number_format($preco, 2, ',', '');
    }

    //manda para o banco de dados
    public function setPrecoAttribute($preco){
        $this->attributes['preco'] = str_replace(',','.',$preco);
    }
}
