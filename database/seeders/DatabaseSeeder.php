<?php

namespace Database\Seeders;

use App\Models\Capaian;
use App\Models\Indikator;
use App\Models\Kegiatan;
use App\Models\Pilar;
use App\Models\Program;
use App\Models\Role;
use App\Models\Tahun;
use App\Models\Target;
use App\Models\Tujuan;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //table role
        Role::create([
            'name' => 'superadmin',
        ]);
        Role::create([
            'name' => 'SKPD KAlTIM',
        ]);
        Role::create([
            'name' => 'Pusat',
        ]);
        Role::create([
            'name' => 'CSO / NGO / Filantropi / Akademia',
        ]);
        Role::create([
            'name' => 'Pelaku Usaha',
        ]);

        //table User
        User::create([
            'name' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'no_wa' => '082233777721',
            'role_id' => 1,
            'password' => bcrypt('12341234')
        ]);
        User::create([
            'name' => 'Dinas Kehutanan',
            'email' => 'dishut@gmail.com',
            'no_wa' => '0909',
            'role_id' => 2,
            'password' => bcrypt('12341234')
        ]);
        User::create([
            'name' => 'Pemerintah Pusat',
            'email' => 'pusat@gmail.com',
            'no_wa' => '123123',
            'role_id' => 3,
            'password' => bcrypt('12341234')
        ]);
        User::create([
            'name' => ' perusahaan A',
            'email' => 'ngo@gmail.com',
            'no_wa' => '12312223',
            'role_id' => 4,
            'password' => bcrypt('12341234')
        ]);
        User::create([
            'name' => 'Nama Pelau Usaha',
            'email' => 'pelakuusaha@gmail.com',
            'no_wa' => '12121232223',
            'role_id' => 5,
            'password' => bcrypt('12341234')
        ]);


        //table pilar
        Pilar::create([
            'name' => 'sosial',
        ]);
        Pilar::create([
            'name' => 'ekonomi',
        ]);
        Pilar::create([
            'name' => 'lingkungan',
        ]);
        Pilar::create([
            'name' => 'hukum',
        ]);
        
        // tabel tujuan
        //pilar sosial (1-5) 
        Tujuan::create([
            'pilar_id' => 1,
            'kode_tujuan' => '1',
            'name' => 'Tanpa Kemiskinan',
            'deskripsi' => 'Mengakhiri Kemiskinan dalam Segala Bentuk Dimanapun'
        ]);
        Tujuan::create([
            'pilar_id' => 1,
            'kode_tujuan' => '2',  
            'name' => 'Tanpa Kelaparan',
            'deskripsi' => 'Menghilangkan Kelaparan, Mencapai Ketahanan Pangan dan Gizi yang Baik, serta Meningkatkan Pertanian Berkelanjutan'
        ]);
        Tujuan::create([
            'pilar_id' => 1,
            'kode_tujuan' => '3',
            'name' => 'Kehidupan sehat dan sejahtera',
            'deskripsi' => 'Menjamin Kehidupan Yang Sehat dan Meningkatkan Kesejahteraan Seluruh Penduduk Semua Usia'
        ]);
        Tujuan::create([
            'pilar_id' => 1,
            'kode_tujuan' => '4',
            'name' => 'Pendidikan Berkualitas',
            'deskripsi' => 'Menjamin Kualitas Pendidikan yang Inklusif dan Merata serta Meningkatkan Kesempatan Belajar Sepanjang Hayat untuk Semua'
        ]);
        Tujuan::create([
            'pilar_id' => 1,
            'kode_tujuan' => '5',
            'name' => 'Kesetaraan Gender',
            'deskripsi' => 'Mencapai Kesetaraan Gender dan Memberdayakan Kaum Perempuan'
        ]);
        Tujuan::create([
            'pilar_id' => 3,
            'kode_tujuan' => '6',
            'name' => 'air bersih dan sanitasi layak',
            'deskripsi' => 'Menjamin Ketersediaan serta Pengelolaan Air Bersih dan Sanitasi yang Berkelanjutan untuk Semua'
        ]);
        Tujuan::create([
            'pilar_id' => 2,
            'kode_tujuan' => '7',
            'name' => 'energi bersih dan terjangkau',
            'deskripsi' => 'Menjamin Akses Energi yang Terjangkau, Andal, Berkelanjutan dan Modern untuk Semua'
        ]);
        Tujuan::create([
            'pilar_id' => 2,
            'kode_tujuan' => '8',
            'name' => 'pekerjaan layak dan pertumbuhan ekonomi',
            'deskripsi' => 'Meningkatkan Pertumbuhan Ekonomi yang Inklusif dan Berkelanjutan, Kesempatan Kerja yang Produktif dan Menyeluruh, serta Pekerjaan yang Layak untuk Semua'
        ]);
        Tujuan::create([
            'pilar_id' => 2,
            'kode_tujuan' => '9',
            'name' => 'industri, inovasi dan infrastruktur',
            'deskripsi' => 'Membangun Infrastruktur yang Tangguh, Meningkatkan Industri Inklusif dan Berkelanjutan, serta Mendorong Inovasi'
        ]);
        Tujuan::create([
            'pilar_id' => 2,
            'kode_tujuan' => '10',
            'name' => 'berkurangnya kesenjangan',
            'deskripsi' => 'Mengurangi Kesenjangan Intra dan Antarnegara'
        ]);
        Tujuan::create([
            'pilar_id' => 3,
            'kode_tujuan' => '11',
            'name' => 'KOTA DAN PEMUKIMAN YANG BERKELANJUTAN',
            'deskripsi' => 'Menjadikan Kota dan Permukiman Inklusif, Aman, Tangguh dan Berkelanjutan'
        ]);
        Tujuan::create([
            'pilar_id' => 3,
            'kode_tujuan' => '12',
            'name' => 'KONSUMSI DAN PRODUKSI YANG BERTANGGUNG JAWAB',
            'deskripsi' => 'Menjamin Pola Produksi dan Konsumsi yang Berkelanjutan'
        ]);
        Tujuan::create([
            'pilar_id' => 3,
            'kode_tujuan' => '13',
            'name' => 'PENANGANAN PERUBAHAN IKLIM',
            'deskripsi' => 'Mengambil Tindakan Cepat untuk Mengatasi Perubahan Iklim dan Dampaknya'
        ]);
        Tujuan::create([
            'pilar_id' => 3,
            'kode_tujuan' => '14',
            'name' => 'EKOSISTEM LAUTAN',
            'deskripsi' => 'Melestarikan dan Memanfaatkan Secara Berkelanjutan Sumber Daya Kelautan dan Samudera untuk Pembangunan Berkelanjutan'
        ]);
        Tujuan::create([
            'pilar_id' => 3,
            'kode_tujuan' => '15',
            'name' => 'EKOSISTEM DARATAN',
            'deskripsi' => 'Melindungi, Merestorasi dan Meningkatkan Pemanfaatan Berkelanjutan Ekosistem Daratan, Mengelola Hutan Secara Lestari, Menghentikan Penggurunan, Memulihkan Degradasi lahan, serta Menghentikan Kehilangan Keanekaragaman Hayati'
        ]);
        Tujuan::create([
            'pilar_id' => 4,
            'kode_tujuan' => '16',
            'name' => 'PERDAMAIAN, KEADILAN DAN KELEMBAGAAN YANG TANGGUH',
            'deskripsi' => 'Menguatkan Masyarakat yang Inklusif dan Damai untuk Pembangunan Berkelanjutan, Menyediakan Akses Keadilan untuk Semua, dan Membangun Kelembagaan yang Efektif, Akuntabel, dan Inklusif di Semua Tingkatan'
        ]);
        Tujuan::create([
            'pilar_id' => 2,
            'kode_tujuan' => '17',
            'name' => 'KEMITRAAN UNTUK MENCAPAI TUJUAN',
            'deskripsi' => 'Menguatkan Sarana Pelaksanaan dan Merevitalisasi Kemitraan Global untuk Pembangunan Berkelanjutan'
        ]);
        


        // tabel target
        //tujuan 1
        Target::create([
            'tujuan_id' => 1,
            'kode_target' => '1.1',
            'deskripsi' => 'Pada tahun 2030, mengentaskan kemiskinan ekstrim bagi semua orang yang saat ini berpendapatan kurang dari 1,25 dolar amerika per hari.'
        ]);
        Target::create([
            'tujuan_id' => 1,
            'kode_target' => '1.2',
            'deskripsi' => 'Pada tahun 2030, mengurangi setidaknya setengah proporsi laki-laki, perempuan dan anak-anak dari semua usia, yang hidup dalam kemiskinan di semua dimensi, sesuai dengan definisi Nasional.'
        ]);
        Target::create([
            'tujuan_id' => 1,
            'kode_target' => '1.3',
            'deskripsi' => 'Menerapkan secara Nasional sistem dan upaya perlindungan sosial yang tepat bagi semua, termasuk kelompok yang paling miskin, dan pada tahun 2030 mencapai cakupan substansial bagi kelompok miskin dan rentan.'
        ]);
        Target::create([
            'tujuan_id' => 1,
            'kode_target' => '1.4',
            'deskripsi' => 'Pada tahun 2030, menjamin bahwa semua laki-laki dan perempuan, khususnya masyarakat miskin dan rentan, memiliki hak yang sama terhadap sumber daya ekonomi, serta akses terhadap pelayanan dasar, kepemilikan dan kontrol atas tanah dan bentuk kepemilikan lain, warisan, sumber daya alam, teknologi baru, dan jasa keuangan yang tepat, termasuk keuangan mikro.'
        ]);
        Target::create([
            'tujuan_id' => 1,
            'kode_target' => '1.5',
            'deskripsi' => 'Pada tahun 2030, membangun ketahanan masyarakat miskin dan mereka yang berada dalam kondisi rentan, dan mengurangi kerentanan mereka terhadap kejadian ekstrim terkait iklim dan guncangan ekonomi, sosial, lingkungan, dan bencana.'
        ]);
        //tujuan 2
        Target::create([
            'tujuan_id' => 2,
            'kode_target' => '2.1',
            'deskripsi' => 'Pada tahun 2030, menghilangkan kelaparan dan menjamin akses bagi semua orang, khususnya orang miskin dan mereka yang berada dalam kondisi rentan, termasuk bayi, terhadap makanan yang aman, bergizi, dan cukup sepanjang tahun.'
        ]);
        Target::create([
            'tujuan_id' => 2,
            'kode_target' => '2.2',
            'deskripsi' => 'Pada tahun 2030, menghilangkan segala bentuk kekurangan gizi, termasuk pada tahun 2025 mencapai target yang disepakati secara internasional untuk anak pendek dan kurus di bawah usia 5 tahun, dan memenuhi kebutuhan gizi remaja perempuan, ibu hamil dan menyusui, serta manula.'
        ]);
        Target::create([
            'tujuan_id' => 2,
            'kode_target' => '2.3',
            'deskripsi' => 'Pada tahun 2030, menggandakan produktivitas pertanian dan pendapatan produsen makanan skala kecil, khususnya perempuan, masyarakat penduduk asli, keluarga petani, penggembala dan nelayan, termasuk melalui akses yang aman dan sama terhadap lahan, sumber daya produktif, dan input lainnya, pengetahuan, jasa keuangan, pasar, dan peluang nilai tambah, dan pekerjaan non-pertanian.'
        ]);
        Target::create([
            'tujuan_id' => 2,
            'kode_target' => '2.4',
            'deskripsi' => 'Pada tahun 2030, menjamin sistem produksi pangan yang berkelanjutan dan menerapkan praktik pertanian tangguh yang meningkat produksi dan produktivitas, membantu menjaga eskosistem, memperkuat kapasistas adaptasi terhadap perubahan iklim, cuaca ekstrim, kekeringan, banjir, dan bencana lainnya, serta secara progresif memperbaiki kualitas tanah dan lahan.'
        ]);
        Target::create([
            'tujuan_id' => 2,
            'kode_target' => '2.5',
            'deskripsi' => 'Pada tahun 2030, mengelola keragaman genetik benih, tanaman budidaya dan hewan ternak dan peliharaan dan spesies liar terkait, termasuk melalui bank benih dan tanaman yang dikelola dan dianekaragamkan dengan baik di tingkat nasional, regioanl dana internasional, serta meningkatkan akses terhadap pembagian keuntungan yang adil dan merata, hasil dari pemanfaatan sumber daya genetik dan pengetahuan tradisional terkait, sebagaimana yang disepakati secara internasional.'
        ]);
        Target::create([
            'tujuan_id' => 2,
            'kode_target' => '2.a',
            'deskripsi' => 'Meningkatkan investasi, termasuk melalui kerjasama internasional yang kuat, dalam infrastruktur pedesaan, layanan kajian dan perluasan pertanian, pengembangan teknologi dan bank gen untuk tanaman dan ternak, untuk meningkatkan kapasitas produktif pertanian di negara berkembang, khususnya negara kurang berkembang.'
        ]);
        Target::create([
            'tujuan_id' => 2,
            'kode_target' => '2.c',
            'deskripsi' => 'engadosi langkah-langkah unutk menjamin berfungsinya pasar komoditas pangan serta turunannya dengan tepat, dan memfasilitasi pada waktu yang tepat akses terhadap informasi pasar, termasuk informasi cadangan, untuk membantu membatasi volatilitas harga pangan yang ekstrim.'
        ]);
        //tujuan 3
        Target::create([
            'tujuan_id' => 3,
            'kode_target' => '3.1',
            'deskripsi' => 'Pada tahun 2030, mengurangi rasio angka kematian ibu hingga kurang dari 70 per 100.000 kelahiran hidup.'
        ]);
        Target::create([
            'tujuan_id' => 3,
            'kode_target' => '3.2',
            'deskripsi' => 'Pada tahun 2030, mengakhiri kematian bayi baru lahir dan balita yang dapat dicegah, dengan seluruh negara berusaha menurunkan Angka Kematian Neonatal setidaknya hingga 12 per 1.000 KH (Kelahiran Hidup) dan Angka Kematian Balita 25 per 1.000.'
        ]);
        Target::create([
            'tujuan_id' => 3,
            'kode_target' => '3.3',
            'deskripsi' => 'Pada tahun 2030, mengakhiri epidemi AIDS, tuberkulosis, malaria, dan penyakit tropis yang terabaikan, dan memerangi hepatitis, penyakit bersumber air, serta penyakit menular lainnya.'
        ]);
        Target::create([
            'tujuan_id' => 3,
            'kode_target' => '3.4',
            'deskripsi' => 'Pada tahun 2030, mengurangi hingga sepertiga angka kematian dini akibat penyakit tidak menular, melalui pencegahan dan pengobatan, serta meningkatkan kesehatan mental dan kesejahteraan.'
        ]);
        Target::create([
            'tujuan_id' => 3,
            'kode_target' => '3.5',
            'deskripsi' => 'Memperkuat pencegahan dan pengobatan penyalahgunaan zat, termasuk penyalahgunaan narkotika dan penggunaan alkohol yang membahayakan.'
        ]);
        Target::create([
            'tujuan_id' => 3,
            'kode_target' => '3.7',
            'deskripsi' => 'Pada tahun 2030, menjamin akses universal terhadap layanan kesehatan seksual dan reproduksi, termasuk keluarga berencana, informasi dan pendidikan, dan integrasi kesehatan reproduksi ke dalam strategi dan program Nasional.'
        ]);
        Target::create([
            'tujuan_id' => 3,
            'kode_target' => '3.8',
            'deskripsi' => 'Mencapai cakupan kesehatan universal, termasuk perlindungan risiko keuangan, akses terhadap pelayanan kesehatan dasar yang baik, dan akses terhadap obat- obatan dan vaksin dasar yang aman, efektif, berkualitas, dan terjangkau bagi semua orang.'
        ]);
        Target::create([
            'tujuan_id' => 3,
            'kode_target' => '3.a',
            'deskripsi' => 'Memperkuat pelaksanaan the Framework Convention on Tobacco Control WHO di seluruh negara sebagai langkah yang tepat.'
        ]);
        Target::create([
            'tujuan_id' => 3,
            'kode_target' => '3.b',
            'deskripsi' => 'Mendukung penelitian dan pengembangan vaksin dan obat penyakit menular dan tidak menular yang terutama berpengaruh terhadap negara berkembang, menyediakan akses terhadap obat dan vaksin dasar yang terjangkau, sesuai the Doha Declaration tentang the TRIPS Agreement and Public Health, yang menegaskan hak negara berkembang untuk menggunakan secara penuh ketentuan dalam Kesepakatan atas Aspek-Aspek Perdagangan dari Hak Kekayaan Intelektual terkait keleluasaan untuk melindungi kesehatan masyarakat, dan khususnya, menyediakan akses obat bagi semua.'
        ]);
        Target::create([
            'tujuan_id' => 3,
            'kode_target' => '3.c',
            'deskripsi' => 'Meningkatkan secara signifikan pembiayaan kesehatan dan rekrutmen, pengembangan, pelatihan, dan retensi tenaga kesehatan di negara berkembang, khususnya negara kurang berkembang, dan negara berkembang pulau kecil.'
        ]);
        //tujuan 4
        Target::create([
            'tujuan_id' => 4,
            'kode_target' => '4.1',
            'deskripsi' => 'Pada tahun 2030, menjamin bahwa semua anak perempuan dan laki- laki menyelesaikan pendidikan dasar dan menengah tanpa dipungut biaya, setara, dan berkualitas, yang mengarah pada capaian pembelajaran yang relevan dan efektif.'
        ]);
        Target::create([
            'tujuan_id' => 4,
            'kode_target' => '4.2',
            'deskripsi' => 'Pada tahun 2030, menjamin bahwa semua anak perempuan dan laki- laki menyelesaikan pendidikan dasar dan menengah tanpa dipungut biaya, setara, dan berkualitas, yang mengarah pada capaian pembelajaran yang relevan dan efektif.'
        ]);
        Target::create([
            'tujuan_id' => 4,
            'kode_target' => '4.3',
            'deskripsi' => 'Pada tahun 2030, menjamin akses yang sama bagi semua perempuan dan laki-laki, terhadap pendidikan teknik, kejuruan dan pendidikan tinggi, termasuk universitas, yang terjangkau dan berkualitas.'
        ]);
        Target::create([
            'tujuan_id' => 4,
            'kode_target' => '4.4',
            'deskripsi' => 'Pada tahun 2030, meningkatkan secara signifikan jumlah pemuda dan orang dewasa yang memiliki keterampilan yang relevan, termasuk keterampilan teknik dan kejuruan, untuk pekerjaan, pekerjaan yang layak dan kewirausahaan.'
        ]);
        Target::create([
            'tujuan_id' => 4,
            'kode_target' => '4.5',
            'deskripsi' => 'Pada tahun 2030, menghilangkan disparitas gender dalam pendidikan, dan menjamin akses yang sama untuk semua tingkat pendidikan dan pelatihan kejuruan, bagi masyarakat rentan termasuk penyandang cacat, masyarakat penduduk asli, dan anak-anak dalam kondisi rentan.'
        ]);
        Target::create([
            'tujuan_id' => 4,
            'kode_target' => '4.6',
            'deskripsi' => 'Pada tahun 2030, menjamin bahwa semua remaja dan proporsi kelompok dewasa tertentu, baik laki-laki maupun perempuan, memiliki kemampuan literasi dan numerasi.'
        ]);
        Target::create([
            'tujuan_id' => 4,
            'kode_target' => '4.a',
            'deskripsi' => 'Membangun dan meningkatkan fasilitas pendidikan yang ramah anak, ramah penyandang cacat dan gender, serta menyediakan lingkungan belajar yang aman, anti kekerasan, inklusif dan efektif bagi semua.'
        ]);
        Target::create([
            'tujuan_id' => 4,
            'kode_target' => '4.c',
            'deskripsi' => 'Pada tahun 2030, secara signifikan meningkatkan pasokan guru yang berkualitas, termasuk melalui kerjasama interNasional dalam pelatihan guru di negara berkembang, terutama negara kurang berkembang, dan negara berkembang kepulauan kecil.'
        ]);
        //tujuan 5
        Target::create([
            'tujuan_id' => 5,
            'kode_target' => '5.5',
            'deskripsi' => 'Menjamin partisipasi penuh dan efektif, dan kesempatan yang sama bagi perempuan untuk memimpin di semua tingkat pengambilan keputusan dalam kehidupan politik, ekonomi, dan masyarakat.'
        ]);
        Target::create([
            'tujuan_id' => 5,
            'kode_target' => '5.6',
            'deskripsi' => 'Menjamin akses universal terhadap kesehatan seksual dan reproduksi, dan hak reproduksi seperti yang telah disepakati sesuai dengan Programme of Action of the International Conference on Population and Development and the Beijing Platform serta dokumen-dokumen hasil reviu dari konferensi-konferensi tersebut.'
        ]);
        Target::create([
            'tujuan_id' => 5,
            'kode_target' => '5.a',
            'deskripsi' => 'Melakukan reformasi untuk memberi hak yang sama kepada perempuan terhadap sumber daya ekonomi, serta akses terhadap kepemilikan dan kontrol atas tanah dan bentuk kepemilikan lain, jasa keuangan, warisan dan sumber daya alam, sesuai dengan hukum Nasional.'
        ]);
        Target::create([
            'tujuan_id' => 5,
            'kode_target' => '5.b',
            'deskripsi' => 'Meningkatkan penggunaan teknologi yang memampukan, khususnya teknologi informasi dan komunikasi untuk meningkatkan pemberdayaan perempuan.'
        ]);
        //tujuan 6
        Target::create([
            'tujuan_id' => 6,
            'kode_target' => '6.1',
            'deskripsi' => 'Pada tahun 2030, mencapai akses universal dan merata terhadap air minum yang aman dan terjangkau bagi semua.'
        ]);
        Target::create([
            'tujuan_id' => 6,
            'kode_target' => '6.2',
            'deskripsi' => 'Pada tahun 2030, mencapai akses terhadap sanitasi dan kebersihan yang memadai dan merata bagi semua, dan menghentikan praktik buang air besar di tempat terbuka, memberikan perhatian khusus pada kebutuhan kaum perempuan, serta kelompok masyarakat rentan.'
        ]);
        Target::create([
            'tujuan_id' => 6,
            'kode_target' => '6.3',
            'deskripsi' => 'Pada tahun 2030, meningkatkan kualitas air dengan mengurangi polusi, menghilangkan pembuangan, dan meminimalkan pelepasan material dna bahan kimia berbahaya, mengurangi setengaha proporsi air limbah yang tidak diolah, dan secara signifikan meningkatkaan daur ulang,s erta penggunaan kembali barang daur ulang yang aman secara global.'
        ]);
        Target::create([
            'tujuan_id' => 6,
            'kode_target' => '6.4',
            'deskripsi' => 'Pada tahun 2030, secara signifikan meningkatkan efisiensi penggunaan air di semua sektor, dan menjamin penggunaan dan pasokan air tawar yang berkelanjutan untuk mengatasi kelangkaan air, dan secara signifikan mengurangi jumlah orang yang menderita akibat kelangkaan air.'
        ]);
        Target::create([
            'tujuan_id' => 6,
            'kode_target' => '6.5',
            'deskripsi' => 'Pada tahun 2030, menerapkan pengelolaan sumber daya air terpadu di semua tingkatan, termasuk melalui kerjasama lintas batas sesuai kepantasan.'
        ]);
        Target::create([
            'tujuan_id' => 6,
            'kode_target' => '6.6',
            'deskripsi' => 'Pada tahun 2020, melindungi dan merestorasi ekosistem terkait sumber daya air, termasuk pegunungan, hutan, lahan basah, sungai, air tanah, dan danau.'
        ]);
        //tujuan 7
        Target::create([
            'tujuan_id' => 7,
            'kode_target' => '7.1',
            'deskripsi' => 'Pada tahun 2030, menjamin akses universal layanan energi yang terjangkau, andal dan modern.'
        ]);
        // tujuan 8
        Target::create([
            'tujuan_id' => 8,
            'kode_target' => '8.1',
            'deskripsi' => 'Mempertahankan pertumbuhan ekonomi per kapita sesuai dengan kondisi Nasional dan, khususnya, setidaknya 7 persen pertumbuhan produk domestik bruto per tahun di negara kurang berkembang.'
        ]);
        Target::create([
            'tujuan_id' => 8,
            'kode_target' => '8.2',
            'deskripsi' => 'Mencapai tingkat produktivitas ekonomi yang lebih tinggi, melalui diversifikasi, peningkatan dan inovasi teknologi, termasuk melalui fokus pada sektor yang memberi nilai tambah tinggi dan padat karya.'
        ]);
        Target::create([
            'tujuan_id' => 8,
            'kode_target' => '8.3',
            'deskripsi' => 'Mempromosikan kebijakan pembangunan yang mendukung kegiatan produktif, penciptaan lapangan kerja layak, kewirausahaan, kreativitas dan inovasi, dan mendorong formalisasi dan pertumbuhan usaha mikro, kecil, dan menengah, termasuk melalui akses terhadap jasa keuangan.'
        ]);
        Target::create([
            'tujuan_id' => 8,
            'kode_target' => '8.5',
            'deskripsi' => 'Pada tahun 2030, memberikan pekerjaan penuh dan produktif yang layak bagi semua wanita dan pria, termasuk bagi orang-orang muda dan penyandang disabilitas, dan upah yang sama untuk pekerjaan yang sama nilainya.'
        ]);
        Target::create([
            'tujuan_id' => 8,
            'kode_target' => '8.6',
            'deskripsi' => 'Pada tahun 2020, secara substansial mengurangi proporsi usia muda yang tidak bekerja, tidak menempuh pendidikan atau pelatihan.'
        ]);
        Target::create([
            'tujuan_id' => 8,
            'kode_target' => '8.7',
            'deskripsi' => 'Mengambil tindakan cepat dan untuk memberantas kerja paksa, mengakhiri perbudakan dan penjualan manusia, mengamankan larangan dan penghapusan bentuk terburuk tenaga kerja anak, termasuk perekrutan dan penggunaan tentara anak-anak, dan pada tahun 2025 mengakhiri tenaga kerja anak dalam segala bentuknya.'
        ]);
        Target::create([
            'tujuan_id' => 8,
            'kode_target' => '8.9',
            'deskripsi' => 'Pada tahun 2030, menyusun dan melaksanakan kebijakan untuk mempromosikan pariwisata berkelanjutan yang menciptakan lapangan kerja dan mempromosikan budaya dan produk lokal.'
        ]);
        Target::create([
            'tujuan_id' => 8,
            'kode_target' => '8.10',
            'deskripsi' => 'Memperkuat kapasitas lembaga keuangan domestik untuk mendorong dan memperluas akses terhadap perbankan, asuransi dan jasa keuangan bagi semua.'
        ]);
        //tujuan 9
        Target::create([
            'tujuan_id' => 9,
            'kode_target' => '9.1',
            'deskripsi' => 'Mengembangkan infrastruktur yang berkualitas, andal, berkelanjutan dan tangguh, termasuk infrastruktur regional dan lintas batas, untuk mendukung pembangunan ekonomi dan kesejahteraan manusia, dengan fokus pada akses yang terjangkau dan merata bagi semua.'
        ]);
        Target::create([
            'tujuan_id' => 9,
            'kode_target' => '9.2',
            'deskripsi' => 'Mempromosikan industrialisasi inklusif dan berkelanjutan, dan pada tahun 2030, secara signifikan meningkatkan proporsi industri dalam lapangan kerja dan produk domestik bruto, sejalan dengan kondisi Nasional, dan meningkatkan dua kali lipat proporsinya di negara kurang berkembang.'
        ]);
        Target::create([
            'tujuan_id' => 9,
            'kode_target' => '9.4',
            'deskripsi' => 'Pada tahun 2030, meningkatkan infrastruktur dan retrofit industri agar dapat berkelanjutan, dengan peningkatan efisiensi penggunaan sumberdaya dan adopsi yang lebih baik dari teknologi dan proses industri bersih dan ramah lingkungan, yang dilaksanakan semua negara sesuai kemampuan masing-masing.'
        ]);
        // tujuan 10
        Target::create([
            'tujuan_id' => 10,
            'kode_target' => '10.1',
            'deskripsi' => 'Pada tahun 2030, secara progresif mencapai dan mempertahankan pertumbuhan pendapatan penduduk yang berada di bawah 40% dari populasi pada tingkat yang lebih tinggi dari rata-rata Nasional.'
        ]);
        Target::create([
            'tujuan_id' => 10,
            'kode_target' => '10.2',
            'deskripsi' => 'Pada tahun 2030, memberdayakan dan meningkatkan inklusi sosial, ekonomi dan politik bagi semua, terlepas dari usia, jenis kelamin, difabilitas, ras, suku, asal, agama atau kemampuan ekonomi atau status lainnya.'
        ]);
        Target::create([
            'tujuan_id' => 10,
            'kode_target' => '10.3',
            'deskripsi' => 'Menjamin kesempatan yang sama dan mengurangi kesenjangan hasil, termasuk dengan menghapus hukum, kebijakan dan praktik yang diskriminatif, dan mempromosikan legislasi, kebijakan dan tindakan yang tepat terkait legislasi dan kebijakan tersebut.'
        ]);
        Target::create([
            'tujuan_id' => 10,
            'kode_target' => '10.4',
            'deskripsi' => 'Mengadopsi kebijakan, terutama kebijakan fiskal, upah dan perlindungan sosial, serta secara progresif mencapai kesetaraan yang lebih besar.'
        ]);
        //tujuan 11
        Target::create([
            'tujuan_id' => 11,
            'kode_target' => '11.1',
            'deskripsi' => 'Pada tahun 2030, menjamin akses bagi semua terhadap perumahan yang layak, aman, terjangkau, dan pelayanan dasar, serta menata kawasan kumuh.'
        ]);
        Target::create([
            'tujuan_id' => 11,
            'kode_target' => '11.2',
            'deskripsi' => 'Pada tahun 2030, menyediakan akses terhadap sistem transportasi yang aman, terjangkau, mudah diakses dan berkelanjutan untuk semua, meningkatkan keselamatan lalu lintas, terutama dengan memperluas jangkauan transportasi umum, dengan memberi perhatian khusus pada kebutuhan mereka yang berada dalam situasi rentan, perempuan, anak, penyandang difabilitas dan orang tua.'
        ]);
        Target::create([
            'tujuan_id' => 11,
            'kode_target' => '11.3',
            'deskripsi' => 'Pada tahun 2030, memperkuat urbanisasi yang inklusif dan berkelanjutan serta kapasitas partisipasi, perencanaan penanganan permukiman yang berkelanjutan dan terintegrasi di semua negara.'
        ]);
        Target::create([
            'tujuan_id' => 11,
            'kode_target' => '11.4',
            'deskripsi' => 'Mempromosikan dan menjaga warisan budaya dunia dan warisan alam dunia.'
        ]);
        Target::create([
            'tujuan_id' => 11,
            'kode_target' => '11.5',
            'deskripsi' => 'Pada tahun 2030, secara signifikan mengurangi jumlah kematian dan jumlah orang terdampak, dan secara substansial mengurangi kerugian ekonomi relatif terhadap PDB global yang disebabkan oleh bencana, dengan fokus melindungi orang miskin dan orang-orang dalam situasi rentan.'
        ]);
        Target::create([
            'tujuan_id' => 11,
            'kode_target' => '11.6',
            'deskripsi' => 'Pada tahun 2030, mengurangi dampak lingkungan perkotaan per kapita yang merugikan, termasuk dengan memberi perhatian khusus pada kualitas udara, termasuk penanganan sampah kota.'
        ]);
        Target::create([
            'tujuan_id' => 11,
            'kode_target' => '11.7',
            'deskripsi' => 'Pada tahun 2030, menyediakan ruang  publik dan ruang terbuka hijau yang aman, inklusif dan mudah dijangkau terutama untuk perempuan dan anak, manula dan penyandang difabilitas.'
        ]);
        Target::create([
            'tujuan_id' => 11,
            'kode_target' => '11.a',
            'deskripsi' => 'Mendukung hubungan ekonomi, sosial, dan lingkungan antara urban, pinggiran kota, dan perdesaan dengan memperkuat perencanaan pembangunan Nasional dan daerah.'
        ]);
        Target::create([
            'tujuan_id' => 11,
            'kode_target' => '11.b',
            'deskripsi' => 'Pada tahun 2020, meningkatkan secara substansial jumlah kota dan permukiman yang mengadopsi dan mengimplementasi kebijakan dan perencanaan yang terintegrasi tentang penyertaan, efisiensi sumber daya, mitigasi dan adaptasi terhadap perubahan iklim, ketahanan terhadap bencana, serta mengembangkan dan mengimplementasikan penangan holistik risiko bencana di semua lini, sesuai dengan the Seandai Framework for Disaster Risk Reduction 2015-2030.'
        ]);
        Target::create([
            'tujuan_id' => 11,
            'kode_target' => '11.c',
            'deskripsi' => 'Memberikan dukungan kepada negara-negara kurang berkembang, melalui bantuan keuangan dan teknis, dalam membangun bangunan yang berkelanjutan dan tangguh, dengan memfaatkan bahan lokal.'
        ]);
        // tujuan 12
        Target::create([
            'tujuan_id' => 12,
            'kode_target' => '12.3',
            'deskripsi' => 'Pada tahun 2030, mengurangi separuh jumlah dari sampah pangan global perkapita pada tingkat retail dan konsumen dan mengurangi kerugian makanan sepanjang produksi dan rantai penawaran, termasuk kerugian paska panen.'
        ]);
        Target::create([
            'tujuan_id' => 12,
            'kode_target' => '12.4',
            'deskripsi' => 'Pada tahun 2020 mencapai pengelolaan berwawasan lingkungan, atas  bahan kimia dan semua jenis limbah  di sepanjang siklus hidupnya, sesuai kerangka kerja internasional yang disepakati dan secara signifikan mengurangi pelepasan bahan-bahan kimia dan limbah tersebut ke udara, air, dan tanah untuk meminimalkan dampak buruk terhadap kesehatan manusia dan lingkungan.'
        ]);
        Target::create([
            'tujuan_id' => 12,
            'kode_target' => '12.5',
            'deskripsi' => 'Pada tahun 2030, secara substansial mengurangi produksi limbah melalui pencegahan, pengurangan, daur ulang, dan penggunaan kembali.'
        ]);
        Target::create([
            'tujuan_id' => 12,
            'kode_target' => '12.6',
            'deskripsi' => 'Mendorong perusahaan, terutama perusahaan besar dan transnasional, untuk mengadopsi praktek-praktek berkelanjutan dan mengintegrasikan informasi keberlanjutan dalam siklus pelaporan mereka.'
        ]);
        Target::create([
            'tujuan_id' => 12,
            'kode_target' => '12.8',
            'deskripsi' => 'Pada tahun 2030, menjamin bahwa masyarakat di mana pun memiliki informasi yang relevan dan kesadaran terhadap pembangunan berkelanjutan dan gaya hidup yang selaras dengan alam.'
        ]);
        Target::create([
            'tujuan_id' => 12,
            'kode_target' => '12.b',
            'deskripsi' => 'Mengembangkan dan mengimplementasikan alat untuk memonitor dampak pembangunan berkelanjutan untuk pariwisata yang berkelanjutan yang dapat menciptakan lapangan kerja dan mendukung budaya dan produk lokal.'
        ]);
        //tujuan 13
        Target::create([
            'tujuan_id' => 13,
            'kode_target' => '13.1',
            'deskripsi' => 'Memperkuat kapasitas ketahanan dan adaptasi terhadap bahaya terkait iklim dan bencana alam di semua negara.'
        ]);
        Target::create([
            'tujuan_id' => 13,
            'kode_target' => '13.2',
            'deskripsi' => 'Mengintegrasikan tindakan antisipasi perubahan iklim ke dalam kebijakan, strategi dan perencanaan Nasional.'
        ]);
        Target::create([
            'tujuan_id' => 13,
            'kode_target' => '13.3',
            'deskripsi' => 'Meningkatkan pendidikan, penumbuhan kesadaran, serta kapasitas manusia dan kelembagaan terkait mitigasi, adaptasi, pengurangan dampak dan peringatan dini perubahan iklim.'
        ]);
        // tujuan 14
        Target::create([
            'tujuan_id' => 14,
            'kode_target' => '14.1',
            'deskripsi' => 'Pada tahun 2025, mencegah dan secara signifikan mengurangi semua jenis pencemaran laut, khususnya dari kegiatan berbasis lahan, termasuk sampah laut dan polusi nutrisi.'
        ]);
        Target::create([
            'tujuan_id' => 14,
            'kode_target' => '14.2',
            'deskripsi' => 'Pada tahun 2020, mengelola dan melindungi ekosistem laut dan pesisir secara berkelanjutan untuk menghindari dampak buruk yang signifikan, termasuk dengan memperkuat ketahanannya, dan melakukan restorasi untuk mewujudkan lautan yang sehat dan produktif.'
        ]);
        Target::create([
            'tujuan_id' => 14,
            'kode_target' => '14.5',
            'deskripsi' => 'Pada tahun 2020, melestarikan setidaknya 10 persen dari wilayah pesisir dan laut, konsisten dengan hukum nasional dan internasional dan berdasarkan informasi ilmiah terbaik yang tersedia.'
        ]);
        Target::create([
            'tujuan_id' => 14,
            'kode_target' => '14.6',
            'deskripsi' => 'Pada tahun 2020, melarang bentuk-bentuk subsidi perikanan tertentu yang berkontribusi terhadap kelebihan kapasitas dan penangkapan ikan berlebihan, menghilangkan subsidi yang berkontribusi terhadap penangkapan ikan ilegal, yang tidak dilaporkan & tidak diatur dan menahan jenis subsidi baru, dengan mengakui bahwa perlakuan khusus dan berbeda yang tepat dan efektif untuk negara berkembang & negara kurang berkembang harus menjadi bagian integral dari negosiasi subsidi perikanan pada the World Trade Organization (WTO).'
        ]);
        Target::create([
            'tujuan_id' => 14,
            'kode_target' => '14.b',
            'deskripsi' => 'Menyediakan akses untuk nelayan skala kecil (small-scale artisanal fishers) terhadap sumber daya laut dan pasar.'
        ]);
        // tujuan 15
        Target::create([
            'tujuan_id' => 15,
            'kode_target' => '15.1',
            'deskripsi' => 'Pada tahun 2020, menjamin pelestarian, restorasi dan pemanfaatan berkelanjutan dari ekosistem daratan dan perairan darat serta jasa lingkungannya, khususnya ekosistem hutan, lahan basah, pegunungan dan lahan kering, sejalan dengan kewajiban berdasarkan perjanjian internasional.'
        ]);
        Target::create([
            'tujuan_id' => 15,
            'kode_target' => '15.2',
            'deskripsi' => 'Pada tahun 2020, meningkatkan pelaksanaan pengelolaan semua jenis hutan secara berkelanjutan, menghentikan deforestasi, merestorasi hutan yang terdegradasi dan meningkatkan secara signifikan aforestasi dan reforestasi secara global.'
        ]);
        Target::create([
            'tujuan_id' => 15,
            'kode_target' => '15.3',
            'deskripsi' => 'Pada tahun 2020, menghentikan penggurunan, memulihkan lahan dan tanah kritis, termasuk lahan yang terkena penggurunan, kekeringan dan banjir, dan berusaha mencapai dunia yang bebas dari lahan terdegradasi.'
        ]);
        Target::create([
            'tujuan_id' => 15,
            'kode_target' => '15.4',
            'deskripsi' => 'Pada tahun 2030, menjamin pelestarian ekosistem pegunungan, termasuk keanekaragaman hayatinya, untuk meningkatkan kapasitasnya memberikan manfaat yang sangat penting bagi pembangunan berkelanjutan.'
        ]);
        // tujuan 16
        Target::create([
            'tujuan_id' => 16,
            'kode_target' => '16.1',
            'deskripsi' => 'Secara signifikan mengurangi segala bentuk kekerasan dan terkait angka kematian dimanapun.'
        ]);
        Target::create([
            'tujuan_id' => 16,
            'kode_target' => '16.2',
            'deskripsi' => 'Menghentikan perlakuan kejam, eksploitasi, perdagangan, dan segala bentuk kekerasan dan penyiksaan terhadap anak.'
        ]);
        Target::create([
            'tujuan_id' => 16,
            'kode_target' => '16.3',
            'deskripsi' => 'Menggalakkan negara berdasarkan hukum di tingkat Nasional dan interNasional dan menjamin akses yang sama terhadap keadilan bagi semua.'
        ]);
        Target::create([
            'tujuan_id' => 16,
            'kode_target' => '16.5',
            'deskripsi' => 'Secara substansial mengurangi korupsi dan penyuapan dalam segala bentuknya.'
        ]);
        Target::create([
            'tujuan_id' => 16,
            'kode_target' => '16.6',
            'deskripsi' => 'Mengembangkan lembaga yang efektif, akuntabel, dan transparan di semua tingkat.'
        ]);
        Target::create([
            'tujuan_id' => 16,
            'kode_target' => '16.7',
            'deskripsi' => 'Menjamin pengambilan keputusan yang responsif, inklusif, partisipatif dan representatif di setiap tingkatan.'
        ]);
        Target::create([
            'tujuan_id' => 16,
            'kode_target' => '16.9',
            'deskripsi' => 'Pada tahun 2030, memberikan identitas yang syah bagi semua, termasuk pencatatan kelahiran.'
        ]);
        Target::create([
            'tujuan_id' => 16,
            'kode_target' => '16.10',
            'deskripsi' => 'Menjamin akses publik terhadap informasi dan melindungi kebebasan mendasar, sesuai dengan peraturan Nasional dan kesepakatan interNasional.'
        ]);
        Target::create([
            'tujuan_id' => 16,
            'kode_target' => '16.b',
            'deskripsi' => 'Menggalakkan dan menegakkan undang-undang dan kebijakan yang tidak diskriminatif untuk pembangunan berkelanjutan.'
        ]);
        // tujuan 17
        Target::create([
            'tujuan_id' => 17,
            'kode_target' => '17.1',
            'deskripsi' => 'Memperkuat mobilisasi sumber daya domestik, termasuk melalui dukungan internasional kepada negara berkembang, untuk meningkatkan kapasitas lokal bagi pengumpulan pajak dan pendapatan lainnya.'
        ]);
        Target::create([
            'tujuan_id' => 17,
            'kode_target' => '17.2',
            'deskripsi' => 'Negara-negara maju melaksanakan secara penuh komitmen atas bantuan pembangunan (Official Development Assistance ODA) termasuk komitment dari banyak negara maju untuk mencapat target 0.7 persen dari pendapatan nasional bruto untuk pembangunan (ODA/GNI) bagi negara berkembang dan 0.15 samapi 0,2 persen ODA/GNI kepada negara kurang berkembang penyedia ODA didorong untuk mempertimbangkan penetapan target untuk memberikan paling tidak 0,20 persen dari ODA/ GNI untuk negera kurang berkembang.'
        ]);
        Target::create([
            'tujuan_id' => 17,
            'kode_target' => '17.3',
            'deskripsi' => 'Memobilisasi tambahan sumber daya keuangan untuk negara berkembang dari berbagai macam sumber.'
        ]);
        Target::create([
            'tujuan_id' => 17,
            'kode_target' => '17.8',
            'deskripsi' => 'Mengoperasionalisasikan secara penuh bank teknologi dan sains, mekanisme pembangunan kapasitas teknologi dan inovasi untuk negara kurang berkembang pada tahun 2017 dan meningkatkan penggunaan teknologi yang memampukan, khususnya teknologi informasi dan komunikasi.'
        ]);
        Target::create([
            'tujuan_id' => 17,
            'kode_target' => '17.11',
            'deskripsi' => 'Secara signifikan meningkatkan ekspor dari negara berkembang, khususnya dengan tujuan meningkatkan dua kali lipat proporsi negara kurang berkembang dalam ekspor global pada tahun 2020.'
        ]);
        Target::create([
            'tujuan_id' => 17,
            'kode_target' => '17.17',
            'deskripsi' => 'Mendorong dan meningkatkan kerjasama pemerintah-swasta dan masyarakat sipil yang efektif, berdasarkan pengalaman dan bersumber pada strategi kerjasama.'
        ]);
        Target::create([
            'tujuan_id' => 17,
            'kode_target' => '17.19',
            'deskripsi' => 'Pada tahun 2030, mengandalkan inisiatif yang sudah ada, untuk mengembangkan pengukuran atas kemajuan pembangunan berkelanjutan yang melengkapi Produk Domestik Bruto, dan mendukung pengembangan kapasitas statistik di negara berkembang.'
        ]);










        // tabel indikator
        Indikator::create([
            'user_id' => 1,
            'tujuan_id' => 1,
            'target_id' => 1,
            'kode_indikator' => '1.1.1*',
            'deskripsi' => 'Tingkat kemiskinan ekstrim',
        ]);
        Indikator::create([
            'user_id' => 1,
            'tujuan_id' => 1,
            'target_id' => 2,
            'kode_indikator' => '1.2.1*',
            'deskripsi' => 'Persentase penduduk yang hidup di bawah garis kemiskinan Nasional, menurut jenis kelamin dan kelompok umur',
        ]);
        Indikator::create([
            'user_id' => 1,
            'tujuan_id' => 1,
            'target_id' => 2,
            'kode_indikator' => '1.2.2*',
            'deskripsi' => 'Persentase laki- laki, perempuan dan anak-anak dari semua usia, yang hidup dalam kemiskinan dalam berbagai dimensi, sesuai dengan definisi Nasional',
        ]);
        Indikator::create([
            'user_id' => 1,
            'tujuan_id' => 1,
            'target_id' => 3,
            'kode_indikator' => '1.3.1*',
            'deskripsi' => 'Proporsi penduduk yang menerima program perlindungan sosial, menurut jenis kelamin, untuk kategori kelompok semua anak, pengangguran, lansia, penyandang difabilitas, ibu hamil/melahirkan, korban kecelakaan kerja, kelompok miskin dan rentan',
        ]);
        Indikator::create([
            'user_id' => 1,
            'tujuan_id' => 1,
            'target_id' => 3,
            'kode_indikator' => '1.3.1.(a)',
            'deskripsi' => 'Proporsi peserta jaminan kesehatan melalui SJSN Bidang Kesehatan'
        ]);
        Indikator::create([
            'user_id' => 1,
            'tujuan_id' => 1,
            'target_id' => 3,
            'kode_indikator' => '1.3.1.(b)',
            'deskripsi' => 'Proporsi peserta Program Jaminan Sosial Bidang Ketenagakerjaan (Informal)',
        ]);
        Indikator::create([
            'user_id' => 1,
            'tujuan_id' => 1,
            'target_id' => 4,
            'kode_indikator' => '1.4.1*',
            'deskripsi' => 'Proporsi penduduk/rumah tangga dengan akses terhadap pelayanan dasar.',
        ]);
        Indikator::create([
            'user_id' => 1,
            'tujuan_id' => 1,
            'target_id' => 4,
            'kode_indikator' => '1.4.2*',
            'deskripsi' => 'Proporsi dari penduduk dewasa yang mendapatkan hak atas tanah yang didasari oleh dokumen hukum dan yang memiliki hak atas tanah berdasarkan jenis kelamin dan tipe kepemilikan.',
        ]);
        Indikator::create([
            'user_id' => 1,
            'tujuan_id' => 1,
            'target_id' => 5,
            'kode_indikator' => '1.5.1*',
            'deskripsi' => 'Jumlah korban meninggal, hilang, dan terkena dampak bencana per 100.000 orang.',
        ]);
        Indikator::create([
            'user_id' => 1,
            'tujuan_id' => 1,
            'target_id' => 5,
            'kode_indikator' => '1.5.2*',
            'deskripsi' => 'Jumlah kerugian ekonomi langsung akibat bencana terhadap PDB.',
        ]);
        Indikator::create([
            'user_id' => 1,
            'tujuan_id' => 1,
            'target_id' => 5,
            'kode_indikator' => '1.5.4*',
            'deskripsi' => 'Persentase pemerintah daerah yang mengadopsi dan menerapkan strategi pengurangan risiko bencana daerah yang selaras dengan strategi pengurangan risiko bencana Nasional.',
        ]);
        // tujuan 2
        Indikator::create([
            'user_id' => 1,
            'tujuan_id' => 2,
            'target_id' => 6,
            'kode_indikator' => '2.1.1*',
            'deskripsi' => 'Prevalensi Ketidakcukupan Konsumsi Pangan (Prevalence of Undernourishment).',
        ]);
        Indikator::create([
            'user_id' => 1,
            'tujuan_id' => 2,
            'target_id' => 6,
            'kode_indikator' => '2.1.2*',
            'deskripsi' => 'Prevalensi penduduk dengan kerawanan pangan sedang atau berat, berdasarkan pada Skala Pengalaman Kerawanan Pangan.',
        ]);
        Indikator::create([
            'user_id' => 1,
            'tujuan_id' => 2,
            'target_id' => 7,
            'kode_indikator' => '2.2.1*',
            'deskripsi' => 'Prevalensi stunting (pendek dan sangat pendek) pada anak di bawah lima tahun/balita.',
        ]);
        Indikator::create([
            'user_id' => 1,
            'tujuan_id' => 2,
            'target_id' => 7,
            'kode_indikator' => '2.2.2*',
            'deskripsi' => 'Prevalensi wasting (berat badan/tinggi badan) anak pada usia kurang dari 5 tahun, berdasarkan tipe.',
        ]);
        Indikator::create([
            'user_id' => 1,
            'tujuan_id' => 2,
            'target_id' => 7,
            'kode_indikator' => '2.2.3',
            'deskripsi' => 'Prevalensi anemia pada ibu hamil.',
        ]);
        Indikator::create([
            'user_id' => 1,
            'tujuan_id' => 2,
            'target_id' => 8,
            'kode_indikator' => '2.3.1*',
            'deskripsi' => 'Volume produksi per tenaga kerja menurut kelas usaha tani tanaman/ peternakan/ perikanan/ kehutanan.',
        ]);
        Indikator::create([
            'user_id' => 1,
            'tujuan_id' => 2,
            'target_id' => 8,
            'kode_indikator' => '2.3.1.(a)',
            'deskripsi' => 'Nilai tambah pertanian per tenaga kerja menurut kelas usaha tani tanaman/ peternakan/ perikanan/ kehutanan.',
        ]);
        Indikator::create([
            'user_id' => 1,
            'tujuan_id' => 2,
            'target_id' => 8,
            'kode_indikator' => '2.3.2*',
            'deskripsi' => 'Rata-rata pendapatan produsen pertanian skala kecil, menurut subsektor.',
        ]);
        Indikator::create([
            'user_id' => 1,
            'tujuan_id' => 2,
            'target_id' => 9,
            'kode_indikator' => '2.4.1.(a)',
            'deskripsi' => 'Proporsi luas lahan pertanian yang ditetapkan sebagai kawasan pertanian pangan berkelanjutan.',
        ]);
        Indikator::create([
            'user_id' => 1,
            'tujuan_id' => 2,
            'target_id' => 10,
            'kode_indikator' => '2.5.1*',
            'deskripsi' => 'Jumlah sumber daya genetik tanaman dan hewan untuk pangan dan pertanian yang disimpan di fasilitas konservasi, baik jangka menengah ataupun jangka panjang.',
        ]);
        Indikator::create([
            'user_id' => 1,
            'tujuan_id' => 2,
            'target_id' => 11,
            'kode_indikator' => '2.a.1*',
            'deskripsi' => 'Indeks orientasi pertanian (IOP) untuk pengeluaran pemerintah.',
        ]);
        Indikator::create([
            'user_id' => 1,
            'tujuan_id' => 2,
            'target_id' => 12,
            'kode_indikator' => '2.c.1*',
            'deskripsi' => 'Indikator anomali harga pangan.',
        ]);
        //tujuan 3 start irsham 13/6-------------------------------------------
        //tujuan 3 start irsham 13/6-------------------------------------------
        Indikator::create([
            'user_id' => 1,
            'tujuan_id' => 3,
            'target_id' => 13,
            'kode_indikator' => '3.1.1*',
            'deskripsi' => 'Angka Kematian Ibu (AKI).',
        ]);
        Indikator::create([
            'user_id' => 1,
            'tujuan_id' => 3,
            'target_id' => 13,
            'kode_indikator' => '3.1.2*',
            'deskripsi' => 'Proporsi perempuan pernah kawin umur 15-49 tahun yang proses melahirkan terakhirnya (a) ditolong oleh tenaga kesehatan terlatih',
        ]);
        Indikator::create([
            'user_id' => 1,
            'tujuan_id' => 3,
            'target_id' => 13,
            'kode_indikator' => '3.1.2*',
            'deskripsi' => 'Proporsi perempuan pernah kawin umur 15-49 tahun yang proses melahirkan terakhirnya (b) di fasilitas kesehatan.',
        ]);
        Indikator::create([ //3.2--------------------------------------
            'user_id' => 1,
            'tujuan_id' => 3,
            'target_id' => 14,
            'kode_indikator' => '3.2.1*',
            'deskripsi' => '(a) Angka Kematian Balita (AKBa)',
        ]);
        Indikator::create([
            'user_id' => 1,
            'tujuan_id' => 3,
            'target_id' => 14,
            'kode_indikator' => '3.2.1*',
            'deskripsi' => '(b) Angka Kematian Bayi (AKB) per 1.000 kelahiran hidup',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 3,
            'target_id' => 14,
            'kode_indikator' => '3.2.2*',
            'deskripsi' => 'Angka Kematian Neonatal (AKN) per 1000 kelahiran hidup',
        ]);
        Indikator::create([ //3.3--------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 3,
            'target_id' => 15,
            'kode_indikator' => '3.3.3*',
            'deskripsi' => 'Kejadian Malaria per 1000 orang',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 3,
            'target_id' => 15,
            'kode_indikator' => '3.3.3.(a)',
            'deskripsi' => 'Jumlah kabupaten/kota yang mencapai eliminasi malaria',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 3,
            'target_id' => 15,
            'kode_indikator' => '3.3.4*',
            'deskripsi' => 'Insiden Hepatitis B per 100.000 penduduk',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 3,
            'target_id' => 15,
            'kode_indikator' => '3.3.5*',
            'deskripsi' => 'Jumlah orang yang memerlukan intervensi terhadap penyakit tropis yang terabaikan (Filariasis)',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 3,
            'target_id' => 15,
            'kode_indikator' => '3.3.5*',
            'deskripsi' => 'Jumlah orang yang memerlukan intervensi terhadap penyakit tropis yang terabaikan (Kusta)',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 3,
            'target_id' => 15,
            'kode_indikator' => '3.3.5.(a)',
            'deskripsi' => 'Jumlah kabupaten/ kota dengan eliminasi kusta',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 3,
            'target_id' => 15,
            'kode_indikator' => '3.3.5.(b)',
            'deskripsi' => 'Jumlah kabupaten/ kota endemis filariasis yang mencapai eliminas',
        ]);
        Indikator::create([  //3.4--------------------------------------
            'user_id' => 1,
            'tujuan_id' => 3,
            'target_id' => 16,
            'kode_indikator' => '3.4.1.(a)',
            'deskripsi' => 'Persentase merokok penduduk usia 10-18 tahun',
        ]);
        Indikator::create([  
            'user_id' => 1,
            'tujuan_id' => 3,
            'target_id' => 16,
            'kode_indikator' => '3.4.1.(b)',
            'deskripsi' => 'Prevalensi tekanan darah tinggi',
        ]);
        Indikator::create([  
            'user_id' => 1,
            'tujuan_id' => 3,
            'target_id' => 16,
            'kode_indikator' => '3.4.1.(c)',
            'deskripsi' => 'Prevalensi obesitas pada penduduk umur ≥18 tahun',
        ]);
        Indikator::create([  //3.5-----------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 3,
            'target_id' => 17,
            'kode_indikator' => '3.5.1.(a)',
            'deskripsi' => 'Jumlah penyalahguna napza yang mendapatkan pelayanan rehabilitasi medis',
        ]);
        Indikator::create([  
            'user_id' => 1,
            'tujuan_id' => 3,
            'target_id' => 17,
            'kode_indikator' => '3.5.1.(b)',
            'deskripsi' => 'Jumlah yang mengakses layanan pasca rehabilitasi',
        ]);
        Indikator::create([  //3.7-------------------------------------3.6 nda da
            'user_id' => 1,
            'tujuan_id' => 3,
            'target_id' => 18,
            'kode_indikator' => '3.7.1*',
            'deskripsi' => 'Proporsi perempuan usia reproduksi (15-49 tahun) yang memiliki kebutuhan keluarga berencana terpenuhi menurut metode kontrasepsi modern',
        ]);
        Indikator::create([  
            'user_id' => 1,
            'tujuan_id' => 3,
            'target_id' => 18,
            'kode_indikator' => '3.7.2*',
            'deskripsi' => 'Angka kelahiran remaja (umur 10-14 tahun; umur 15-19 tahun) per 1000 perempuan di kelompok umur yang sama',
        ]);
        Indikator::create([  
            'user_id' => 1,
            'tujuan_id' => 3,
            'target_id' => 18,
            'kode_indikator' => '3.7.2.(a)',
            'deskripsi' => 'Total Fertility Rate (TFR)',
        ]);
        Indikator::create([  //3.8---------------------------------
            'user_id' => 1,
            'tujuan_id' => 3,
            'target_id' => 19,
            'kode_indikator' => '3.8.1*',
            'deskripsi' => 'Cakupan pelayanan kesehatan essensial',
        ]);
        Indikator::create([  
            'user_id' => 1,
            'tujuan_id' => 3,
            'target_id' => 19,
            'kode_indikator' => '3.8.1.(a)',
            'deskripsi' => 'Unmet need pelayanan kesehatan',
        ]);
        Indikator::create([  
            'user_id' => 1,
            'tujuan_id' => 3,
            'target_id' => 19,
            'kode_indikator' => '3.8.2*',
            'deskripsi' => 'Proporsi populasi dengan pengeluaran rumah tangga yang besar untuk kesehatan sebagai bagian dari total pengeluaran rumah tangga atau pendapatan',
        ]);
        Indikator::create([  
            'user_id' => 1,
            'tujuan_id' => 3,
            'target_id' => 19,
            'kode_indikator' => '3.8.2.(a)',
            'deskripsi' => 'Cakupan Jaminan Kesehatan Nasional (JKN)',
        ]);
        Indikator::create([  //3.a--------------------------------------
            'user_id' => 1,
            'tujuan_id' => 3,
            'target_id' => 20,
            'kode_indikator' => '3.a.1*',
            'deskripsi' => 'Persentase merokok pada penduduk umur ≥15 tahun',
        ]);
        Indikator::create([  //3.b--------------------------------------
            'user_id' => 1,
            'tujuan_id' => 3,
            'target_id' => 21,
            'kode_indikator' => '3.b.1*',
            'deskripsi' => 'Proporsi target populasi yang telah memperoleh vaksin program Nasional',
        ]);
        Indikator::create([  
            'user_id' => 1,
            'tujuan_id' => 3,
            'target_id' => 21,
            'kode_indikator' => '3.b.3*',
            'deskripsi' => 'Proporsi fasilitas kesehatan dengan paket obat essensial yang tersedia dan terjangkau secara berkelanjutan',
        ]);
        Indikator::create([  //3.c
            'user_id' => 1,
            'tujuan_id' => 3,
            'target_id' => 22,
            'kode_indikator' => '3.c.1*',
            'deskripsi' => 'Kepadatan dan distribusi tenaga kesehatan',
        ]);

        //Tujuan 4 start 13/6-------------------------------------------------------------
        Indikator::create([  //4.1-------------------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 4,
            'target_id' => 23,
            'kode_indikator' => '4.1.1.(a)',
            'deskripsi' => 'Proporsi anak-anak dan remaja di (a) kelas 5 yang mencapai setidaknya tingkat kemahiran minimum dalam: (i) membaca, (ii) matematika',
        ]);
        Indikator::create([  
            'user_id' => 1,
            'tujuan_id' => 4,
            'target_id' => 23,
            'kode_indikator' => '4.1.1.(a)',
            'deskripsi' => 'Proporsi anak-anak dan remaja di  (b) kelas 8, yang mencapai setidaknya tingkat kemahiran minimum dalam: (i) membaca, (ii) matematika',
        ]);
        Indikator::create([  
            'user_id' => 1,
            'tujuan_id' => 4,
            'target_id' => 23,
            'kode_indikator' => '4.1.1.(a)',
            'deskripsi' => 'Proporsi anak-anak dan remaja di (c) usia 15 tahun yang mencapai setidaknya tingkat kemahiran minimum dalam: (i) membaca, (ii) matematika',
        ]);
        Indikator::create([  
            'user_id' => 1,
            'tujuan_id' => 4,
            'target_id' => 23,
            'kode_indikator' => '4.1.2*',
            'deskripsi' => 'Tingkat penyelesaian pendidikan jenjang SD/ sederajat',
        ]);
        Indikator::create([  
            'user_id' => 1,
            'tujuan_id' => 4,
            'target_id' => 23,
            'kode_indikator' => '4.1.2*',
            'deskripsi' => 'Tingkat penyelesaian pendidikan jenjang SMP/sederajat',
        ]);
        Indikator::create([  
            'user_id' => 1,
            'tujuan_id' => 4,
            'target_id' => 23,
            'kode_indikator' => '4.1.2*',
            'deskripsi' => 'Tingkat penyelesaian pendidikan jenjang  SMA/sederajat',
        ]);
        Indikator::create([  
            'user_id' => 1,
            'tujuan_id' => 4,
            'target_id' => 23,
            'kode_indikator' => '4.1.2.(a)',
            'deskripsi' => 'Angka anak tidak sekolah jenjang PAUD',
        ]);
        Indikator::create([  
            'user_id' => 1,
            'tujuan_id' => 4,
            'target_id' => 23,
            'kode_indikator' => '4.1.2.(a)',
            'deskripsi' => 'Angka anak tidak sekolah jenjang  SD/sederajat',
        ]);
        Indikator::create([  
            'user_id' => 1,
            'tujuan_id' => 4,
            'target_id' => 23,
            'kode_indikator' => '4.1.2.(a)',
            'deskripsi' => 'Angka anak tidak sekolah jenjang  SMP/sederajat',
        ]);
        Indikator::create([  
            'user_id' => 1,
            'tujuan_id' => 4,
            'target_id' => 23,
            'kode_indikator' => '4.1.2.(a)',
            'deskripsi' => 'Angka anak tidak sekolah jenjang SMA/sederajat',
        ]);
        Indikator::create([  //4.2------------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 4,
            'target_id' => 24,
            'kode_indikator' => '4.2.1*',
            'deskripsi' => 'Proporsi anak usia 24-59 bulan yang berkembang dengan baik dalam bidang kesehatan, pembelajaran, dan psikososial, menurut jenis kelamin',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 4,
            'target_id' => 24,
            'kode_indikator' => '4.2.2*',
            'deskripsi' => 'Tingkat partisipasi dalam pembelajaran yang teroganisir (satu tahun sebelum usia sekolah dasar), menurut jenis kelamin',
        ]);
        Indikator::create([ //4.3------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 4,
            'target_id' => 25,
            'kode_indikator' => '4.3.1*',
            'deskripsi' => 'Tingkat partisipasi remaja dan dewasa dalam pendidikan dan pelatihan formal dan non formal dalam 12 bulan terakhir, menurut jenis kelamin.',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 4,
            'target_id' => 25,
            'kode_indikator' => '4.3.1.(a)',
            'deskripsi' => 'Angka Partisipasi Kasar (APK) Perguruan Tinggi (PT).',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 4,
            'target_id' => 25,
            'kode_indikator' => '4.3.1.(a)',
            'deskripsi' => 'Angka Partisipasi Kasar (APK) Sekolah Menengah Umum/Sederajat',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 4,
            'target_id' => 25,
            'kode_indikator' => '4.3.1.(a)',
            'deskripsi' => 'Angka Partisipasi Kasar (APK) Sekolah Menengah Pertama (SMP)/Sederajat',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 4,
            'target_id' => 25,
            'kode_indikator' => '4.3.1.(a)',
            'deskripsi' => 'Angka Partisipasi Kasar (APK) Sekolah Dasar (SD)/Sederajat',
        ]);
        Indikator::create([ //4.4-------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 4,
            'target_id' => 26,
            'kode_indikator' => '4.4.1.(a)',
            'deskripsi' => 'Proporsi remaja (usia 15-24 tahun) dengan keterampilan teknologi informasi dan komunikasi (TIK)',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 4,
            'target_id' => 26,
            'kode_indikator' => '4.4.1.(a)',
            'deskripsi' => 'Proporsi orang dewasa (usia 15-59 tahun) dengan keterampilan teknologi informasi dan komunikasi (TIK)',
        ]);
        Indikator::create([ //4.5--------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 4,
            'target_id' => 27,
            'kode_indikator' => '4.5.1.*',
            'deskripsi' => 'Rasio Angka Partisipasi Murni (APM) perempuan/laki-laki di (1a) SD/MI/sederajat',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 4,
            'target_id' => 27,
            'kode_indikator' => '4.5.1.*',
            'deskripsi' => 'Rasio Angka Partisipasi Kasar (APK) perempuan/laki-laki di (2a) SMP/MTs/sederajat',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 4,
            'target_id' => 27,
            'kode_indikator' => '4.5.1.*',
            'deskripsi' => 'Rasio Angka Partisipasi Kasar (APK) perempuan/laki-laki di (3a) SMA/SMK/MA/sederajat',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 4,
            'target_id' => 27,
            'kode_indikator' => '4.5.1.*',
            'deskripsi' => 'Rasio Angka Partisipasi Kasar (APK) perempuan/laki-laki di (4a) Perguruan Tinggi',
        ]);
        Indikator::create([ //4.6-----------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 4,
            'target_id' => 28,
            'kode_indikator' => '4.6.1.(a)',
            'deskripsi' => 'Persentase angka melek aksara penduduk umur ≥15 tahun',
        ]);
        Indikator::create([ //4.a-----------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 4,
            'target_id' => 29,
            'kode_indikator' => '4.a.1.*',
            'deskripsi' => 'Proporsi sekolah SD/MI/Sederajat dengan akses ke: (a) listrik (b) internet untuk tujuan pengajaran, (c) komputer untuk tujuan pengajaran, (d) infrastruktur dan materi memadai bagi siswa disabilitas, (e) air minum layak, (f) fasilitas sanitasi dasar per jenis kelamin, (g) fasilitas cuci tangan (terdiri air, sanitasi, dan higienis bagi semua (WASH)',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 4,
            'target_id' => 29,
            'kode_indikator' => '4.a.1.*',
            'deskripsi' => 'Proporsi sekolah SMP/MTS/Sederajat dengan akses ke: (a) listrik (b) internet untuk tujuan pengajaran, (c) komputer untuk tujuan pengajaran, (d) infrastruktur dan materi memadai bagi siswa disabilitas, (e) air minum layak, (f) fasilitas sanitasi dasar per jenis kelamin, (g) fasilitas cuci tangan (terdiri air, sanitasi, dan higienis bagi semua (WASH)',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 4,
            'target_id' => 29,
            'kode_indikator' => '4.a.1.*',
            'deskripsi' => 'Proporsi sekolah SMA/SMK/MA/Sederajat dengan akses ke: (a) listrik (b) internet untuk tujuan pengajaran, (c) komputer untuk tujuan pengajaran, (d) infrastruktur dan materi memadai bagi siswa disabilitas, (e) air minum layak, (f) fasilitas sanitasi dasar per jenis kelamin, (g) fasilitas cuci tangan (terdiri air, sanitasi, dan higienis bagi semua (WASH)',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 4,
            'target_id' => 29,
            'kode_indikator' => '4.a.1.(a)',
            'deskripsi' => 'Persentase siswa yang mengalami perundungan dalam 12 bulan terakhir (di tingkat SD atau sederajat)',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 4,
            'target_id' => 29,
            'kode_indikator' => '4.a.1.(a)',
            'deskripsi' => 'Persentase siswa yang mengalami perundungan dalam 12 bulan terakhir (di tingkat SMP atau sederajat)',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 4,
            'target_id' => 29,
            'kode_indikator' => '4.a.1.(a)',
            'deskripsi' => 'Persentase siswa yang mengalami perundungan dalam 12 bulan terakhir (di tingkat SMA/SMK atau sederajat)',
        ]);
        Indikator::create([ //4.c-------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 4,
            'target_id' => 30,
            'kode_indikator' => '4.c.1.*',
            'deskripsi' => 'Persentase guru yang memenuhi kualifikasi sesuai dengan standar Nasional menurut jenjang pendidikan (1. Persentase guru pada jenjang (i) TK/RA/BA, (ii) SD/sederajat, (iii) SMP/sederajat, (iv) SMA/ SMK/sederajat, dan (v) PLB yang memenuhi kualifikasi akademik S1/D4 sesuai dengan standar yang ditetapkan Kementerian Pendidikan dan Kebudayaan. )',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 4,
            'target_id' => 30,
            'kode_indikator' => '4.c.1.*',
            'deskripsi' => 'Persentase guru yang memenuhi kualifikasi sesuai dengan standar Nasional menurut jenjang pendidikan (2. Persentase guru pada jenjang (i) TK/RA/BA, (ii) SD/sederajat, (iii) SMP/sederajat, (iv) SMA/SMK/ sederajat, dan (v) PLB yang memiliki sertifikat pendidik.)',
        ]);
        //Tujuan 5----13/6-----------------------------------------------
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 5,
            'target_id' => 31,
            'kode_indikator' => '5.5.1.*',
            'deskripsi' => 'Proporsi kursi yang diduduki perempuan di (a) parlemen tingkat pusat',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 5,
            'target_id' => 31,
            'kode_indikator' => '5.5.1.*',
            'deskripsi' => 'Proporsi kursi yang diduduki perempuan di (b) pemerintah daerah.',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 5,
            'target_id' => 31,
            'kode_indikator' => '5.5.2.*',
            'deskripsi' => 'Proporsi perempuan yang berada di posisi managerial/ Kepemimpinan di Pemerintahan',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 5,
            'target_id' => 31,
            'kode_indikator' => '5.5.2.*',
            'deskripsi' => 'Proporsi perempuan yang berada di posisi managerial/ kepemimpinan di perusahaan publik/swasta',
        ]);
        Indikator::create([ //5.6----------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 5,
            'target_id' => 32,
            'kode_indikator' => '5.6.1.*',
            'deskripsi' => 'Proporsi perempuan umur 15-49 tahun yang membuat keputusan sendiri terkait hubungan seksual, penggunaan kontrasepsi, dan layanan kesehatan reproduksi',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 5,
            'target_id' => 32,
            'kode_indikator' => '5.6.2.*',
            'deskripsi' => 'Regulasi yang menjamin akses yang setara bagi perempuan dan laki-laki untuk mendapatkan pelayanan, informasi dan pendidikan terkait kesehatan seksual dan reproduksi',
        ]);
        Indikator::create([ //5.a--------------------------------------
            'user_id' => 1,
            'tujuan_id' => 5,
            'target_id' => 33,
            'kode_indikator' => '5.a.1.*',
            'deskripsi' => '(1) Proporsi penduduk pertanian yang memiliki hak atas tanah pertanian',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 5,
            'target_id' => 33,
            'kode_indikator' => '5.a.1.*',
            'deskripsi' => '(2) Proporsi perempuan penduduk pertanian sebagai pemilik atau yang memiliki hak atas tanah pertanian, menurut jenis kepemilikan',
        ]);
        Indikator::create([ //5.b----------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 5,
            'target_id' => 34,
            'kode_indikator' => '5.b.1.*',
            'deskripsi' => 'Proporsi individu yang menguasai/memiliki telepon genggam',
        ]);

        //Tujuan 6 -13/6-------------------------------------------------------------------------------
        Indikator::create([ //6.1-----------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 6,
            'target_id' => 35,
            'kode_indikator' => '6.1.1.*',
            'deskripsi' => 'Presentase rumah tangga yang menggunakan layanan air minum yang dikelola secara aman.',
        ]);
        Indikator::create([ //6.2-----------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 6,
            'target_id' => 36,
            'kode_indikator' => '6.2.1.*',
            'deskripsi' => 'Persentase rumah tangga yang menggunakan  fasilitas cuci tangan dengan air dan sabun (a)',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 6,
            'target_id' => 36,
            'kode_indikator' => '6.2.1.*',
            'deskripsi' => 'Persentase rumah tangga yang menggunakan layanan sanitasi yang dikelola secara aman (b)',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 6,
            'target_id' => 36,
            'kode_indikator' => '6.2.1.*',
            'deskripsi' => 'Persentase rumah tangga yang  Untuk praktik buang air besar sembarangan (BABS) di tempat terbuka (C)',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 6,
            'target_id' => 36,
            'kode_indikator' => '6.2.1.*',
            'deskripsi' => 'Persentase rumah tangga akses terhadap sistem pengelolaan air limbah domestik terpusat (SPALD-T) (d)',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 6,
            'target_id' => 36,
            'kode_indikator' => '6.2.1.*',
            'deskripsi' => 'Persentase rumah tangga akses terhadap sistem pengelolaan lumpur tinja (e)',
        ]);
        Indikator::create([ //6.3------------------------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 6,
            'target_id' => 37,
            'kode_indikator' => '6.3.1.(a)',
            'deskripsi' => 'Persentase limbah cair industri cair yang diolah secara aman.',
        ]);
        Indikator::create([ //6.4---------------------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 6,
            'target_id' => 38,
            'kode_indikator' => '6.4.2.(a)',
            'deskripsi' => 'Proporsi pengambilan air baku bersumber dari air permukaan terhadap ketersediaannya . (a) Air Permukaan',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 6,
            'target_id' => 38,
            'kode_indikator' => '6.4.2.(b)',
            'deskripsi' => 'Proporsi pengambilan air baku bersumber dari air permukaan terhadap ketersediaannya . (b)  Air Tanah',
        ]);
        Indikator::create([ //6.5-----------------------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 6,
            'target_id' => 39,
            'kode_indikator' => '6.5.1.*',
            'deskripsi' => 'Tingkat pelaksanaan pengelolaan sumber daya air secara terpadu (0- 100)',
        ]);
        Indikator::create([ //6.6-----------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 6,
            'target_id' => 40,
            'kode_indikator' => '6.6.1.*',
            'deskripsi' => 'Perubahan tingkat kualitas dan kuantitas sumber daya air pada ekosistem perairan dari waktu ke waktu.',
        ]);

        //Tujuan 7 13/6---------------------------------------------------------------------------------
        Indikator::create([ //7.1-----------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 7,
            'target_id' => 41,
            'kode_indikator' => '7.1.1.*',
            'deskripsi' => 'Rasio elektrifikasi',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 7,
            'target_id' => 41,
            'kode_indikator' => '7.1.1.(a)',
            'deskripsi' => 'Konsumsi listrik per kapita',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 7,
            'target_id' => 41,
            'kode_indikator' => '7.1.2.(a)',
            'deskripsi' => 'Jumlah sambungan jaringan gas untuk rumah tangga',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 7,
            'target_id' => 41,
            'kode_indikator' => '7.1.2.(b)',
            'deskripsi' => 'Rasio penggunaan gas rumah tangga',
        ]);

        //Tujuan 8 13/6-----------------------------------------------------
        Indikator::create([ //8.1------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 8,
            'target_id' => 42,
            'kode_indikator' => '8.1.1.*',
            'deskripsi' => 'Laju pertumbuhan PDB per kapita',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 8,
            'target_id' => 42,
            'kode_indikator' => '8.1.1.(a)',
            'deskripsi' => 'PDB per kapita',
        ]);
        Indikator::create([ //8.2---------------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 8,
            'target_id' => 43,
            'kode_indikator' => '8.2.1.*',
            'deskripsi' => 'Laju pertumbuhan PDB per tenaga kerja/Tingkat pertumbuhan PDB riil per orang bekerja per tahun',
        ]);
        Indikator::create([ //8.3----------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 8,
            'target_id' => 44,
            'kode_indikator' => '8.3.1.*',
            'deskripsi' => 'Proporsi lapangan kerja informal,  berdasarkan sektor dan jenis kelamin',
        ]);
        Indikator::create([ //8.5----------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 8,
            'target_id' => 45,
            'kode_indikator' => '8.5.1.*',
            'deskripsi' => 'Upah rata-rata per jam pekerja',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 8,
            'target_id' => 45,
            'kode_indikator' => '8.5.2.*',
            'deskripsi' => 'Tingkat pengangguran terbuka berdasarkan jenis kelamin dan kelompok umur',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 8,
            'target_id' => 45,
            'kode_indikator' => '8.5.2.(a)',
            'deskripsi' => 'Tingkat setengah pengangguran',
        ]);
        Indikator::create([ //8.6------------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 8,
            'target_id' => 46,
            'kode_indikator' => '8.6.1.*',
            'deskripsi' => 'Persentase usia muda (15-24 tahun) yang sedang tidak sekolah, bekerja atau mengikuti pelatihan (NEET)',
        ]);
        Indikator::create([ //8.7------------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 8,
            'target_id' => 47,
            'kode_indikator' => '8.7.1.(a)',
            'deskripsi' => 'Persentase dan jumlah anak usia 10-17 tahun, yang bekerja, dibedakan berdasarkan jenis kelamin dan kelompok umur',
        ]);
        Indikator::create([ //8.9------------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 8,
            'target_id' => 48,
            'kode_indikator' => '8.9.1.(b)',
            'deskripsi' => 'Jumlah kunjungan wisatawan nusantara',
        ]);
        Indikator::create([ //8.10------------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 8,
            'target_id' => 49,
            'kode_indikator' => '8.10.1.*',
            'deskripsi' => 'Jumlah kantor bank dan ATM per 100.000 penduduk dewasa',
        ]);

        //Tujuan 9 14/6---------------------------------------------------------------------
        Indikator::create([ //9.1------------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 9,
            'target_id' => 50,
            'kode_indikator' => '9.1.1.(a)',
            'deskripsi' => 'Kondisi mantap jalan nasional',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 9,
            'target_id' => 50,
            'kode_indikator' => '9.1.2.*',
            'deskripsi' => 'Jumlah penumpang dan barang berdasarkan moda transportasi',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 9,
            'target_id' => 50,
            'kode_indikator' => '9.1.2.(a)',
            'deskripsi' => 'Jumlah bandara.',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 9,
            'target_id' => 50,
            'kode_indikator' => '9.1.2.(b)',
            'deskripsi' => 'Jumlah Pelabuhan Penyeberangan',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 9,
            'target_id' => 50,
            'kode_indikator' => '9.1.2.(c)',
            'deskripsi' => 'Jumlah pelabuhan strategis',
        ]);
        Indikator::create([ //9.2--------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 9,
            'target_id' => 51,
            'kode_indikator' => '9.2.1.*',
            'deskripsi' => 'Proporsi nilai tambah sektor industri manufaktur terhadap PDB dan per kapita',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 9,
            'target_id' => 51,
            'kode_indikator' => '9.2.1.(a)',
            'deskripsi' => 'Laju pertumbuhan PDB industri manufaktur',
        ]);
        Indikator::create([ //9.4--------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 9,
            'target_id' => 52,
            'kode_indikator' => '9.4.1.*',
            'deskripsi' => 'Rasio Emisi CO2/Emisi Gas Rumah Kaca dengan nilai tambah sektor industri manufaktur',
        ]);

        //Tujuan 10 14/6--------------------------------------------------------------------------

        Indikator::create([ //10.1----------------------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 10,
            'target_id' => 53,
            'kode_indikator' => '10.1.1.*',
            'deskripsi' => 'Rasio Gini',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 10,
            'target_id' => 53,
            'kode_indikator' => '10.1.1.(b)',
            'deskripsi' => 'Jumlah Desa Tertinggal',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 10,
            'target_id' => 53,
            'kode_indikator' => '10.1.1.(c)',
            'deskripsi' => 'Jumlah Desa Mandiri',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 10,
            'target_id' => 53,
            'kode_indikator' => '10.1.1.(d)',
            'deskripsi' => 'Jumlah Daerah Tertinggal',
        ]);
        Indikator::create([ //10.2-------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 10,
            'target_id' => 54,
            'kode_indikator' => '10.2.1.*',
            'deskripsi' => 'Proporsi penduduk yang hidup di bawah 50 persen dari median pendapatan, menurut jenis kelamin dan penyandang difabilitas.',
        ]);
        Indikator::create([ //10.3-------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 10,
            'target_id' => 55,
            'kode_indikator' => '10.3.1.(a)',
            'deskripsi' => 'Indeks Kebebasan',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 10,
            'target_id' => 55,
            'kode_indikator' => '10.3.1.(d)',
            'deskripsi' => 'Jumlah kebijakan yang diskriminatif dalam 12 bulan lalu berdasarkan pelarangan diskriminasi menurut hukum HAM InterNasional',
        ]);
        Indikator::create([ //10.4--------------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 10,
            'target_id' => 56,
            'kode_indikator' => '10.4.1.(b)',
            'deskripsi' => 'Proporsi peserta Program Jaminan Sosial Bidang Ketenagakerjaan',
        ]);

        //Tujuan 11 - 14/6-----------------------------------------------------------------------
        Indikator::create([ //11.1--------------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 11,
            'target_id' => 57,
            'kode_indikator' => '11.1.1.(a)',
            'deskripsi' => 'Persentase rumah tangga yang memiliki akses terhadap hunian yang layak dan terjangkau.',
        ]);
        Indikator::create([ //11.2--------------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 11,
            'target_id' => 58,
            'kode_indikator' => '11.2.1.(a)',
            'deskripsi' => 'Proporsi populasi yang mendapatkan akses yang nyaman pada transportasi publik',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 11,
            'target_id' => 58,
            'kode_indikator' => '11.2.1.(b)',
            'deskripsi' => 'Persentase penduduk terlayani transportasi umum',
        ]);
        Indikator::create([ //11.3------------------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 11,
            'target_id' => 59,
            'kode_indikator' => '11.3.1.(a)',
            'deskripsi' => 'Rasio laju perluasan lahan terbangun terhadap laju pertumbuhan penduduk',
        ]);
        Indikator::create([ //11.4------------------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 11,
            'target_id' => 60,
            'kode_indikator' => '11.4.1.(a)',
            'deskripsi' => 'Total pengeluaran per kapita yang diperuntukan untuk preservasi, perlindungan, konservasi pada semua warisan budaya dan alam (non-PPP)',
        ]);
        Indikator::create([ //11.5------------------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 11,
            'target_id' => 61,
            'kode_indikator' => '11.5.2.(a)',
            'deskripsi' => 'Proporsi kerugian ekonomi langsung akibat bencana relatif terhadap PDB',
        ]);
        Indikator::create([ //11.6------------------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 11,
            'target_id' => 62,
            'kode_indikator' => '11.6.1.(a)',
            'deskripsi' => 'Persentase rumah tangga di perkotaan yang terlayani pengelolaan sampahnya',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 11,
            'target_id' => 62,
            'kode_indikator' => '11.6.1.(b)',
            'deskripsi' => 'Persentase sampah nasional yang terkelola',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 11,
            'target_id' => 62,
            'kode_indikator' => '11.6.2.(a)',
            'deskripsi' => 'Rata-rata tahunan materi partikular halus PM 10',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 11,
            'target_id' => 62,
            'kode_indikator' => '11.6.2.(b)',
            'deskripsi' => 'Indeks Kualitas Udara ',
        ]);
        Indikator::create([ //11.7--------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 11,
            'target_id' => 63,
            'kode_indikator' => '11.7.2.(a)',
            'deskripsi' => 'Proporsi penduduk yang mengalami kejahatan kekerasan dalam 12 bulan terakhir.',
        ]);
        Indikator::create([ //11.a--------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 11,
            'target_id' => 64,
            'kode_indikator' => '11.a.1.(a)',
            'deskripsi' => 'Proporsi penduduk yang tinggal di daerah dengan RTRW yang sudah dilengkapi KLHS',
        ]);
        Indikator::create([ //11.b--------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 11,
            'target_id' => 65,
            'kode_indikator' => '11.b.2.*',
            'deskripsi' => 'Persentase pemerintah daerah yang mengadopsi dan menerapkan strategi penanggulangan bencana daerah yang selaras dengan rencana/ strategi Nasional penanggulangan bencana',
        ]);
        Indikator::create([ //11.c--------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 11,
            'target_id' => 66,
            'kode_indikator' => '11.c.1.(a)',
            'deskripsi' => 'Persentase Daerah yang memiliki Perda Bangunan Gedung yang Berkelanjutan, Berketahanan, dan menggunakan Material Lokal',
        ]);

        //Tujuan 12 - 14/6--------------------------------------------------------------
        Indikator::create([ //12.3--------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 12,
            'target_id' => 67,
            'kode_indikator' => '12.3.1.(a)',
            'deskripsi' => 'Persentase Sisa Makanan',
        ]);
        Indikator::create([ //12.4--------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 12,
            'target_id' => 68,
            'kode_indikator' => '12.4.1.(a)',
            'deskripsi' => 'Persentase pengurangan dan penghapusan merkuri dari baseline 50 ton penggunaan merkuri.',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 12,
            'target_id' => 68,
            'kode_indikator' => '12.4.1.(b)',
            'deskripsi' => 'Persentase penurunan tingkat konsumsi perusak ozon dari baseline.',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 12,
            'target_id' => 68,
            'kode_indikator' => '12.4.2.*',
            'deskripsi' => '(a) Limbah B3 yang dihasilkan per kapita',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 12,
            'target_id' => 68,
            'kode_indikator' => '12.4.2.*',
            'deskripsi' => '(b) Proporsi limbah B3 yang ditangani/diolah berdasarkan jenis penanganannya / pengelolaannya',
        ]);
        Indikator::create([ //12.5-------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 12,
            'target_id' => 69,
            'kode_indikator' => '12.5.1.(a)',
            'deskripsi' => 'Jumlah timbulan sampah yang didaur ulang ',
        ]);
        Indikator::create([ //12.6-------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 12,
            'target_id' => 70,
            'kode_indikator' => '12.6.1.*',
            'deskripsi' => 'Jumlah perusahaan yang mempublikasi laporan keberlanjutannya',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 12,
            'target_id' => 70,
            'kode_indikator' => '12.6.1.(a)',
            'deskripsi' => 'Jumlah perusahaan yang menerapkan sertifikasi SNI ISO 14001',
        ]);
        Indikator::create([ //12.8------------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 12,
            'target_id' => 71,
            'kode_indikator' => '12.8.1.(b)',
            'deskripsi' => 'Jumlah fasilitas publik yang menerapkan Standar Pelayanan Masyarakat (SPM) dan teregister',
        ]);
        Indikator::create([ //12.b------------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 12,
            'target_id' => 72,
            'kode_indikator' => '12.b.1.(a)',
            'deskripsi' => 'Jumlah lokasi penerapan sustainable tourism development',
        ]);

        //Tujaun 13 - 14/6-----------------------------------------------------------------------------
        Indikator::create([ //13.1------------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 13,
            'target_id' => 73,
            'kode_indikator' => '13.1.3.*',
            'deskripsi' => 'Persentase pemerintah daerah yang mengadopsi dan menerapkan strategi penanggulangan bencana daerah yang selaras dengan rencana/strategi nasional penanggulangan bencana',
        ]);
        Indikator::create([ //13.2------------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 13,
            'target_id' => 74,
            'kode_indikator' => '13.2.2.*',
            'deskripsi' => 'Jumlah emisi gas rumah kaca (GRK) per tahun',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 13,
            'target_id' => 74,
            'kode_indikator' => '13.2.2.(a)',
            'deskripsi' => 'Dokumen pelaporan penurunan emisi gas rumah kaca (GRK)',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 13,
            'target_id' => 74,
            'kode_indikator' => '13.2.2.(b)',
            'deskripsi' => 'Potensi penurunan intensitas emisi gas rumah kaca (GRK)',
        ]);
        Indikator::create([ //13.3-----------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 13,
            'target_id' => 75,
            'kode_indikator' => '13.3.1.(a)',
            'deskripsi' => 'Jumlah satuan Pendidikan formal dan Lembaga/ komunitas masyarakat peduli dan berbudaya lingkungan hidup.',
        ]);

        //Tujuan 14 - 14/6-------------------------------------------------------------------------
        Indikator::create([ //14.1-----------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 14,
            'target_id' => 76,
            'kode_indikator' => '14.1.1.(a)',
            'deskripsi' => 'Persentase penurunan sampah terbuang ke laut',
        ]);
        Indikator::create([ //14.2-----------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 14,
            'target_id' => 77,
            'kode_indikator' => '14.2.1.*',
            'deskripsi' => 'Penerapan pendekatan berbasis ekosistem dalam pengelolaan areal lautan',
        ]);
        Indikator::create([ //14.5-----------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 14,
            'target_id' => 78,
            'kode_indikator' => '14.5.1.*',
            'deskripsi' => 'Jumlah luas kawasan konservasi perairan laut.',
        ]);
        Indikator::create([ //14.6-----------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 14,
            'target_id' => 79,
            'kode_indikator' => '14.6.1.(a)',
            'deskripsi' => 'Persentase kepatuhan pelaku usaha',
        ]);
        Indikator::create([ //14.b-----------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 14,
            'target_id' => 80,
            'kode_indikator' => '14.b.1.*',
            'deskripsi' => 'Tingkat penerapan kerangka hukum/ regulasi/ kebijakan/ kelembagaan yang mengakui dan melindungi hak akses untuk perikanan skala kecil',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 14,
            'target_id' => 80,
            'kode_indikator' => '14.b.1.(a)',
            'deskripsi' => 'Jumlah provinsi dengan peningkatan akses pendanaan usaha nelayan.',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 14,
            'target_id' => 80,
            'kode_indikator' => '14.b.1.(b)',
            'deskripsi' => 'Jumlah nelayan yang terlindungi.',
        ]);

        //Tujuan 15 - 14/6-------------------------------------------------------------
        Indikator::create([ //15.1---------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 15,
            'target_id' => 81,
            'kode_indikator' => '15.1.1.*',
            'deskripsi' => 'Proporsi kawasan hutan terhadap total luas lahan.',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 15,
            'target_id' => 81,
            'kode_indikator' => '15.1.2.(a)',
            'deskripsi' => 'Luas Kawasan Bernilai Konservasi Tinggi (HCV)',
        ]);
        Indikator::create([ //15.2----------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 15,
            'target_id' => 82,
            'kode_indikator' => '15.2.1.(a)',
            'deskripsi' => 'Jumlah KPH yang masuk Kategori Maju',
        ]);
        Indikator::create([ //15.3----------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 15,
            'target_id' => 83,
            'kode_indikator' => '15.3.1.*',
            'deskripsi' => 'Proporsi lahan yang terdegradasi terhadap luas lahan keseluruhan.',
        ]);
        Indikator::create([ //15.4----------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 15,
            'target_id' => 84,
            'kode_indikator' => '15.4.1.*',
            'deskripsi' => 'Situs penting keanekaragaman hayati pegunungan dalam kawasan konservasi',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 15,
            'target_id' => 84,
            'kode_indikator' => '15.4.2.*',
            'deskripsi' => 'Indeks tutupan hijau pegunungan.',
        ]);

        //Tujuan 16 14/6----------------------------------------------------------
        Indikator::create([ //16.1----------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 16,
            'target_id' => 85,
            'kode_indikator' => '16.1.1.(a)',
            'deskripsi' => 'Jumlah kasus kejahatan pembunuhan pada satu tahun terakhir.',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 16,
            'target_id' => 85,
            'kode_indikator' => '16.1.2.(a)',
            'deskripsi' => 'Kematian disebabkan konflik per 100.000 penduduk.',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 16,
            'target_id' => 85,
            'kode_indikator' => '16.1.3.(a)',
            'deskripsi' => 'Proporsi penduduk yang menjadi korban kejahatan kekerasan dalam 12 bulan terakhir.',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 16,
            'target_id' => 85,
            'kode_indikator' => '16.1.4.*',
            'deskripsi' => 'Proporsi penduduk yang merasa aman berjalan sendirian di area tempat tinggalnya.',
        ]);
        Indikator::create([ //16.2--------------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 16,
            'target_id' => 86,
            'kode_indikator' => '16.2.1.(a)',
            'deskripsi' => 'Proporsi rumah tangga yang memiliki anak umur 1-17 tahun yang mengalami hukuman fisik dan/atau agresi psikologis dari pengasuh dalam setahun terakhir.',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 16,
            'target_id' => 86,
            'kode_indikator' => '16.2.1.(b)',
            'deskripsi' => 'Prevalensi anak usia 13-17 tahun yang pernah mengalami kekerasan sepanjang hidupnya',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 16,
            'target_id' => 86,
            'kode_indikator' => '16.2.2.*',
            'deskripsi' => 'Angka korban perdagangan manusia per 100.000 penduduk menurut jenis kelamin, kelompok umur dan jenis eksploitasi.',
        ]);
        Indikator::create([ //16.3---------------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 16,
            'target_id' => 87,
            'kode_indikator' => '16.3.1.(a)',
            'deskripsi' => 'Proporsi korban kekerasan dalam 12 bulan terakhir yang melaporkan kepada polisi.',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 16,
            'target_id' => 87,
            'kode_indikator' => '16.3.1.(b)',
            'deskripsi' => 'Persentase orang miskin yang menerima bantuan hukum litigasi dan nonlitigasi',
        ]);
        Indikator::create([ //16.5----------------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 16,
            'target_id' => 88,
            'kode_indikator' => '16.5.1.(a)',
            'deskripsi' => 'Indeks Perilaku Anti Korupsi (IPAK).',
        ]);
        Indikator::create([ //16.6----------------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 16,
            'target_id' => 89,
            'kode_indikator' => '16.6.1.(a)',
            'deskripsi' => 'Persentase instansi pemerintah yang mendapatkan Wajar Tanpa Pengecualian (WTP).',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 16,
            'target_id' => 89,
            'kode_indikator' => '16.6.1.(b)',
            'deskripsi' => 'Persentase instansi pemerintah dengan skor Sistem Akuntabilias Kinerja Instansi Pemerintah  (SAKIP) ≥ B',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 16,
            'target_id' => 89,
            'kode_indikator' => '16.6.1.(c)',
            'deskripsi' => 'Persentase instansi pemerintah dengan Indeks Reformasi Birokrasi (RB) ≥ B',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 16,
            'target_id' => 89,
            'kode_indikator' => '16.6.2.(a)',
            'deskripsi' => 'Jumlah Instansi pemerintah dengan tingkat kepatuhan pelayanan publik kategori baik',
        ]);
        Indikator::create([ //16.7------------------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 16,
            'target_id' => 90,
            'kode_indikator' => '16.7.1.(a)',
            'deskripsi' => 'Persentase keterwakilan perempuan di Persentase Keterwakilan Perempuan di (a) Dewan Perwakilan Rakyat (DPR) pusat.',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 16,
            'target_id' => 90,
            'kode_indikator' => '16.7.1.(a)',
            'deskripsi' => 'Persentase keterwakilan perempuan di (b) Dewan Perwakilan Rakyat Daerah (DPRD).Provinsi',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 16,
            'target_id' => 90,
            'kode_indikator' => '16.7.1.(a)',
            'deskripsi' => 'Persentase keterwakilan perempuan di Persentase Keterwakilan Perempuan di Persentase Keterwakilan Perempuan (c) di Dewan Perwakilan Rakyat Daerah Daerah (DPRD) Kabupaten/Kota.',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 16,
            'target_id' => 90,
            'kode_indikator' => '16.7.1.(b)',
            'deskripsi' => 'Persentase keterwakilan perempuan sebagai pengambilan keputusan di lembaga eksekutif (Eselon I dan II).',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 16,
            'target_id' => 90,
            'kode_indikator' => '16.7.2.(a)',
            'deskripsi' => 'Indeks Kapasitas Lembaga Demokrasi',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 16,
            'target_id' => 90,
            'kode_indikator' => '16.7.2.(b)',
            'deskripsi' => 'Indeks Aspek Kebebasan',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 16,
            'target_id' => 90,
            'kode_indikator' => '16.7.2.(c)',
            'deskripsi' => 'Indeks Kesetaraan',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 16,
            'target_id' => 90,
            'kode_indikator' => '16.7.2.(c)',
            'deskripsi' => 'Indeks Kesetaraan',
        ]);
        Indikator::create([ //16.9---------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 16,
            'target_id' => 91,
            'kode_indikator' => '16.9.1.*',
            'deskripsi' => 'Proporsi anak umur di bawah 5 tahun yang kelahirannya dicatat oleh lembaga pencatatan sipil menurut umur.',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 16,
            'target_id' => 91,
            'kode_indikator' => '16.9.1.(a)',
            'deskripsi' => 'Persentase kepemilikan akta lahir untuk penduduk 0-17 tahun pada 40% berpendapatan bawah',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 16,
            'target_id' => 91,
            'kode_indikator' => '16.9.1.(b)',
            'deskripsi' => 'Persentase cakupan kepemilikan akta kelahiran pada penduduk 0-17 tahun',
        ]);
        Indikator::create([ //16.10---------------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 16,
            'target_id' => 92,
            'kode_indikator' => '16.10.1.(a)',
            'deskripsi' => 'Indikator Kebebasan dari kekerasan bagi jurnalis dan awak media.',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 16,
            'target_id' => 92,
            'kode_indikator' => '16.10.2.(a)',
            'deskripsi' => 'Jumlah Badan Publik yang berkualifikasi Informatif.',
        ]);
        Indikator::create([ //16.b------------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 16,
            'target_id' => 93,
            'kode_indikator' => '16.b.1.(a)',
            'deskripsi' => 'Jumlah kebijakan yang diskriminatif dalam 12 bulan lalu berdasarkan pelarangan diskriminasi menurut hukum HAM Internasional.',
        ]);

        //Tujuan 17 14/6--------------------------------------------------------------------
        Indikator::create([ //17.1------------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 17,
            'target_id' => 94,
            'kode_indikator' => '17.1.1.*',
            'deskripsi' => 'Total pendapatan pemerintah sebagai proporsi terhadap PDB menurut sumbernya.',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 17,
            'target_id' => 94,
            'kode_indikator' => '17.1.1.(a)',
            'deskripsi' => 'Rasio penerimaan pajak terhadap PDB.',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 17,
            'target_id' => 94,
            'kode_indikator' => '17.1.2.*',
            'deskripsi' => 'Proporsi anggaran domestik yang didanai oleh pajak domestik.',
        ]);
        Indikator::create([ //17.2-----------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 17,
            'target_id' => 95,
            'kode_indikator' => '17.2.1.(a)',
            'deskripsi' => 'Proporsi ODA terhadap PDB dan PNB',
        ]);
        Indikator::create([ //17.3-----------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 17,
            'target_id' => 96,
            'kode_indikator' => '17.3.2.(a)',
            'deskripsi' => 'Proporsi volume remitansi PMI (dalam US dollars) terhadap PDB.',
        ]);
        Indikator::create([ //17.8-----------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 17,
            'target_id' => 97,
            'kode_indikator' => '17.8.1.*',
            'deskripsi' => 'Persentase pengguna internet',
        ]);
        Indikator::create([ //17.11-----------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 17,
            'target_id' => 98,
            'kode_indikator' => '17.11.1.(a)',
            'deskripsi' => 'pertumbuhan ekspor produk nonmigas',
        ]);
        Indikator::create([ //17.17-----------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 17,
            'target_id' => 99,
            'kode_indikator' => '17.17.1.(a)',
            'deskripsi' => 'Jumlah Dokumen Daftar Rencana Proyek KPBU (DRK) yang diterbitkan setiap tahun.',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 17,
            'target_id' => 99,
            'kode_indikator' => '17.17.1.(b)',
            'deskripsi' => 'Jumlah proyek yang ditawarkan untuk dilaksanakan dengan skema Kerjasama Pemerintah dan Badan Usaha (KPBU).',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 17,
            'target_id' => 99,
            'kode_indikator' => '17.17.1.(c)',
            'deskripsi' => 'Jumlah nilai investasi proyek KPBU berdasarkan tahap perencanaan, penyiapan dan transaksi.',
        ]);
        Indikator::create([ //17.19-------------------------------------------------------------
            'user_id' => 1,
            'tujuan_id' => 17,
            'target_id' => 100,
            'kode_indikator' => '17.19.2.(a)',
            'deskripsi' => 'Terlaksananya Sensus Penduduk dan Perumahan pada tahun 2020.',
        ]);
        Indikator::create([ 
            'user_id' => 1,
            'tujuan_id' => 17,
            'target_id' => 100,
            'kode_indikator' => '17.19.2.(b)',
            'deskripsi' => 'Tersedianya data registrasi terkait kelahiran dan kematian (Vital Statistics Register)',
        ]);
        






        Tahun::create([
            'tahun' => 2016
        ]);
        Tahun::create([
            'tahun' => 2017
        ]);
        Tahun::create([
            'tahun' => 2018
        ]);
        Tahun::create([
            'tahun' => 2019
        ]);
        Tahun::create([
            'tahun' => 2020
        ]);
        Tahun::create([
            'tahun' => 2021
        ]);
        Tahun::create([
            'tahun' => 2022
        ]);
        Tahun::create([
            'tahun' => 2023
        ]);
        Tahun::create([
            'tahun' => 2024
        ]);
        Tahun::create([
            'tahun' => 2025
        ]);
        Tahun::create([
            'tahun' => 2026
        ]);
        Tahun::create([
            'tahun' => 2027
        ]);
        Tahun::create([
            'tahun' => 2028
        ]);
        Tahun::create([
            'tahun' => 2029
        ]);
        Tahun::create([
            'tahun' => 2030
        ]);

        // Capaian::create([
        //     'user_id' => 3,
        //     'tujuan_id' => 1,
        //     'target_id' => 1,
        //     'indikator_id' => 1,
        //     'tahun_id' => 4,   
        //     'target_awal' => 4.54,
        //     'capaian' => 4.54,
        //     'status' => 'tercapai',
        //     'baseline' => 5
        // ]);
        // Capaian::create([
        //     'user_id' => 3,
        //     'tujuan_id' => 1,
        //     'target_id' => 2,
        //     'indikator_id' => 2,
        //     'tahun_id' => 4,
        //     'target_awal' => 6,
        //     'capaian' => 5,
        //     'status' => 'akan_tercapai',
        //     'baseline' => 5
        // ]);
        // Capaian::create([
        //     'user_id' => 3,
        //     'tujuan_id' => 1,
        //     'target_id' => 2,
        //     'indikator_id' => 3,
        //     'tahun_id' => 4,
        //     'target_awal' => 6,
        //     'capaian' => 4,
        //     'status' => 'perlu_perhatian_kusus',
        //     'baseline' => 5
        // ]);
    }
}
