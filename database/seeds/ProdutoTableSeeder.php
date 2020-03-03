<?php

use Illuminate\Database\Seeder;
use App\Models\Painel\Produto;

class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produto::create([
            'cod' => '202012002001',
            'name' => 'DAS SLIP LIGHT BLACK',
            'color' => 'black',
            'size' => 'M',
            'price' => '59,90',
            'active' => 1,
            'description' => 'Composição
                            90% Poliamida 6.6 Nylon
                            10% Elastano
                            Forro: 78 Modal
                            14% Seda
                            8% Elastano',
            'category' => 'bottom'
        ]);
    }
}
