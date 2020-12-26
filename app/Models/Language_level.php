<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Language_level extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'description', 'numericValue'];

    public static function findByDescription($description)
    {
        return DB::table('language_levels')->where('description', '=', $description)->first()->id;
    }
}
