<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'service_name' => 'Konsultasi Dokter Umum Online',
                'description' => 'Layanan konsultasi kesehatan secara online dengan dokter umum berpengalaman untuk diagnosis awal dan rekomendasi penanganan kondisi kesehatan umum.',
                'availability' => '08.00 - 21.00',
                'category_id' => 1,
                'price' => 50000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_name' => 'Konsultasi Dokter Umum di Klinik',
                'description' => 'Konsultasi tatap muka di klinik kami dengan dokter umum berkualitas untuk pemeriksaan fisik komprehensif dan saran kesehatan yang dipersonalisasi.',
                'availability' => '08.00 - 17.00 (Senin - Jumat)',
                'category_id' => 1,
                'price' => 100000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_name' => 'Konsultasi Dokter Spesialis Anak',
                'description' => 'Konsultasi ahli dengan dokter spesialis anak untuk pemantauan kesehatan anak, penilaian pertumbuhan, panduan imunisasi, dan penanganan penyakit anak.',
                'availability' => '09.00 - 17.00',
                'category_id' => 2,
                'price' => 150000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_name' => 'Konsultasi Dokter Spesialis Penyakit Dalam',
                'description' => 'Konsultasi spesialis dengan dokter penyakit dalam untuk manajemen penyakit kronis, perawatan preventif, dan penilaian kesehatan komprehensif.',
                'availability' => '09.00 - 16.00 (Senin - Jumat)',
                'category_id' => 2,
                'price' => 175000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_name' => 'Paket Pemeriksaan Kesehatan Dasar',
                'description' => 'Pemeriksaan kesehatan menyeluruh termasuk pemeriksaan vital, pemeriksaan fisik, dan tes laboratorium awal untuk penilaian kesehatan umum.',
                'availability' => '08.00 - 16.00',
                'category_id' => 3,
                'price' => 250000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_name' => 'Paket Pemeriksaan Kesehatan Eksekutif',
                'description' => 'Paket pemeriksaan kesehatan premium dengan diagnostik lanjutan, konsultasi spesialis, dan laporan kesehatan personal untuk profesional sibuk.',
                'availability' => '07.00 - 18.00',
                'category_id' => 3,
                'price' => 500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_name' => 'Tes Hitung Darah Lengkap (CBC)',
                'description' => 'Tes darah penting untuk mengevaluasi status kesehatan umum, mendeteksi anemia, infeksi, dan gangguan darah melalui analisis hitung sel komprehensif.',
                'availability' => '07.00 - 15.00',
                'category_id' => 4,
                'price' => 150000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_name' => 'Tes Panel Metabolik & Kolesterol',
                'description' => 'Tes laboratorium komprehensif termasuk glukosa, panel lipid, fungsi ginjal, dan tes fungsi hati untuk penilaian kesehatan metabolik.',
                'availability' => '07.00 - 14.00',
                'category_id' => 4,
                'price' => 200000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_name' => 'Konsultasi Chat dengan Dokter',
                'description' => 'Layanan konsultasi melalui chat real-time dengan dokter berlisensi untuk menjawab pertanyaan kesehatan, gejala, dan mendapatkan saran medis awal dengan cepat.',
                'availability' => '08.00 - 20.00',
                'category_id' => 5,
                'price' => 40000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_name' => 'Layanan Resep Obat',
                'description' => 'Layanan penerbitan resep elektronik dari dokter yang dapat langsung ditebus di apotek mitra atau dikirim ke rumah Anda dengan mudah dan cepat.',
                'availability' => '09.00 - 18.00',
                'category_id' => 5,
                'price' => 50000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
