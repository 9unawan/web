<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $fillable = [
        "favicon",
        "web_name",
        "logo",
        "map",
        "article_category",
        "latest_article",
        "contact",
    ];
}
