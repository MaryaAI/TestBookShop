<?php

use Illuminate\Database\Seeder;
use App\Publisher;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publisher::create(['name' => 'أكاديمية حسوب']);
    }
}
