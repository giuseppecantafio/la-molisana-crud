<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProducsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {   $prodotti = config('pasta');
        foreach($prodotti as $prodotto){
            $newProduct = new Product();
            $newProduct->title = $prodotto['titolo'];
            $newProduct->cooking_time = $prodotto['cottura'];
            $newProduct->save();
        }
        
    }
}
