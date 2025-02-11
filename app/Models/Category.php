<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $name
 * @property string $inner_code
 *
 * @method static Category|null create(array $data)
 */
final class Category extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'inner_code'
    ];
}
