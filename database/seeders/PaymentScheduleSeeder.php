<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payment_schedules')->insert([
            ['course_id' => 1,
              'amount' => json_encode([
                'africa'=> 120000.00,
                'other' => 1200,
              ]) ,
              'purpose' => 'sch_fee',
              'description' => 'payment for business with work experience certification',
            ], 
            ['course_id' => 2,
            'amount' =>json_encode([
               'africa'=>  250000.00,
               'other' => 1600,

            ]), 
            'purpose' => 'sch_fee',
            'description' => 'payment for business analysis with scrum master certification',
            ],
            [
            'course_id' => 3,
            'amount' =>json_encode([
                'africa'=>  450000.00,
                'other' =>  2500

            ]), 
            'purpose' => 'sch_fee',
            'description' => 'payment for business analysis with internship certification',
            ],
            [
            'course_id' => 4,
            'amount' =>json_encode([
                'africa'=>  00000.00,
                'other'=>  0

            ]), 
            'purpose' => 'sch_fee',
            'description' => 'payment for scrum master entry level free',
            ],

            [
            'course_id' => 5,
            'amount' =>json_encode([
                'africa'=>  180000.00,
                'other' => 0,

            ]), 
            'purpose' => 'sch_fee',
            'description' => 'payment for scrum master with work experience duration',
            ],
            [
            'course_id' => 6,
            'amount' => json_encode([
                'africa' =>  00000.00,
                'other' => 0,
            ]), 
            'purpose' => 'sch_fee',
            'description' => 'payment for product management entry level',
            ],
            [
            'course_id' => 7,
            'amount' => json_encode([
                 'africa' =>  120000.00,
                 'other' => 0,   
            ]), 
            'purpose' => 'sch_fee',
            'description' => 'payment for product management with work experience duration',
            ],
            [
            'course_id' => 8,
            'amount' => json_encode([
                'africa' => 250000.00,
                 'other' => 0,
            ]),
            'purpose' => 'sch_fee',
            'description' => 'payment for product management with scrum  master certification',
            ],

        ]);
    }
}
