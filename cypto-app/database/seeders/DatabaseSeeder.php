<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //user
        DB::table('users')->insert([
            'name'     => "admin",
            'email'    => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name'     => "customer001",
            'email'    => 'customer001@gmail.com',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name'     => "customer002",
            'email'    => 'customer002@gmail.com',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name'     => "customer003",
            'email'    => 'customer003@gmail.com',
            'password' => Hash::make('password'),
        ]);

        //currrency
        DB::table('currencies')->insert([
            'currency_name' => "THB",
            'type'          => 'Fiat',
        ]);
        DB::table('currencies')->insert([
            'currency_name' => "USD",
            'type'          => 'Fiat',
        ]);
        DB::table('currencies')->insert([
            'currency_name' => "BTC",
            'type'          => 'Cryptocurrencies',
        ]);
        DB::table('currencies')->insert([
            'currency_name' => "ETH",
            'type'          => 'Cryptocurrencies',
        ]);
        DB::table('currencies')->insert([
            'currency_name' => "XRP",
            'type'          => 'Cryptocurrencies',
        ]);
        DB::table('currencies')->insert([
            'currency_name' => "DOGE",
            'type'          => 'Cryptocurrencies',
        ]);

        //storages
        DB::table('storages')->insert([
            'currency_id'     => 3,
            'currency_serial' => '1s5d51gw91g62rg1a69rg11hea651heherjkev',
        ]);
        DB::table('storages')->insert([
            'currency_id'     => 4,
            'currency_serial' => '1s5d51gw91g62rg1a69rg11hea651hehasd1h',
        ]);
        DB::table('storages')->insert([
            'currency_id'     => 5,
            'currency_serial' => '1s5d51gw91g62jkofngperi9o0g56156651he',
        ]);
        DB::table('storages')->insert([
            'currency_id'     => 6,
            'currency_serial' => 'mokdf1456odf145rtg591g65hrt5hs2h6s6fg',
        ]);

        //wallets
        DB::table('wallets')->insert([
            'currency_id'     => 3,
            'user_id'         => 1,
            'total'           => 1
        ]);
        DB::table('wallets')->insert([
            'currency_id'     => 4,
            'user_id'         => 2,
            'total'           => 1
        ]);
        DB::table('wallets')->insert([
            'currency_id'     => 5,
            'user_id'         => 3,
            'total'           => 1
        ]);
        DB::table('wallets')->insert([
            'currency_id'     => 6,
            'user_id'         => 4,
            'total'           => 1
        ]);

        //markets
        DB::table('markets')->insert([
            'currency_id'     => 3,
            'user_id'         => 1,
            'action'          => "Sell",
            'total'           => 1,
            'price'           => 16551,
        ]);
        DB::table('markets')->insert([
            'currency_id'     => 4,
            'user_id'         => 2,
            'action'          => "Sell",
            'total'           => 1,
            'price'           => 1176,
        ]);
        DB::table('markets')->insert([
            'currency_id'     => 5,
            'user_id'         => 3,
            'action'          => "Sell",
            'total'           => 1,
            'price'           => 0.42,
        ]);
        DB::table('markets')->insert([
            'currency_id'     => 6,
            'user_id'         => 4,
            'action'          => "Sell",
            'total'           => 1,
            'price'           => 0.04,
        ]);

        //histories
        DB::table('histories')->insert([
            'currency_id'     => 3,
            'from_user_id'    => 1,
            'is_in_system'    => 1,
            'to_user_id'      => 1,
            'ref_to_user'     => "",
            'to_address'      => "",
            'action'          => "Sell",
            'total'           => 1,
            'price'           => 16551,
        ]);
        DB::table('histories')->insert([
            'currency_id'     => 4,
            'from_user_id'    => 2,
            'is_in_system'    => 1,
            'to_user_id'      => 2,
            'ref_to_user'     => "",
            'to_address'      => "",
            'action'          => "Sell",
            'total'           => 1,
            'price'           => 1176,
        ]);
        DB::table('histories')->insert([
            'currency_id'     => 5,
            'from_user_id'    => 3,
            'is_in_system'    => 1,
            'to_user_id'      => 2,
            'ref_to_user'     => "",
            'to_address'      => "",
            'action'          => "Sell",
            'total'           => 1,
            'price'           => 0.42,
        ]);
        DB::table('histories')->insert([
            'currency_id'     => 6,
            'from_user_id'    => 4,
            'is_in_system'    => 1,
            'to_user_id'      => 2,
            'ref_to_user'     => "",
            'to_address'      => "",
            'action'          => "Sell",
            'total'           => 1,
            'price'           => 0.04,
        ]);
    }
}
