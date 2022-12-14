<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Storage;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $files = array_map(function (string $str) {
            return str_replace('public/img/', "", $str);
        }, Storage::files('public/img'));

        foreach ($files as $file) {
            DB::table('images')->insert([
                'name' => $file,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]);
        }
    }
}
