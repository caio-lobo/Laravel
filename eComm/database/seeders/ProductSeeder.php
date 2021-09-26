<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
        //

    public function run()
    {
        
        DB::table("products")->insert([
            
            [
                'name'=>'tv1',
                'price'=>"200",
                'category'=>'tv',
                'description'=>"tv1",
                'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKFNT5PAi0LSHFoRyz7JlZY4jUqJdyTTDBawi8cH6in276JlOq3-BMC8jnKtOWyVIORyA&usqp=CAU',
                
                
            ],
            [
                'name'=>'tv2',
                'price'=>"300",
                'category'=>'tv',
                'description'=>"tv2",
                'gallery'=>'https://www.lg.com/br/images/tv/37lv3500/gallery/medium03.jpg',
                
                
            ],
            [
                'name'=>'tv3',
                'price'=>"400",
                'category'=>'tv',
                'description'=>"tv3",
                'gallery'=>'https://http2.mlstatic.com/D_NQ_NP_959973-MLB25643867264_062017-O.jpg',
                
            ],
            [
                'name'=>'tv4',
                'price'=>"300",
                'category'=>'tv',
                'description'=>"tv4",
                'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsVCs_zuqhxSkZ1bIzBbrnt77DepNwgQwmT2XENPedBPo07s4QiNLsLgsiP1MpGGXcX2o&usqp=CAU',
                
            ],
            [
                'name'=>'tv5',
                'price'=>"400",
                'category'=>'tv',
                'description'=>"tv5",
                'gallery'=>'http://philco.vteximg.com.br/arquivos/ids/167945/TV.jpg?v=636752008805100000',
                
            ],
            
            
            
            
        ]);
    }
}
