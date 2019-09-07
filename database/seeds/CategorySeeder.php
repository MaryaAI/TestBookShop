<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'ريادة الأعمال']);// key value
        Category::create(['name' => 'العمل الحر']);
        Category::create(['name' => 'التسويق والمبيعات']);
        Category::create(['name' => 'التصميم']);
    }
}
