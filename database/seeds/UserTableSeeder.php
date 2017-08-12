<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $role_business = Role::where('name', 'business')->first();
    $role_manager  = Role::where('name', 'manager')->first();
    $role_agent  = Role::where('name', 'agent')->first();
    $role_publisher  = Role::where('name', 'publisher')->first();

    $business = new User();
    $business->name = 'Employee Name';
    $business->email = 'business@example.com';
    $business->password = bcrypt('secret');
    $business->save();
    $business->roles()->attach($role_business);

    $manager = new User();
    $manager->name = 'Manager Name';
    $manager->email = 'manager@example.com';
    $manager->password = bcrypt('secret');
    $manager->save();
    $manager->roles()->attach($role_manager);

    $agent = new User();
    $agent->name = 'Agent Name';
    $agent->email = 'agent@example.com';
    $agent->password = bcrypt('secret');
    $agent->save();
    $agent->roles()->attach($role_agent);

    $publisher = new User();
    $publisher->name = 'publisher Name';
    $publisher->email = 'publisher@example.com';
    $publisher->password = bcrypt('secret');
    $publisher->save();
    $publisher->roles()->attach($role_publisher);

    }
}
