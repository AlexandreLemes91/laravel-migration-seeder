<?php

use Illuminate\Database\Seeder;
use\App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states= [
            0=>'Spain',
            1=>'France',
            2=>'Brazil'
        ];

        $cities= [
            'Spain'=>[
                'Barcelona',
                'Ibiza',
            ],
            'France'=>[
                'Paris',
                'Marseille'
            ],
            'Brazil'=>[
                'Rio de Janeiro',
                'Salvador'
            ]
        ];

        $hotels=[
            'Concorde',
            'Four Season',
            'Banaus',
            'Ibis',
        ];
        
        function price( $star ){
            if( $star < 4 ){
                return rand(40,100);
            }else{
                return rand(150,400);
            }
        };
        
        for( $i=0; $i < 10; $i++ ){
            $new_travel = new Travel();
            $state = $states[rand(0,2)];
            $star = rand(1,5);
            $price = price($star);
            

            $new_travel->state = $state;
            $new_travel->city = $cities[$state][rand(0,1)];
            $new_travel->hotel = $hotels[rand(0,3)];
            $new_travel->hotel_star = $star;
            $new_travel->beds = 2;
            $new_travel->price_night = $price;
            $new_travel->pension_complete = rand(0,1);

            $new_travel->save();
        }

    }
}
