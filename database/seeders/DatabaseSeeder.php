<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $sql = database_path('nba2019.sql');
          
        $db = [
            'username' => env('DB_USERNAME'), // TODO: change to config
            'password' => env('DB_PASSWORD'),
            'host' => env('DB_HOST'),
            'database' => env('DB_DATABASE')
        ];
  
        exec("psql --user={$db['username']} --host={$db['host']} --database {$db['database']} < $sql");
  
        \Log::info('SQL Import Done');
    }
}
