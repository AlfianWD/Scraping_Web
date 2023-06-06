<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Created By Alfian Wahyu -->

class ScrapingResult extends Model
{
    use HasFactory;

    protected $table = 'scraping_result';
    
    protected $fillable = ['title', 'author', 'date'];
}
