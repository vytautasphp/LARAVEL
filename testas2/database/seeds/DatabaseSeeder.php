<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
            DB::table('radars')->insert([
                'date' => Carbon::create(2017, 1, 1, 23, 25, 50),
            'number' => 'AAA001',
            'distance' => 10,
            'time' => 200]);
      
              // $this->call(UsersTableSeeder::class);
    }  
}
