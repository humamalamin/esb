<?php

namespace Database\Seeders;

use App\Models\SubItem;
use Illuminate\Database\Seeder;

class SubItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubItem::factory(10)->create();
    }
}
