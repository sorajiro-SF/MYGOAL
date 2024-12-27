<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mprofile extends Model
{
    use SoftDeletes;
    use HasFactory;
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);

    }

    public function Relation()   
{
    return $this->belongsTo(Relation::class);
}

public function From()   
{
    return $this->belongsTo(From::class);
}

}
