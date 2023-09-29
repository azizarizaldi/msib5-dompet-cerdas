<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transaction;
use App\Models\User;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed data
        $users = User::all();

        foreach ($users as $user) {
            // Create 10 transactions for each user
            for ($i = 1; $i < 10; $i++) {
                Transaction::create([
                    'users_id' => $user->id,
                    'nominal' => random_int(10000, 100000),
                    'type' => random_int(0, 1) ? 'credit' : 'debit',
                    'transaction_name' => 'Transaction ' . $i,
                    'transaction_date' => now(),
                    'attachment' => null,
                ]);
            }
        }
    }
}
