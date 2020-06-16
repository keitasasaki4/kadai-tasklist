<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 50; $i++) {
            DB::table('tasks')->insert([
                'status' => 'status ' . $i,
                'content' => 'content ' . $i
            ]);
        }
    }
}
