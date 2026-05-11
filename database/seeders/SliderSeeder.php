<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slider::create([
            'title' => 'WEZESHA FOUNDATION',
            'subtitle' => 'TRANSFORMING THE FUTURE OF DRC',
            'image' => 'flexbiz/assets/img/hero-bg.jpg',
            'button1_text' => 'En Savoir Plus',
            'button1_url' => '#about',
            'button2_text' => 'Faire un Don',
            'button2_url' => '#',
            'order' => 1,
        ]);

        Slider::create([
            'title' => 'Éduquer, Autonomiser, Transformer',
            'subtitle' => 'Un Engagement pour la RDC',
            'image' => 'flexbiz/assets/img/features-3.jpg',
            'button1_text' => 'Nos Projets',
            'button1_url' => '#portfolio',
            'button2_text' => 'Nous Contacter',
            'button2_url' => '#contact',
            'order' => 2,
        ]);
    }
}