<?php

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file_contents = File::get('database/seeds/json/customers.json');

        $json = json_decode($file_contents, true);

        foreach ($json as $entry) {
            $customer = Customer::firstOrCreate($entry);
        }
    }
}
