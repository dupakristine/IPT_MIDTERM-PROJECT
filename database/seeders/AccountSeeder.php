<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'user_id' => 1,
                'acct_name' => 'Dupa Savings Account',
                'init_invest' => 25000,
                'start_date' => '2022-10-14',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' => 2,
                'acct_name' => 'Dupa Savings Account',
                'init_invest' => 15000,
                'start_date' => '2022-10-14',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' => 3,
                'acct_name' => 'Clarke Savings Account',
                'init_invest' => 30000,
                'start_date' => '2022-10-14',
                'remarks' => 'Done with normal transaction'
            ]
        ];

        foreach($data as $acc) {
            \App\Account::create($acc);
        }
    }
}