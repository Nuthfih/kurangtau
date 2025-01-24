<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProgrammingLanguage;

class ProgrammingLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages = [
            'HTML',
            'CSS',
            'JavaScript',
            'Java',
            'Python',
            'Go',
            'C#',
            'Ruby',
            'PHP',
            'Swift',
        ];

        foreach ($languages as $language) {
            ProgrammingLanguage::create(['name' => $language, 'user_id' => 1]);
        }
    }
}
