<?php

namespace Database\Seeders;
use App\Models\Varieties;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VarientSeeder extends Seeder
{
    protected $varieties = [
        [
            'color' => 'black',
            'size' => '8.4',
            'Quantity' => '20000 units are in the market',
            'p_id'=>'2'
        ],
        [
            'color' => 'white',
            'size' => '8.4',
            'Quantity' => '20000 units are in the market',
            'p_id'=>'3'
        ],
        [
            'color' => 'blue',
            'size' => '8.4',
            'Quantity' => '20000 units are in the market',
            'p_id'=>'4'
        ],
        [
            'color' => 'green',
            'size' => '6.4',
            'Quantity' => '20000 units are in the market',
            'p_id'=>'5'
        ],
     
     
     
     
    ];
    public function run(): void
    {
        
        foreach($this->varieties as $varieties )

        {varieties::create($varieties); }

    }
}
