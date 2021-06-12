<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tumbuhan;

class TumbuhanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tmbhn1 = new Tumbuhan;
        $tmbhn1 -> kelamin = "Jantan";
        $tmbhn1 -> nama_tmbhn = "Bunga";
        $tmbhn1 -> save();

        $tmbhn2 = new Tumbuhan;
        $tmbhn2 -> kelamin = "Betina";
        $tmbhn2 -> nama_tmbhn = "Bunga";
        $tmbhn2 -> save();
    }
}
