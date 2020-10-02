<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grocery extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'groceries';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'item_id',
        'price',
        'qty',
        'receipt_id'
    ];

    /**
     * Get the receipt for the grocery.
     */
    public function receipt()
    {
        return $this->belongsTo('App\Models\Receipt');
    }

    /**
     * Get the item for the grocery.
     * 
     * I know this sounds weird to say in English. The "groceries" table isn't worded correctly, I think. Or I have too many tables defineed and the "groceries" table is not necessary
     * I think "Groceries" table = "Line Items" table to put it another way
     * 
     */
    public function item()
    {
        return $this->belongsTo('App\Models\Item'); //should this be belongsTo or hasOne?
    }

}
