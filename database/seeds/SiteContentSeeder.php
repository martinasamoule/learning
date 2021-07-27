<?php

use Illuminate\Database\Seeder;
use App\SiteContent;
class SiteContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteContent::create([
        
            'name'=>'banner',
            'content'=>json_encode(
                [
                    'title'=>'EVERY STUDENT YEARNS TO LEARN',
                    'subtitle'=>'Making Your Childs World Better',
                    'desc'=>"'Replenish seasons may male hath fruit beast were seas saw you arrie said man beast whales his void unto last session for bite. Set have great you'll male grass yielding yielding man'"
                ]
            ),
               ]);
    }
}
