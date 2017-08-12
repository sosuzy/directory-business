<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 
    $role_business = new Role();
    $role_business->name = 'business';
    $role_business->description = 'A Business owner';
    $role_business->save();

    $role_manager = new Role();
    $role_manager->name = 'manager';
    $role_manager->description = 'A Manager User';
    $role_manager->save();

    $role_agent = new Role();
    $role_agent->name = 'agent';
    $role_agent->description = 'An agent to register businesses';
    $role_agent->save();

 $role_publisher = new Role();
    $role_publisher->name = 'publisher';
    $role_publisher->description = 'A Website owner';
    $role_publisher->save();

  }
    }
