<?php

namespace Database\Seeders;

use App\Models\Document;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $documents = Document::factory(10)->create();

        // foreach ($documents as $document)
        // {
        //   File::factory(1)->create([
        //     'fileable_id' => $post->id,
        //     'imageable_type' => Post::class
        //   ]);
        // }
    }
}
