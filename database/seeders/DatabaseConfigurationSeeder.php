<?php

namespace Database\Seeders;

use App\Models\Backend\Configuration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Configuration::create([
            'logo' => 'uploads/configuration/logoyasmin-removebg-preview.png',
            'title_logo' => 'uploads/configuration/logoyasmin.jpg',
            'website_name' => 'Kursus Yasmin',
            'title' => 'Kursus Yasmin',
            'phone_number' => '6283835572912',
            'email_address' => 'legendsmystic60@gmail.com',
            'instagram' => 'Kursus Yasmin',
            'youtube' => 'Kursus Yasmin',
            'address' => 'Perumahan Taman Yasmin',
            'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31725.902379643236!2d106.77635291786632!3d-6.566097599999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c47355d3d3c5%3A0x6c02e915d529bff6!2sJl.%20Cemara%20Kipas%20I%20No.20%2C%20RT.06%2FRW.09%2C%20Cilendek%20Tim.%2C%20Kec.%20Bogor%20Bar.%2C%20Kota%20Bogor%2C%20Jawa%20Barat%2016112!5e0!3m2!1sid!2sid!4v1693456789012',
            'footer' => 'Copyright © 2025 | Kursus Yasmin',
            'meta_keywords' => 'Kursus coding terbaik, Kursus pemrograman online, Kursus coding untuk pemula, Kursus programming Python, Kursus web development, Belajar coding dari nol, Kursus full stack developer, Kursus JavaScript intensif, Kursus backend developer, Kursus mobile app development, Kursus coding bersertifikat, Kursus data science dan AI, Bootcamp coding profesional, Kursus coding anak dan remaja, Pelatihan coding cepat kerja',
            'meta_descriptions' => 'Belajar coding dari nol hingga mahir dengan kursus pemrograman terbaik! Kuasai web development, mobile app, dan data science dengan instruktur berpengalaman. Dapatkan sertifikat resmi!',
            'faq_image' => '',
        ]);
    }
}
