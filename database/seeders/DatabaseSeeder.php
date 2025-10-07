<?php

namespace Database\Seeders;

use App\Models\Ticket;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\TicketFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'password' => Hash::make('password'),
            'email' => 'test@example.com',
        ]);

        Ticket::factory(50)->recycle($users)->create();
    }
}
