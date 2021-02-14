<?php

use Illuminate\Database\Seeder;
use App\Video;

class videoSeeder extends Seeder
{
    public function run()
    {
        factory(Video::class, 20) -> create();
    }
}
