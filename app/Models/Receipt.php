<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'receipts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'purchase-date',
        'payment-method',
        'discount-usd',
        'store-id'
    ];

    /**
     * Get the store for the receipt.
     */
    public function store()
    {
        return $this->hasOne('App\Models\Store');
    }

    /**
     * Get the groceries for the receipt.
     */
    public function groceries()
    {
        return $this->hasMany('App\Models\Grocery');
    }

    /**
     * Get the receipt's items
     */
    public function items()
    {
        return $this->hasManyThrough('App\Models\groceries', 'App\Models\items');
    }

    
}
