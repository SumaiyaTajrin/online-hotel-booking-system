<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Roomtype extends Model
{
    use HasFactory;
    protected $guarded=[];
    // public function room()
    // {
    //     //who->relation name->to whom
    //     // 1 to  1 dependent =belongsTo
    //     // 1 to 1 not dependent = hasOne
    //     return $this->belongsTo(Room::class);
    // }
}
