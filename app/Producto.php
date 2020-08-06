<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $guarded = ["id", "created_at", "uodated_at"];

    public function categorias() {
        return $this->belongsTo("App\Categoria", "categoriaID");
    }
}
