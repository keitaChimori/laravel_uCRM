<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\Item;
use App\Models\Purchase;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ItemSeeder::class
        ]);

        // Customersテーブルにデータ100件
        Customer::factory(100)->create();


        // Purchaseテーブルにデータ100件追加
        $items = Item::all();
        Purchase::factory(100)->create()->each(function(Purchase $purchase) use ($items){
            $purchase->items()->attach(
                // purchase_idカラムに挿入するデータ
                $items->random(random_int(1,3))->pluck('id')->toArray(), 
                // quantityカラムに挿入するデータ
                ['quantity' => random_int(1,3)] ,
            );
        });


    }
}
