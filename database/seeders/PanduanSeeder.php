<?php

namespace Database\Seeders;

use App\Models\Panduan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PanduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Panduan::create([
            'nama' => 'Panduan Penanganan Insiden Malware',
            'file' => 'panduan/Panduan-Penanganan-Insiden-Malware.pdf'
        ]);

        Panduan::create([
            'nama' => 'Panduan Penanganan Insiden Serangan DDoS',
            'file' => 'panduan/Panduan-Penanganan-Insiden-Serangan-DDoS.pdf'
        ]);

        Panduan::create([
            'nama' => 'Panduan Penanganan Insiden Serangan Phishing',
            'file' => 'panduan/Panduan-Penanganan-Insiden-Serangan-Phishing.pdf'
        ]);

        Panduan::create([
            'nama' => 'Panduan Penanganan Insiden Serangan SQL Injection',
            'file' => 'panduan/Panduan-Penanganan-Insiden-Serangan-SQL-Injection.pdf'
        ]);

        Panduan::create([
            'nama' => 'Panduan Penanganan Insiden Web Defacement',
            'file' => 'panduan/Panduan-Penanganan-Insiden-Web-Defacement.pdf'
        ]);
    }
}
