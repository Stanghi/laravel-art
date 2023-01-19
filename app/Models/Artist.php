<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug',];
    public static function generateSlug($string){
        $slug = Str::slug($string, '-');
        $original_slug = $slug;
        $c = 1;
        $exist = Artist::where('slug', $slug)->first();
        while($exist){
            $slug = $original_slug . '-' . $c;
            $exist = Artist::where('slug', $slug)->first();
            $c++;
        }
        return $slug;
    }

}
