<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
        'category_id',   //inserito dopo le funzioni di relazione
    ];

    public function category(){

        //funzione di relazione
        //Il post ha una sola categoria associata
        return $this->belongsTo('App\Category');

    }


}
