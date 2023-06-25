<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Themes extends Model
{
    use HasFactory;
    //to set as foregn key
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    //to allowed th update
    protected $fillable = [
        'color_side_barre',
    ];
}
