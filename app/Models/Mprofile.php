<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mprofile extends Model
{
    use HasFactory;
    public function Relation()   
{
    return $this->belongsTo(Relation::class);
}
public function From()   
{
    return $this->belongsTo(From::class);
}

}
