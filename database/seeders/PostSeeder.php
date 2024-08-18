<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'id' => 1,
                'title' => 'Rekayasa Perangkat Lunak (RPL)',
                'author' => 'Ridwan',
                'body' => 'Rekayasa Perangkat Lunak (RPL) adalah salah satu jurusan dalam bidang teknologi informasi yang fokus pada pengembangan, perancangan, dan pemeliharaan perangkat lunak. Siswa jurusan ini belajar tentang pemrograman, desain aplikasi, basis data, dan manajemen proyek perangkat lunak.'
            ],
            [
                'id' => 2,
                'title' => 'Desain Komunikasi Visual (DKV)',
                'author' => 'Mochi',
                'body' => 'Desain Komunikasi Visual (DKV) adalah jurusan yang mempelajari tentang cara menyampaikan pesan melalui elemen visual seperti gambar, teks, dan ilustrasi. Siswa jurusan DKV dilatih untuk menjadi desainer grafis yang kreatif dengan kemampuan dalam membuat desain untuk media cetak dan digital.'
            ],
            [
                'id' => 3,
                'title' => 'Teknik Komputer dan Jaringan (TKJ)',
                'author' => 'Ridwan',
                'body' => 'Teknik Komputer dan Jaringan (TKJ) adalah jurusan yang berfokus pada pembelajaran tentang jaringan komputer, konfigurasi perangkat keras, serta pengelolaan dan pemeliharaan sistem jaringan. Siswa TKJ mempelajari bagaimana membangun dan mengelola jaringan komputer baik skala kecil maupun besar.'
            ],
            [
                'id' => 4,
                'title' => 'Administrasi Bisnis',
                'author' => 'Rina',
                'body' => 'Administrasi Bisnis adalah bidang ilmu yang mempelajari tentang pengelolaan operasional dan sumber daya di dalam suatu organisasi atau perusahaan. Siswa jurusan ini belajar tentang manajemen, pemasaran, keuangan, dan sumber daya manusia. Lulusan jurusan ini dapat bekerja sebagai manajer, staf administrasi, atau entrepreneur.'
            ],
            [
                'id' => 5,
                'title' => 'Agribisnis',
                'author' => 'Tono',
                'body' => 'Agribisnis adalah bidang ilmu yang mempelajari tentang usaha pertanian yang terintegrasi dari hulu ke hilir, mulai dari produksi, pengolahan, hingga pemasaran. Siswa jurusan ini belajar tentang budidaya tanaman, teknologi pertanian, manajemen agribisnis, dan pemasaran hasil pertanian. Lulusan jurusan ini dapat bekerja sebagai petani modern, penyuluh pertanian, atau di industri pertanian.'
            ],
            [
                'id' => 6,
                'title' => 'Seni Musik',
                'author' => 'Dewa',
                'body' => 'Seni Musik adalah bidang ilmu yang mempelajari tentang teori musik, praktik bermain alat musik, komposisi, dan sejarah musik. Siswa jurusan ini belajar tentang berbagai genre musik, teknik vokal atau instrumental, dan pertunjukan musik. Lulusan jurusan ini dapat bekerja sebagai musisi, komposer, guru musik, atau di industri musik.'
            ],
            [
                'id' => 7,
                'title' => 'Multimedia',
                'author' => 'Gilang',
                'body' => 'Multimedia adalah jurusan yang mempelajari tentang berbagai media digital, seperti audio, video, animasi, dan desain interaktif. Siswa jurusan ini belajar tentang cara membuat konten multimedia yang kreatif dan inovatif untuk berbagai platform digital.'
            ],
            [
                'id' => 8,
                'title' => 'Perhotelan',
                'author' => 'Sari',
                'body' => 'Perhotelan adalah jurusan yang fokus pada manajemen hotel dan pariwisata. Siswa jurusan ini belajar tentang operasional hotel, layanan tamu, manajemen restoran, dan perencanaan event. Lulusan jurusan ini dapat bekerja di industri perhotelan dan pariwisata.'
            ],
            [
                'id' => 9,
                'title' => 'Akuntansi',
                'author' => 'Budi',
                'body' => 'Akuntansi adalah bidang ilmu yang mempelajari tentang pencatatan, pengelolaan, dan pelaporan keuangan. Siswa jurusan ini belajar tentang akuntansi dasar, perpajakan, audit, dan analisis laporan keuangan. Lulusan jurusan ini dapat bekerja sebagai akuntan, auditor, atau konsultan keuangan.'
            ],
            [
                'id' => 10,
                'title' => 'Farmasi',
                'author' => 'Dewi',
                'body' => 'Farmasi adalah jurusan yang mempelajari tentang obat-obatan, termasuk pengembangan, produksi, pengujian, dan distribusi. Siswa jurusan ini belajar tentang kimia farmasi, farmakologi, dan praktik apotek. Lulusan jurusan ini dapat bekerja sebagai apoteker atau di industri farmasi.'
            ],
            [
                'id' => 11,
                'title' => 'Teknik Sipil',
                'author' => 'Andi',
                'body' => 'Teknik Sipil adalah jurusan yang fokus pada perancangan, pembangunan, dan pemeliharaan infrastruktur, seperti jembatan, jalan, gedung, dan saluran air. Siswa jurusan ini belajar tentang struktur bangunan, material, dan manajemen proyek konstruksi.'
            ],
            [
                'id' => 12,
                'title' => 'Kedokteran',
                'author' => 'Nina',
                'body' => 'Kedokteran adalah jurusan yang mempelajari tentang ilmu kesehatan dan pengobatan. Siswa jurusan ini belajar tentang anatomi, fisiologi, patologi, dan praktik klinis. Lulusan jurusan ini dapat bekerja sebagai dokter di berbagai bidang spesialisasi.'
            ],
            [
                'id' => 13,
                'title' => 'Ilmu Hukum',
                'author' => 'Riko',
                'body' => 'Ilmu Hukum adalah jurusan yang mempelajari tentang sistem hukum dan peraturan yang berlaku dalam masyarakat. Siswa jurusan ini belajar tentang hukum perdata, pidana, tata negara, dan hukum internasional. Lulusan jurusan ini dapat bekerja sebagai pengacara, hakim, atau konsultan hukum.'
            ],
            [
                'id' => 14,
                'title' => 'Pendidikan Guru',
                'author' => 'Rina',
                'body' => 'Pendidikan Guru adalah jurusan yang mempersiapkan siswa untuk menjadi guru di berbagai jenjang pendidikan. Siswa jurusan ini belajar tentang metode pengajaran, psikologi pendidikan, dan kurikulum. Lulusan jurusan ini dapat bekerja sebagai guru atau pendidik di lembaga pendidikan formal dan non-formal.'
            ],
        ];

        foreach ($posts as $post) {
            Post::create([
                'slug' => Str::slug($post['title']),
                'title' => $post['title'],
                'author' => $post['author'],
                'body' => $post['body'],
            ]);
        }
    }
}
