<?php

use Illuminate\Database\Seeder;
use App\Trainer;
class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trainer::create([
              'name'=>'kareem fouad',
              'phone'=>'012012345',
              'spec'=>'web development',
              'img'=>'1.png'

        ]);
        Trainer::create([
            'name'=>'mostafa mahfouz',
            'phone'=>'012012345',
            'spec'=>'web development',
            'img'=>'2.png'

      ]);
      Trainer::create([
        'name'=>'ahmed hussin',
        'phone'=>'012012345',
        'spec'=>'dentist',
        'img'=>'3.png'

  ]);
  Trainer::create([
    'name'=>'hazem mohammed',
    'phone'=>'012012345',
    'spec'=>'doctor',
    'img'=>'4.png'

]);
Trainer::create([
    'name'=>'magdy mahmoud',
    'phone'=>'012012345',
    'spec'=>'english teacher',
    'img'=>'5.png'

]);
    }
}
