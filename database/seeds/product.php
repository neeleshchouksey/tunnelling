<?php

use Illuminate\Database\Seeder;

class product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Front cover',
            'image_name' => 'front-cover.png',
            'dimension' => '123mm x 456mm',
            'price'=>'5750',
            'firstyear'=>'2018',
            'secondyear'=>'2019',
            'thirdyear'=>'2020',
            'tag'=>'Issue',
            'quantity'=>'0'

        ],
        [
            'name' => 'Back cover',
            'image_name' => 'back-cover.png',
            'dimension' => '123mm x 456mm',
            'price'=>'5250',
            'firstyear'=>'2018',
            'secondyear'=>'2019',
            'thirdyear'=>'2020',
            'tag'=>'Issue',
            'quantity'=>'0'

        ],
        [
            'name' => 'double page',
            'image_name' => 'double-cover.png',
            'dimension' => '123mm x 456mm',
            'price'=>'5250',
            'firstyear'=>'2018',
            'secondyear'=>'2019',
            'thirdyear'=>'2020',
            'tag'=>'Issue',
            'quantity'=>'1'

        ],
        [
            'name' => 'single page',
            'image_name' => 'single-page.png',
            'dimension' => '123mm x 456mm',
            'price'=>'3950',
            'firstyear'=>'2018',
            'secondyear'=>'2019',
            'thirdyear'=>'2020',
            'tag'=>'Issue',
            'quantity'=>'1'

        ],
        [
            'name' => 'half page',
            'image_name' => 'half-page.png',
            'dimension' => '123mm x 456mm',
            'price'=>'2750',
            'firstyear'=>'2018',
            'secondyear'=>'2019',
            'thirdyear'=>'2020',
            'tag'=>'Issue',
            'quantity'=>'1'

        ]
        );

       
    }
}
