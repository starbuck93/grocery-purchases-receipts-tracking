<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'items';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'category',
    ];

    /**
     * Get the groceries for the item.
     */
    public function grocery()
    {
        return $this->hasMany('App\Models\Grocery');
    }

    /**
     * Get the category that owns the item.
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }


}
