<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'rpl',
                'title' => 'Rekayasa Perangkat Lunak (RPL)',
                'author' => 'Ridwan',
                'body' => 'Rekayasa Perangkat Lunak (RPL) adalah salah satu jurusan dalam bidang teknologi informasi yang fokus pada pengembangan, perancangan, dan pemeliharaan perangkat lunak. Siswa jurusan ini belajar tentang pemrograman, desain aplikasi, basis data, dan manajemen proyek perangkat lunak.'
            ],
            [
                'id' => 2,
                'slug' => 'dkv',
                'title' => 'Desain Komunikasi Visual (DKV)',
                'author' => 'Mochi',
                'body' => 'Desain Komunikasi Visual (DKV) adalah jurusan yang mempelajari tentang cara menyampaikan pesan melalui elemen visual seperti gambar, teks, dan ilustrasi. Siswa jurusan DKV dilatih untuk menjadi desainer grafis yang kreatif dengan kemampuan dalam membuat desain untuk media cetak dan digital.'
            ],
            [
                'id' => 3,
                'slug' => 'tkj',
                'title' => 'Teknik Komputer dan Jaringan (TKJ)',
                'author' => 'Ridwan',
                'body' => 'Teknik Komputer dan Jaringan (TKJ) adalah jurusan yang berfokus pada pembelajaran tentang jaringan komputer, konfigurasi perangkat keras, serta pengelolaan dan pemeliharaan sistem jaringan. Siswa TKJ mempelajari bagaimana membangun dan mengelola jaringan komputer baik skala kecil maupun besar.'
            ],
            [
                'id' => 4,
                'slug' => 'bisnis',
                'title' => 'Administrasi Bisnis',
                'author' => 'Rina',
                'body' => 'Administrasi Bisnis adalah bidang ilmu yang mempelajari tentang pengelolaan operasional dan sumber daya di dalam suatu organisasi atau perusahaan. Siswa jurusan ini belajar tentang manajemen, pemasaran, keuangan, dan sumber daya manusia. Lulusan jurusan ini dapat bekerja sebagai manajer, staf administrasi, atau entrepreneur.'
            ],
            [
                'id' => 5,
                'slug' => 'pertanian',
                'title' => 'Agribisnis',
                'author' => 'Tono',
                'body' => 'Agribisnis adalah bidang ilmu yang mempelajari tentang usaha pertanian yang terintegrasi dari hulu ke hilir, mulai dari produksi, pengolahan, hingga pemasaran. Siswa jurusan ini belajar tentang budidaya tanaman, teknologi pertanian, manajemen agribisnis, dan pemasaran hasil pertanian. Lulusan jurusan ini dapat bekerja sebagai petani modern, penyuluh pertanian, atau di industri pertanian.'
            ],
            [
                'id' => 6,
                'slug' => 'seni',
                'title' => 'Seni Musik',
                'author' => 'Dewa',
                'body' => 'Seni Musik adalah bidang ilmu yang mempelajari tentang teori musik, praktik bermain alat musik, komposisi, dan sejarah musik. Siswa jurusan ini belajar tentang berbagai genre musik, teknik vokal atau instrumental, dan pertunjukan musik. Lulusan jurusan ini dapat bekerja sebagai musisi, komposer, guru musik, atau di industri musik.'
            ],
        ];
    }

    public static function find($slug): array
{
    $post = Arr::first(self::all(), fn($article) => $article['slug'] == $slug);

    if (!$post) {
        abort(404); 
    }

    return $post;
}

}
