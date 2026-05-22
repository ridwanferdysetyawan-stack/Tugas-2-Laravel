<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name',
        'tasks',
        'category',
        'date',
        'checklist'
    ];
}