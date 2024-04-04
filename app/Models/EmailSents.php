<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailSents extends Model
{
    use HasFactory;

    protected $fillable = ['sending_user_id','receiving_user_id','body'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
