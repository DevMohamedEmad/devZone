<?php

namespace Database\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {        
        $this->call([
            TrackSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            InstructorSeeder::class,
            SubtrackSeeder::class,
            PostSeeder::class,
            PostReplaySeeder::class,
            LanguageSeeder::class,
            TestimonialSeeder::class,
            TestSeeder::class,
            // QuestionSeeder::class,
            // QcommentSeeder::class ,
            // ReplySeeder::class,
            ServiceSeeder::class,
            OrderSeeder::class,

        ]);
    }
}

?>
