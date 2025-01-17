<?php

namespace App\Models;

use App\Models\Base\BaseModel;

class PrestadorServico extends BaseModel
{
    protected $fillable = [
        "user_id"
    ];

    public $belongsTo = ['user'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public $hasMany = ["avaliacoes"];
    public function avaliacoes(){
        return $this->hasMany(AvaliacaoPrestador::class);
    }
}
