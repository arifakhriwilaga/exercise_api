<?php
use DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Employee;


use Faker\Factory as Faker;


class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    factory(App\Employee::class, 50)->create()->each(function($u) {
        $u->posts()->save(factory(App\Post::class)->make());
    });
    }
}
