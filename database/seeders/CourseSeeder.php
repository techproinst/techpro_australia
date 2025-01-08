<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->insert([
            [  'name' => 'BA with Work Experience',
               'certification' => true,
               'course_type' => 0,
               'syllabus' => json_encode([
                  'The role of a BA in Project
                delivery',
                'Conducting project discovery',
                '3 Cs of requirement
                elicitation',
                'Use case analysis',
                'High level business
                requirement',
                'Gap Analysis',
                'Epic, User Stories and Acceptance',
                'Process Mapping',
                'Requirement Traceability Matrix (RTM)',

               ]),
               'course_code' => 'BAEC',
               'duration' => '8 weeks',
             ], 
             [
                'name' => 'BA with Scrum Master',
                 'certification' => true,
                 'syllabus' => json_encode([
                  'll the BA with work experience ',
                  'Conducting project discovery',
                  'Scrum artifacts and ceremonies',
                  'Agile Manifestos',
                  'Preparation for SM Certification',
                  'Gap Analysis',
                  'Scrum master certification exam registration fees (Scrum Institute)',
                  'Scrum master exam dump (past questions)',

                 ]),
                'course_type' => 0,
                'course_code' => 'BASC',
                'duration' => '10 weeks',
             ],
             [
                'name' => 'BA with Internship',
                'certification' => true,
                'syllabus' => json_encode([
                  'All the BA with work experience syllabus',
                  'Scrum arifacts and ceremonies',
                  'Agile Manisfestos',
                  'Preparation for Scrum  Master Certification',
                  'Scrum master certification exam registration fees (Scrum Institute)',
                  'Scrum master exam dump (past questions)',
                  '8 weeks of internship with an australia consulting company',

                ]),
                'course_type' => 0,
                'course_code' => 'BAIC',
                'duration' => '18 weeks',
             ],
             [
                'name' => 'Scrum Master Entry Level',
                'certification' => false,
                'syllabus' => json_encode([
                  'The role of a Scrum Master in a scrum team',
                  'Scrum roles',
                  'Scrum artifacts',
                  'Scrum ceremonies',
                  'Estimation techniques',
                  'Agile Manisfestos',

                ]),
                'course_type' => 1,
                'course_code' => 'SMLF',
                'duration' => '2 weeks',
             ],
             [
                'name' => 'SM with Work Experience',
                'certification' => true,
                'syllabus' => json_encode([
                  'All the Scrum Master
                  entry level learning syllabus',
                  'Scrum artifacts and ceremonies',
                  'Agile manifestos',
                  'Preparation for Scrum Master Certification',
                  'Scrum Master certification  exam registration fees (Scrum Institute)',
                  'Scrum Master exam dump (past questions)',

                ]),
                'course_type' => 1,
                'course_code' => 'SMWE',
                'duration' => '6 weeks',
             ],
             [
                'name' => 'Product Management',
                'certification' => false,
                'syllabus' => json_encode([
                  'Introduction to project management',
                  'Business model canvas (BMC)',
                  'Product vision and identify oppurtunities',
                  'Market and competitor analysis',
                  'Go-to-market startegy',
                  'Product prioritization framework',
                  'Minimum viable product (MVP)',
                  'Usability Testing',
                  'Product launch',

                ]),
                'course_type' => 2,
                'course_code' => 'PMEl',
                'duration' => '2 weeks',
             ],
             [
                'name' => 'PM with Work Experience',
                'certification' => true,
                'syllabus' => json_encode([
                  'All the product management entry level learning syllabus',
                  'Access to training recordings',
                  '4 weeks of practical work experience to work on a live project',
                  'CV revamp',
                  'LinkedIn optimization',
                  'Interview preparation',
                  'Certificate of completion'
                ]),
                'course_type' => 2,
                'course_code' => 'PMWE',
                'duration' => '6 weeks',
             ],
             [
                'name' => 'PM with scrum master',
                'certification' => true,
                'syllabus' => json_encode([
                  'All PM entry level syllabus',
                  'All the PM with work experience activities',
                  'Scrum artifacts and ceremonies',
                  'Agile manifestos',
                  'Agile manifestos preparation for Scrum Master Certification',
                  'Scrum Master certification  exam registration fees (Scrum Institute)',
                  'crum Master exam dump (past questions)'


                ]),
                'course_type' => 2,
                'course_code' => 'PMSMC',
                'duration' => '8 weeks',
             ]

        ]);
    }
}
