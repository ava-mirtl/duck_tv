<?php


  namespace Database\Seeders;

  use App\Models\News;
  use App\Models\Tag;
  use App\Models\Taggable;
  use App\Models\Video;
  use Illuminate\Database\Seeder;

  class TaggableSeeder extends Seeder
  {
      public function run()
      {
          $news = News::all();
          foreach ($news as $singleNews) {
              Taggable::insert([
                  'tag_id' => Tag::inRandomOrder()->first()->id,
                  'taggable_type' => 'App\Models\News',
                  'taggable_id' => $singleNews->id,
              ]);
          }

          $videos = Video::all();
          foreach ($videos as $singleVideo) {
              Taggable::insert([
                  'tag_id' => Tag::inRandomOrder()->first()->id,
                  'taggable_type' => 'App\Models\Video',
                  'taggable_id' => $singleVideo->id,
              ]);
          }
      }
  }
