<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static function allData(){

        return [
            0=>[
                'id'=>1,
                'name'=>'Smart Watch',
                'price'=>250,
                'category'=>'Electronics',
                'brand'=>'Casio',
                'image'=>asset('/img/w.png'),
                'description'=>'Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller architectural pattern and based on Symfony'
            ],
            1=>[
                'id'=>2,
                'name'=>'Sniker',
                'price'=>250,
                'category'=>'Shoe',
                'brand'=>'Nike',
                'image'=>asset('/img/shoes.jpg'),
                'description'=>'Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller architectural pattern and based on Symfony'
            ],
            2=>[
                'id'=>3,
                'name'=>'Mobile',
                'price'=>300,
                'category'=>'Electronics',
                'brand'=>'Nokia',
                'image'=>asset('/img/m1.jpg'),
                'description'=>'Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller architectural pattern and based on Symfony'
            ],
            3=>[
                'id'=>4,
                'name'=>'Trouser',
                'price'=>50,
                'category'=>'Cloth',
                'brand'=>'M&M',
                'image'=>asset('/img/trouser.jpg'),
                'description'=>'Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller architectural pattern and based on Symfony'
            ],
            4=>[
                'id'=>5,
                'name'=>'Yamaha R15 V3',
                'price'=>150,
                'category'=>'Vehicle',
                'brand'=>'Yamaha',
                'image'=>asset('/img/b1.jpg'),
                'description'=>'Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller architectural pattern and based on Symfony'
            ],
        ];

    }
    public static function findDetail($id){
        return array_filter(Product::allData(),function($element)use($id){
            if($element['id'] == $id){
                return $element;
            }
        });
    }
}
