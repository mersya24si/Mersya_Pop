<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use Faker\Factory;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CreatePelangganDummy extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        foreach (range(1, 1000) as $index) {
            DB::table('pelanggan')->insert([
                'first_name' => $faker->firstName,
                'last_name'  => $faker->lastName,
                'birthday'   => $faker->date('Y-m-d', '2005-12-31'),
                'gender'     => $faker->randomElement(['Male', 'Female', 'Other']),
                'email'      => $faker->unique()->safeEmail,
                'phone'      => $faker->phoneNumber,
            ]);
        }
    }

    // public function run()
    // {
    //     $faker = Faker::create('id_ID'); // Menggunakan lokal Indonesia untuk data yang lebih relevan

    //     $genderOptions = ['Male', 'Female'];

    //     // Buat 100 data dummy
    //     for ($i = 0; $i < 100; $i++) {
    //         $gender = $faker->randomElement($genderOptions);
    //         $firstName = $faker->firstName($gender);
    //         $lastName = $faker->lastName;

    //         DB::table('pelanggan')->insert([ // Ganti 'pelanggan' jika nama tabel berbeda
    //             'first_name' => $firstName,
    //             'last_name' => $lastName,
    //             'birthday' => $faker->dateTimeBetween('-40 years', '-18 years')->format('Y-m-d'),
    //             'gender' => $gender,
    //             // Pastikan email unik dan sesuai dengan nama
    //             'email' => strtolower($firstName . '.' . $lastName . $faker->unique()->randomNumber(3) . '@' . $faker->safeEmailDomain),
    //             // Kolom phone bisa NULL, jadi kita buat probabilitas 80% ada nomor
    //             'phone' => $faker->boolean(80) ? $faker->unique()->phoneNumber : NULL,
    //         ]);
    //     }
    // }
}
