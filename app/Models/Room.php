<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Room extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function roomtype()
     {
         //who->relation name->to whom
         // 1 to  1 dependent =belongsTo
         // 1 to 1 not dependent = hasOne
         return $this->belongsTo(Roomtype::class);
     }
     public function roomamenities()
     {
         //who->relation name->to whom
         // 1 to  1 dependent =belongsTo
         // 1 to 1 not dependent = hasOne
         return $this->hasMany(Roomamenities::class);
     }
}
