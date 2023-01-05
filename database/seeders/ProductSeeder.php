<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        DB::table('products')->insert([
            [
                'name' => 'Yellow T-Shirt',
                'price' => 'Rp10.000',
                'image' => 'https://thumbs.dreamstime.com/b/print-172936053.jpg'
            ],
            [
                'name' => 'Red Jacket',
                'price' => 'Rp10.000',
                'image' => 'https://png.pngtree.com/png-vector/20210113/ourlarge/pngtree-mens-red-jacket-clip-art-png-image_2721933.jpg'
            ],
            [
                'name' => 'Brown T-Shirt',
                'price' => 'Rp10.000',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfRT6LExltKl1Hk6IPBbDmeM0Zfd-RKp78slEQutDCl9DDlaFGTrPCYhofXGax1suqI-c&usqp=CAU'
            ],
            [
                'name' => 'Blue Short',
                'price' => 'Rp10.000',
                'image' => 'https://media.istockphoto.com/id/905647402/vector/beach-summer-holidays.jpg?b=1&s=612x612&w=0&k=20&c=W-eQzSOnvzO6oOJo6HMjySB7m2dFPp8gF1fWmEjsaTY='
            ],
            [
                'name' => 'Maroon Hoodie',
                'price' => 'Rp10.000',
                'image' => 'https://www.pngitem.com/pimgs/m/262-2629514_maroon-hoodie-template-back-hd-png-download.png'
            ],
            [
                'name' => 'White T-Shirt',
                'price' => 'Rp10.000',
                'image' => 'https://media.istockphoto.com/id/1021952552/id/vektor/putih-kosong-pria-t-kemeja-template.jpg?b=1&s=170667a&w=0&k=20&c=opg54CulceQqS9Xk6K0cO18ImpGFNCrzHZqaDpvQX2g='
            ],
            [
                'name' => 'Black Short',
                'price' => 'Rp10.000',
                'image' => 'https://simg.nicepng.com/png/small/184-1845425_cloth-dressing-fashion-men-short-pants-comments-short.png'
            ],
            [
                'name' => 'Purple Skirt',
                'price' => 'Rp10.000',
                'image' => 'https://static.vecteezy.com/system/resources/previews/013/750/641/original/very-short-purple-skirt-illustration-on-white-background-free-vector.jpg'
            ]
        ]);
    }
}
