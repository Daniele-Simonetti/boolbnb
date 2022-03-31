<?php

use Illuminate\Database\Seeder;
use App\Apartment;
use App\User;
use Illuminate\Support\Str;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $apartments = [
            [
                'title' => 'Camera singola in appartamento nel centro di Taranto',
                'price' => 20,
                'rooms' => 2,
                'beds' => 3,
                'bathrooms' => 1,
                'square' => 40,
                'address' => 'Via Cesare Battisti 4, 74121 taranto TA, Italia',
                'latitude' => '40.4657082',
                'longitude' => '17.277969',
                'image' => 'uploads/camera_1.jpg',
                'visible' => 1,
            ],
            [
                'title' => 'Stanza in Appartamento Stazione',
                'price' => 30,
                'rooms' => 1,
                'beds' => 2,
                'bathrooms' => 1,
                'square' => 30,
                'address' => 'Taranto, Porto Mercantile, Via Napoli, 74123 taranto TA, Italia',
                'latitude' => '40.4811812',
                'longitude' => '17.2240546',
                'image' => 'uploads/camera_2.jpg',
                'visible' => 1,
            ],
            [
                'title' => 'Suite Liberty',
                'price' => 45,
                'rooms' => 2,
                'beds' => 3,
                'bathrooms' => 1,
                'square' => 65,
                'address' => 'Viale Magna Grecia, 74121 taranto TA, Italia',
                'latitude' => '40.4515739',
                'longitude' => '17.2586717',
                'image' => 'uploads/camera_3.jpg',
                'visible' => 1,
            ],
            [
                'title' => 'Camera centro Taranto',
                'price' => 50,
                'rooms' => 4,
                'beds' => 2,
                'bathrooms' => 2,
                'square' => 80,
                'address' => 'Via Pitagora, 74100 taranto TA, Italia',
                'latitude' => '40.4730853',
                'longitude' => '17.2438253',
                'image' => 'uploads/camera_4.jpg',
                'visible' => 1,
            ],
            [
                'title' => 'B&B Suite Santa Teresa',
                'price' => 40,
                'rooms' => 2,
                'beds' => 2,
                'bathrooms' => 1,
                'square' => 65,
                'address' => 'Corso Vittorio Emanuele II, 74123 taranto TA, Italia',
                'latitude' => '40.47373931216487',
                'longitude' => '17.23144763298916',
                'image' => 'uploads/camera_5.jpg',
                'visible' => 1,
            ],
            [
                'title' => 'Mini Appartamento attico Santa Chiara',
                'price' => 49,
                'rooms' => 5,
                'beds' => 6,
                'bathrooms' => 2,
                'square' => 120,
                'address' => 'Viale delle Murge, 70125 Bari BA, Italia',
                'latitude' => '41.11100053451946',
                'longitude' => '16.85445589639005',
                'image' => 'uploads/camera_6.jpg',
                'visible' => 1,
            ],
            [
                'title' => 'LILLA - Appartamento centrale e confortevole',
                'price' => 29,
                'rooms' => 1,
                'beds' => 1,
                'bathrooms' => 1,
                'square' => 30,
                'address' => 'Via Somalia, 70121 Bari BA, Italia',
                'latitude' => '41.12012896905523',
                'longitude' => '16.882730732499766',
                'image' => 'uploads/camera_7.jpg',
                'visible' => 1,
            ],
            [
                'title' => 'Casetta Annina - Annina Cottage',
                'price' => 59,
                'rooms' => 2,
                'beds' => 2,
                'bathrooms' => 1,
                'square' => 70,
                'address' => 'Via Raffaele Viviani, 70132 Bari BA, Italia',
                'latitude' => '41.138498385885185',
                'longitude' => '16.81929810715667',
                'image' => 'uploads/camera_8.jpg',
                'visible' => 1,
            ],
            [
                'title' => 'Amendola - Scardicchio Maisons',
                'price' => 119,
                'rooms' => 3,
                'beds' => 4,
                'bathrooms' => 2,
                'square' => 160,
                'address' => 'Via Tenente Cesare Suglia, 74126 Bari BA, Italia',
                'latitude' => '41.10203622540266',
                'longitude' => '16.917565347942855',
                'image' => 'uploads/camera_9.jpg',
                'visible' => 1,
            ],
            [
                'title' => 'LOFT ALBICOCCA',
                'price' => 29,
                'rooms' => 1,
                'beds' => 1,
                'bathrooms' => 1,
                'square' => 60,
                'address' => 'Via Virgilio, 70019 Triggiano BA, Italia',
                'latitude' => '41.06068893163646',
                'longitude' => '16.923002839056636',
                'image' => 'uploads/camera_10.jpg',
                'visible' => 1,
            ],
            [
                'title' => 'Garda Paradise - Apt 1 camera da letto con balcone',
                'price' => 90,
                'rooms' => 1,
                'beds' => 2,
                'bathrooms' => 1,
                'square' => 35,
                'address' => 'Via Florida, 38066 Riva del Garda TN, Italia',
                'latitude' => '45.886051',
                'longitude' => '10.840772',
                'image' => 'uploads/camera_11.jpg',
                'visible' => 1,
            ],
            [
                'title' => 'Villa Barovier a pochi passi dal centro e dal lago',
                'price' => 156,
                'rooms' => 1,
                'beds' => 2,
                'bathrooms' => 1,
                'square' => 50,
                'address' => 'Piazza Tre Novembre, 38066 Riva del Garda TN, Italia',
                'latitude' => '45.885142',
                'longitude' => '10.839496',
                'image' => 'uploads/camera_12.jpg',
                'visible' => 1,
            ],
            [
                'title' => 'Laura Garda Lodge - Tranquillità con vista',
                'price' => 110,
                'rooms' => 2,
                'beds' => 6,
                'bathrooms' => 2,
                'square' => 70,
                'address' => 'Via Marocco, 38066 Riva del Garda TN, Italia',
                'latitude' => '45.885362',
                'longitude' => '10.838709',
                'image' => 'uploads/camera_13.jpg',
                'visible' => 1,
            ],
            [
                'title' => 'Casa Selì: Elsa appartamento a Biacesa di Ledro',
                'price' => 86,
                'rooms' => 2,
                'beds' => 4,
                'bathrooms' => 1,
                'square' => 55,
                'address' => 'Via Giuseppe Cipelli, 38066 Biacesa di Ledro TN, Italia',
                'latitude' => '45.865736',
                'longitude' => '10.806008',
                'image' => 'uploads/camera_14.jpg',
                'visible' => 1,
            ],
            [
                'title' => 'Agritur Maso Tobel Riva del Garda',
                'price' => 99,
                'rooms' => 3,
                'beds' => 2,
                'bathrooms' => 9,
                'square' => 80,
                'address' => 'Via Domenico Degasperi, 44, 38066 Riva del Garda TN, Italia',
                'latitude' => '45.911488',
                'longitude' => '10.812156',
                'image' => 'uploads/camera_15.jpg',
                'visible' => 1,
            ],
            [
                'title' => "Accogliente agriturismo vicino all'aeroporto con parcheggio gratuito",
                'price' => 35,
                'rooms' => 1,
                'beds' => 1,
                'bathrooms' => 1,
                'square' => 30,
                'address' => 'Via Lazzaretto, 24068 Seriate BG, Italia',
                'latitude' => '45.6734127',
                'longitude' => '9.731943',
                'image' => 'uploads/camera_16.jpg',
                'visible' => 1,
            ],
            [
                'title' => "Grazioso appartamento",
                'price' => 41,
                'rooms' => 2,
                'beds' => 3,
                'bathrooms' => 1,
                'square' => 55,
                'address' => 'Ciclovia delle Rogge, 224022 Alzano Lombardo BG',
                'latitude' => '45.73681',
                'longitude' => '9.72638',
                'image' => 'uploads/camera_17.jpg',
                'visible' => 1,
            ],
            [
                'title' => "Casa vacanze 'La Corte di Giada'",
                'price' => 50,
                'rooms' => 2,
                'beds' => 4,
                'bathrooms' => 2,
                'square' => 60,
                'address' => 'Via Borgo Santa Caterina, 724124 Bergamo BG',
                'latitude' => '45.7050425',
                'longitude' => '9.6811173',
                'image' => 'uploads/camera_18.jpg',
                'visible' => 1,
            ],
            [
                'title' => "Superior in borgo",
                'price' => 122,
                'rooms' => 1,
                'beds' => 2,
                'bathrooms' => 2,
                'square' => 40,
                'address' => 'Via dei Celestini, 1024124 Bergamo BG',
                'latitude' => '45.69601',
                'longitude' => '9.66721',
                'image' => 'uploads/camera_19.jpg',
                'visible' => 1,
            ],
            [
                'title' => "Home sweet home, per sentirsi a casa",
                'price' => 80,
                'rooms' => 1,
                'beds' => 2,
                'bathrooms' => 1,
                'square' => 42,
                'address' => 'Via Borgo Palazzo, 13024125 Bergamo BG',
                'latitude' => '45.6955012',
                'longitude' => '9.6850876',
                'image' => 'uploads/camera_20.jpg',
                'visible' => 0,
            ],
        ];

        foreach ($apartments as $apartment) {
            $newApartment = new Apartment();
            $newApartment->user_id = User::inRandomOrder()->first()->id;
            $newApartment->fill($apartment);
            $newApartment->slug =  Str::slug($newApartment->title . '-');
            $newApartment->save();
        }
    }
}