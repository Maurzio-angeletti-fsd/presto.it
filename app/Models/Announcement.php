<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Announcement extends Model
{
    use HasFactory, Searchable;

    public $asYouType = true;


    public function toSearchableArray()
    {
        $category = $this->category;
        $array = [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'category' => $category,
        ];

        return $array;
    }

    protected $fillable = ['category_id', 'user_id', 'title', 'description', 'price'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function setAccepted($value)
    {

        $this->is_accepted = $value;
        $this->save();
        return;
    }

    public static function toBeRevisionedCount()
    {

        return Announcement::where('is_accepted', null)->count();
    }
    
    public static function revisionedCount()
    {

        return Announcement::where('is_accepted', true)->count();
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }


   


}
