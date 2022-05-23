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
            'username' => config('database.connections.mysql.username'), // TODO: change to config
            'password' => config('database.connections.mysql.password'),
            'host' => config('database.connections.mysql.host'),
            'database' => config('database.connections.mysql.database'),
        ];
  
        exec("mysql --user={$db['username']} --password={$db['password']} --host={$db['host']} --database {$db['database']} < $sql");
  
        \Log::info('SQL Import Done');
    }
}
