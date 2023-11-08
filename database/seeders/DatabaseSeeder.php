<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Appointment;
use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(10)->create();

        Appointment::factory()
            ->count(25) // Number of appointments to create
            ->create();

        $roles = ['Admin', 'User', 'Advisor', 'Mechanic', 'Guest'];

        foreach ($roles as $roleName) {
            Role::firstOrNew(['role' => $roleName])->save();
        }
    }
}
