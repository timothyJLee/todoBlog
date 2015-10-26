<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
            ['id' => 1, 'name' => 'hello1', 'email' => 'hello1@hello.hello', 'password' => 'hellohello1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'hello2', 'email' => 'hello2@hello.hello', 'password' => 'hellohello2', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'hello3', 'email' => 'hello3@hello.hello', 'password' => 'hellohello3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        DB::table('users')->insert($users);
    }
}
