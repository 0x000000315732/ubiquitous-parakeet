<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail($id)
 * @method static create(array $validateData)
 */
class Tasks extends Model
{
    protected $fillable = ['title', 'description', 'completed'];
}
