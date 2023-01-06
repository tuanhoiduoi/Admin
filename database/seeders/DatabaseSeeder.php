<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@material.com',
            'password' => ('secret')
        ]);
        DB::insert("INSERT INTO `question` (`id`, `category`, `question`, `correct_answer`, `incorrect_answer_1`, `incorrect_answer_2`, `incorrect_answer_3`, `status`, `created_at`, `updated_at`) VALUES
        (1, '1', '\"Chung lưng đấu cật\" thuộc thể loại gì', 'Thành ngữ', 'Tục ngữ', 'Ca dao', 'Châm ngôn', 1, '2022-12-16 06:20:10', '2022-12-16 06:20:10'),
        (2, '1', 'Non sông Việt Nam có vẻ vang, sánh vai với các cường quốc năm châu hay không, đó là nhờ công lao học tập của .....?', 'Các cháu', 'Chúng ta', 'Thế hệ trẻ', 'Bộ đội', 1, '2022-12-16 06:21:47', '2022-12-16 06:21:47');");
    }
}
