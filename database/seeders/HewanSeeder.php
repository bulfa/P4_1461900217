<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hewan;

class HewanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hwn1 = new Hewan;
        $hwn1 -> kelamin = "Jantan";
        $hwn1 -> nama_hwn = "Singa";
        $hwn1 -> save();

        $hwn2 = new Hewan;
        $hwn2 -> kelamin = "Betina";
        $hwn2 -> nama_hwn = "Singa";
        $hwn2 -> save();
        
    }
}
