<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReceiptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('receipts')->insert([
            'purchase-date' => '2019-08-16 09:27:32',
            'payment-method' => 'Visa',
            'discount-usd' => '7.77',
            'store-id' => '1'
        ]);
    }
}
