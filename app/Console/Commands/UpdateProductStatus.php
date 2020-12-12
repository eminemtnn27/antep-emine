<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;
class UpdateProductStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:product-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'ürünlerin durumu günceller';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
      //işlemleri burada yapacağız
        $products=Product::all();
        $products->each(function($product){
          $product->update([
            'status'=>false
          ]);
        });
        

      /*  foreach($products as $product)
        {
          $product->update([
            'status'=>false
          ]);
        }*/
        return 0;
    }
}
