<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Faker\Factory as Faker;

class TicketSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $airlines = [
            ['airline' => 'Air Asia', "img" => "https://ik.imagekit.io/tvlk/image/imageResource/2022/09/05/1662367239331-9fca504de7049b772dd2386631705024.png?tr=q-75"],
            ['airline' => 'Batik Air', "img" => "https://ik.imagekit.io/tvlk/image/imageResource/2019/12/13/1576208649600-12471f9b7ffa159361f7bbbfb63065ee.png?tr=q-75"],
            ['airline' => 'Garuda Indonesia', "img" => "https://ik.imagekit.io/tvlk/image/imageResource/2019/12/12/1576140134467-906ded3638e9045d664adc40caa8ec47.png?tr=q-75"],
            ['airline' => 'China Airlines', "img" => "https://ik.imagekit.io/tvlk/image/imageResource/2019/12/12/1576136814235-2d2f0c25d8d6719cf7fdde9e131d6a85.png?tr=q-75"],
            ['airline' => 'Firefly', "img" => "https://ik.imagekit.io/tvlk/image/imageResource/2024/05/10/1715330811043-5dd4f97f8d16abde2bca84437602a261.png?tr=q-75"],
            ['airline' => 'Jetstar Asia Airways', "img" => "https://ik.imagekit.io/tvlk/image/imageResource/2019/09/16/1568609975288-7dfcfe6ab642b6aea735912ed3be1c3a.png?tr=q-75"],
            ['airline' => 'KLM', "img" => "https://ik.imagekit.io/tvlk/image/imageResource/2019/12/12/1576141480566-8e51df9bcecd7a682b8c0fb0341a9c0e.png?tr=q-75"],
            ['airline' => 'Lion Air', "img" => "https://ik.imagekit.io/tvlk/image/imageResource/2015/12/17/1450349861201-09ec8f298222a73d66e8e96aa3b918f0.png?tr=q-75"],
            ['airline' => 'Malaysia Airlines', "img" => "https://ik.imagekit.io/tvlk/image/imageResource/2022/08/10/1660130779233-6df2f0b241a6fcb657ff57cae03943e1.png?tr=q-75"],
            ['airline' => 'Philippine Airlines', "img" => "https://ik.imagekit.io/tvlk/image/imageResource/2019/12/12/1576141759448-50f623d879fe8228939087c95a773409.png?tr=q-75"],
            ['airline' => 'Scoot', "img" => "https://ik.imagekit.io/tvlk/image/imageResource/2017/07/27/1501138553075-1329db65f38802a050f34d38a3216235.png?tr=q-75"],
            ['airline' => 'Singapore Airlines', "img" => "https://ik.imagekit.io/tvlk/image/imageResource/2015/12/17/1450350610403-aefa15ce3b8e59de9882926d198eb27f.png?tr=q-75"],
            ['airline' => 'Super Air Jet', "img" => "https://ik.imagekit.io/tvlk/image/imageResource/2021/07/12/1626063527483-f24d3eae611b51022ab0d1fc1457c820.png?tr=q-75"],
            ['airline' => 'TransNusa', "img" => "https://ik.imagekit.io/tvlk/image/imageResource/2022/05/05/1651724293186-ee122b2d6b66f97e7262b4e2db977e1b.png?tr=q-75"],
            ['airline' => 'Vietnam Airlines', "img" => "https://ik.imagekit.io/tvlk/image/imageResource/2023/01/13/1673603664183-e53540c1a998ad11eab640ea454ead69.png?tr=q-75"],
        ];

        $cities = [
            ['city' => 'Jakarta', 'code' => 'CGK', 'country' => 'Indonesia'],
            ['city' => 'Kuala Lumpur', 'code' => 'KUL', 'country' => 'Malaysia'],
            ['city' => 'Singapore', 'code' => 'SIN', 'country' => 'Singapore'],
            ['city' => 'Bangkok', 'code' => 'BKK', 'country' => 'Thailand'],
            ['city' => 'Manila', 'code' => 'MNL', 'country' => 'Philippines'],
            ['city' => 'Hanoi', 'code' => 'HAN', 'country' => 'Vietnam'],
            ['city' => 'Ho Chi Minh City', 'code' => 'SGN', 'country' => 'Vietnam'],
            ['city' => 'Phnom Penh', 'code' => 'PNH', 'country' => 'Cambodia'],
            ['city' => 'Yangon', 'code' => 'RGN', 'country' => 'Myanmar'],
            ['city' => 'Bandar Seri Begawan', 'code' => 'BWN', 'country' => 'Brunei']
        ];

        for ($i = 0; $i < 10; $i++) {
            $chosenAirline = $faker->randomElement($airlines);
            $departure = $faker->randomElement($cities);
            $arrival = $faker->randomElement(array_filter($cities, fn($city) => $city !== $departure));

            DB::table('tickets')->insert([
                'airline_name' => $chosenAirline['airline'],
                'flight_code' => 'AR' . $faker->unique()->numerify('####'),
                'flight_type' => $faker->randomElement(['Economy', 'Business', 'First Class']),
                'baggage' => $faker->numberBetween(15, 40) . 'kg',
                'price' => $faker->randomFloat(2, 50, 1000),
                'departure_time' => $departureTime = $faker->dateTimeBetween('now', '+1 week'),
                'arrival_time' => Carbon::instance($departureTime)->addHours($faker->numberBetween(1, 12)),
                'available_seats' => json_encode($faker->randomElements(
                    ['1A', '1B', '1C', '1D', '1E', '1F', '2A', '2B', '2C', '2D', '2E', '2F'],
                    $faker->numberBetween(1, 6)
                )),
                'departure_city' => $departure['city'],
                'departure_city_code' => $departure['code'],
                'departure_country' => $departure['country'],
                'arrival_city' => $arrival['city'],
                'arrival_city_code' => $arrival['code'],
                'arrival_country' => $arrival['country'],
                'img_link' => $chosenAirline['img'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}