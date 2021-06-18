<?php

use App\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1, 20) as $range) {
            Item::create([
                'name' => 'Foo ' . $range,
                'description' => 'Foo Description' . $range,
                'price' => $range * 10,
            ]);
        }
    }
}
