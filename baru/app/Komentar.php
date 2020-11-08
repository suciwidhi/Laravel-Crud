<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Komentar extends Model
{
    protected $table = 'komentar';

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function forum(){
        return $this->belongsTo(Forum::class);
    }
}
