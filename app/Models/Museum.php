<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Museum extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'nation'
    ];

    public static function generateSlug($string)
    {
        $slug = Str::slug($string, '-');
        $original_slug = $slug;
        $c = 1;
        $exists = Museum::where('slug', $slug)->first();
        while ($exists) {
            $slug = $original_slug . '-' . $c;
            $exists = Museum::where('slug', $slug)->first();
            $c++;
        }
        return $slug;
    }
}
