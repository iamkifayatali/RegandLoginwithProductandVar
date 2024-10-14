<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductsSeeder extends Seeder
{
    protected $Products = [
        [
            'name' => 'iphone',
            'price' => '200000',
            'detail' => 'created by someone from Usa now seling all over the world'
        ],
        [
            'name' => 'samsung',
            'price' => '150000',
            'detail' => 'you can zoom all the way to moon'
        ],
        [
            'name' => 'oneplus',
            'price' => '12300',
            'detail' => 'chinnes compny but popular all over the world'
        ]
    ];
    public function run(): void
    {
        foreach($this->Products as $Products )
        {Products::create($Products);
    {
       
    }
}
}}