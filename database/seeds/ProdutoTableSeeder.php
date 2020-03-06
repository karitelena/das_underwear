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
            'cod' => '202011007551',
            'name' => 'TSHIRT_SPANDEX_WHITE',
            'color' => 'white',
            'size' => 'M',
            'price' => '129,90',
            'active' => 1,
            'description' => '90% Poliamida/10% Elastano',
            'image' => 'TSHIRT_SPANDEX_WHITE_FRENTE.png',
            'image_1' => 'TSHIRT_SPANDEX_WHITE_COSTAS.png',
            'image_2' => 'TSHIRT_SPANDEX_WHITE_LOOKBOOK1.png',
            'category' => 'top'
        ]);

        Produto::create([
            'cod' => '202013006d31',
            'name' => 'BODY_LIGHT_ORCHID',
            'color' => 'medium orchid',
            'size' => 'M',
            'price' => '119,90',
            'active' => 1,
            'description' => '90% Poliamida/10% Elastano . forro:78% Modal/14% Seda/8% Elastano',
            'image' => 'BODY_LIGHT_ORCHID_FRENTE.png',
            'image_1' => 'BODY_LIGHT_ORCHID_COSTAS.png',
            'image_2' => 'BODY_LIGHT_ORCHID_LOOKBOOK1.png',
            'image_3' => 'BODY_LIGHT_ORCHID_LOOKBOOK2.png',
            'category' => 'suit'
        ]);

        Produto::create([
            'cod' => '202011004a11',
            'name' => 'SQUARE_TOP_CHINA_PINK',
            'color' => 'china pink',
            'size' => 'M',
            'price' => '119,90',
            'active' => 1,
            'description' => '90% Poliamida/10% Elastano . forro:78% Modal/14% Seda/8% Elastano',
            'image' => 'SQUARE_TOP_CHINA_PINK_FRENTE.png',
            'image_1' => 'SQUARE_TOP_CHINA_PINK_COSTAS.png',
            'image_2' => 'SQUARE_TOP_CHINA_PINK_LOOKBOOK1.png',
            'category' => 'top'
        ]);

        Produto::create([
            'cod' => '202011004001',
            'name' => 'SQUARE_TOP_BLACK',
            'color' => 'black',
            'size' => 'M',
            'price' => '119,90',
            'active' => 1,
            'description' => '90% Poliamida/10% Elastano . forro:78% Modal/14% Seda/8% Elastano',
            'image' => 'SQUARE_TOP_BLACK_FRENTE.png',
            'image_1' => 'SQUARE_TOP_BLACK_COSTAS.png',
            'image_2' => 'SQUARE_TOP_BLACK_LOOKBOOK1.png',
            'category' => 'top'
        ]);

        Produto::create([
            'cod' => '202011005be1',
            'name' => 'SWIMMER_TOP_OCEAN_BLUE',
            'color' => 'ocean blue',
            'size' => 'M',
            'price' => '79,90',
            'active' => 1,
            'description' => '90% Poliamida/10% Elastano . forro:100% Poliamida',
            'image' => 'SWIMMER_TOP_OCEAN_BLUE_FRENTE.png',
            'image_1' => 'SWIMMER_TOP_OCEAN_BLUE_COSTAS.png',
            'image_2' => 'SWIMMER_TOP_OCEAN_BLUE_LOOKBOOK1.png',
            'category' => 'top'
        ]);

        Produto::create([
            'cod' => '202011005001',
            'name' => 'SWIMMER_TOP_BLACK',
            'color' => 'black',
            'size' => 'M',
            'price' => '79,90',
            'active' => 1,
            'description' => '90% Poliamida/10% Elastano . forro:100% Poliamida',
            'image' => 'SWIMMER_TOP_BLACK_FRENTE.png',
            'image_1' => 'SWIMMER_TOP_BLACK_COSTAS.png',
            'image_2' => 'SWIMMER_TOP_BLACK_LOOKBOOK1.png',
            'category' => 'top'
        ]);

        Produto::create([
            'cod' => '202012001001',
            'name' => 'CLASSIC_LIGHT_BLACK',
            'color' => 'black',
            'size' => 'M',
            'price' => '59,90',
            'active' => 1,
            'description' => '90% Poliamida Nylon 6.6/10% Elastano . forro:78% Modal/14% Seda/8% Elastano',
            'image' => 'CLASSIC_LIGHT_BLACK_FRENTE.png',
            'image_1' => 'CLASSIC_LIGHT_BLACK_COSTAS.png',
            'image_2' => 'CLASSIC_LIGHT_BLACK_LOOKBOOK1.png',
            'image_3' => 'CLASSIC_LIGHT_BLACK_LOOKBOOK2.png',
            'category' => 'bottom'
        ]);

        Produto::create([
            'cod' => '202012002001',
            'name' => 'SLIP_LIGHT_BLACK',
            'color' => 'black',
            'size' => 'M',
            'price' => '59,90',
            'active' => 1,
            'description' => '90% Poliamida Nylon 6.6/10% Elastano . forro:78% Modal/14% Seda/8% Elastano',
            'image' => 'SLIP_LIGHT_BLACK_FRENTE.png',
            'image_1' => 'SLIP_LIGHT_BLACK_COSTAS.png',
            'image_2' => 'SLIP_LIGHT_BLACK_LOOKBOOK1.png',
            'category' => 'bottom'
        ]);

        Produto::create([
            'cod' => '202012003001',
            'name' => 'TRUNKS_LIGHT_BLACK',
            'color' => 'black',
            'size' => 'M',
            'price' => '59,90',
            'active' => 1,
            'description' => '90% Poliamida Nylon 6.6/10% Elastano . forro:78% Modal/14% Seda/8% Elastano',
            'image' => 'TRUNKS_LIGHT_BLACK_FRENTE.png',
            'image_1' => 'TRUNKS_LIGHT_BLACK_COSTAS.png',
            'image_2' => 'TRUNKS_LIGHT_BLACK_LOOKBOOK1.png',
            'category' => 'bottom'
        ]);

        Produto::create([
            'cod' => '202012008001',
            'name' => 'GLOVES_B/W_FRENTE1',
            'color' => 'black/white',
            'size' => 'M',
            'price' => '49,90',
            'active' => 1,
            'description' => '88% Poliamida/12% Elastano',
            'image' => 'GLOVES_B:W_FRENTE1.png',
            'image_1' => 'GLOVES_B:W_COSTAS1.png',
            'image_2' => 'GLOVES_B:W_FRENTE2.png',
            'image_3' => 'GLOVES_B:W_COSTAS2.png',
            'category' => 'acessories'
        ]);

        Produto::create([
            'cod' => '202012009be1',
            'name' => 'PAD_OCEAN_BLUE',
            'color' => 'ocean blue',
            'size' => 'M',
            'price' => '39,90',
            'active' => 1,
            'description' => '90% Poliamida Nylon 6.6/10% Elastano',
            'image' => 'PAD_OCEAN_BLUE_FRENTE_COSTAS.png',
            'image_1' => 'PAD_OCEAN_BLUE_LOOKBOOK1.png',
            'image_2' => 'PAD_OCEAN_BLUE_LOOKBOOK2.png',
            'category' => 'acessories'
        ]);
    }
}
