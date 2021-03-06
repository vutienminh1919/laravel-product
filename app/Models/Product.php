<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $data)
 * @method static findOrFail($id)
 * @method static where(string $string, string $string1, $id)
 */
class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','price','image'];
}
