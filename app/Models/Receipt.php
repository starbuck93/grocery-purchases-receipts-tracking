<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
        'purchase_date',
        'payment_method',
        'discount_usd',
        'store_id'
    ];

    /**
     * Get the store for the receipt.
     */
    public function store()
    {
        return $this->belongsTo('App\Models\Store'); //changed from hasOne
    }

    /**
     * Get the groceries for the receipt.
     */
    public function groceries()
    {
        return $this->hasMany('App\Models\Grocery'); //fk receipt_id
    }

    /**
     * Get the receipt's items
     * raw sql:
     * * select i.name, g.price from groceries g
     * * LEFT OUTER JOIN receipts r 
     * *    on g.receipt_id = r.id
     * * LEFT OUTER JOIN items i
     * *    on g.item_id = i.id
     * * where r.id = 1
     */
    public function items()
    {
        return $this->belongsToMany('App\Models\Item','groceries')/* ->using('App\Models\Grocery') */;
        // return $this->hasManyThrough(
        //     'App\Models\Item',
        //     'App\Models\Grocery',
        //     'item_id', // Foreign key on Grocery table...
        //     'id', // Foreign key on Item table...does not exist
        //     'id', // Local key on Item table... 
        //     'id' // Local key on Grocery table...
        // );
        // the following does not work because Error "LogicException with message 'App/Models/Receipt::items must return a relationship instance.'"
        // return DB::table('groceries')
        //             ->leftJoin('receipts','groceries.receipt_id','=','receipts.id')
        //             ->leftJoin('items','groceries.item_id','=','items.id')
        //             ->where('receipts.id',$this->id);
    }
    // }

    
}
