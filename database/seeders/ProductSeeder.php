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
    public function run()
    {
        //
         DB::table('products')->insert([
         	[
        	'name'=>'Oppo Moblile',
        	'price'=>'300',
        	'description'=>'A smart phone',
        	'category'=>'mobile',
        	'gallery'=>'https://images.samsung.com/is/image/samsung/assets/africa_pt/galaxy-s21/pcd/HOME_T_O_KV_Main_Animated_KV_720X1080.jpg'
            ],
            [
        	'name'=>'Panasonic Tv',
        	'price'=>'200',
        	'description'=>'A smart Tv',
        	'category'=>'Tv',
        	'gallery'=>'https://static.digit.in/default/514997f36523c8adf3cb55a2d5f552a58b5bbabb.jpeg?tr=w-1200'
            ],
            [
        	'name'=>'Sony Tv',
        	'price'=>'500',
        	'description'=>'A smart Tv',
        	'category'=>'Tv',
        	'gallery'=>'https://i1.wp.com/shanbd.com/wp-content/uploads/2020/12/SONY-Bravia-65-inch-X7500H-4K-ANDROID-VOICE-CONTROL-TV-Dhaka.jpg?fit=500%2C500&ssl=1'
            ],
            [
        	'name'=>'Lg Fridge',
        	'price'=>'200',
        	'description'=>'A fridge',
        	'category'=>'fridge',
        	'gallery'=>'https://www.birite.com.au/wp-content/uploads/Teco-TFF210WNTBM-210L-Top-Mount-White-Fridge-Main.jpg'
            ],





        ]);
    }
}
