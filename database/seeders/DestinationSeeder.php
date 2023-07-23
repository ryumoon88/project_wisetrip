<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $destinations = [
            [
                'name' => 'Danau Maninjau',
                'thumbnail' => 'url_thumbnail_maninjau.jpg',
                'description' => 'Danau Maninjau adalah sebuah danau alami yang terletak di Kabupaten Agam, Sumatera Barat, Indonesia. Danau ini memiliki luas sekitar 99,5 km² dan dikelilingi oleh bukit-bukit hijau yang indah. Airnya yang tenang dan jernih menciptakan pemandangan yang menakjubkan.

                Lokasi Danau Maninjau terletak di ketinggian sekitar 461,50 meter di atas permukaan laut, menjadikannya salah satu destinasi wisata populer di Sumatera Barat. Pengunjung sering menikmati perjalanan mengelilingi danau dengan menyewa perahu tradisional atau menikmati pemandangan dari puncak Bukit Maninjau.

                Selain keindahan alamnya, Danau Maninjau juga memiliki nilai sejarah dan budaya. Di sekitar danau, terdapat beberapa desa yang masih melestarikan adat dan tradisi Minangkabau. Pengunjung dapat melihat rumah-rumah tradisional Minangkabau yang megah, seperti Rumah Gadang, yang merupakan ikon arsitektur unik dari suku Minangkabau.

                Jika Anda mengunjungi Sumatera Barat, jangan lewatkan kesempatan untuk menjelajahi keindahan danau ini. Danau Maninjau adalah tempat yang tepat untuk bersantai, menikmati alam, dan merasakan kehangatan budaya Minangkabau.',
                'kelurahan_id' => 1306032003,
            ],
            [
                'name' => 'Jam Gadang',
                'thumbnail' => 'url_thumbnail_jam_gadang.jpg',
                'description' => 'Jam Gadang adalah sebuah menara jam megah yang berdiri di pusat kota Bukittinggi, Sumatera Barat, Indonesia. Menara jam ini menjadi ikon kota Bukittinggi dan menjadi daya tarik utama bagi wisatawan yang mengunjungi daerah ini.

                Jam Gadang memiliki arsitektur yang khas dengan kombinasi gaya bangunan Minangkabau dan Eropa. Nama "Jam Gadang" berasal dari bahasa Minangkabau yang berarti "jam besar". Menara ini dibangun pada tahun 1926 sebagai simbol peringatan 100 tahun berdirinya kota Bukittinggi.

                Pengunjung dapat berjalan-jalan di sekitar Jam Gadang, mengambil foto dengan latar belakang menara megah ini, dan menikmati panorama kota dari ketinggian. Di malam hari, Jam Gadang diterangi dengan lampu-lampu indah yang menciptakan suasana yang romantis.

                Selain menikmati keindahan menara, di sekitar Jam Gadang terdapat berbagai warung makan dan toko cenderamata yang menjual produk-produk khas Bukittinggi. Anda juga dapat mencicipi kuliner lokal seperti kue kacang dan rendang.

                Jangan lewatkan kesempatan untuk mengunjungi Jam Gadang saat berada di Bukittinggi. Nikmati keindahan arsitektur dan suasana kota yang ramah.',
                'kelurahan_id' => 1375011005,
            ],
            [
                'name' => 'Harau Valley',
                'thumbnail' => 'url_thumbnail_harau_valley.jpg',
                'description' => 'Harau Valley adalah sebuah lembah yang terletak di Kabupaten Limapuluh Kota, Sumatera Barat, Indonesia. Lembah ini dikelilingi oleh tebing-tebing curam yang menjulang tinggi dan hijau. Pemandangan alamnya yang menakjubkan membuat Harau Valley menjadi destinasi populer bagi para penggemar hiking, panjat tebing, dan fotografi.

                Di Harau Valley, Anda dapat menikmati keindahan air terjun yang mempesona. Beberapa air terjun yang terkenal di daerah ini adalah Air Terjun Sarasah Bunta, Air Terjun Aka Barayun, dan Air Terjun Karasik.

                Selain menikmati alam yang indah, Anda juga dapat berinteraksi dengan penduduk setempat yang ramah dan hangat. Lembah ini dihuni oleh suku Minangkabau yang menjaga tradisi dan adat istiadat mereka dengan baik.

                Bagi pecinta olahraga alam dan petualangan, Harau Valley menawarkan berbagai aktivitas menarik seperti panjat tebing, hiking, dan bersepeda. Tidak hanya itu, tempat ini juga cocok untuk bersantai dan menikmati keheningan alam.

                Nikmati liburan Anda di Harau Valley, nikmati keindahan alamnya, dan rasakan kedamaian yang langka ditemui di tempat lain.',
                'kelurahan_id' => 1307052005,
            ],
            [
                'name' => 'Pantai Air Manis',
                'thumbnail' => 'url_thumbnail_air_manis.jpg',
                'description' => 'Pantai Air Manis terletak di kota Padang, Sumatera Barat, Indonesia. Pantai ini menawarkan pemandangan indah dari laut dan hamparan pasir putih. Namanya, "Air Manis," berasal dari sebuah legenda yang populer di daerah ini.

                Menurut legenda, pantai ini adalah tempat terjadinya kisah Malin Kundang, seorang anak muda dari daerah ini yang menjadi kaya dan sombong. Ibu Malin Kundang yang terluka hati mengutuknya menjadi batu, dan batu-batu besar di pantai ini diyakini sebagai sosok Malin Kundang yang terkutuk.

                Pantai Air Manis adalah tempat yang tepat untuk bersantai, berjalan-jalan di sepanjang pantai, dan menikmati angin laut yang segar. Anda juga dapat menemukan beberapa warung makanan di sekitar pantai yang menyajikan hidangan laut segar, seperti ikan bakar dan kepiting saus Padang.

                Jika Anda mengunjungi Pantai Air Manis saat matahari terbenam, Anda akan disuguhi pemandangan langit yang indah dengan nuansa kemerahan yang memukau.

                Nikmati momen santai Anda di Pantai Air Manis dan rasakan pesona legenda dan keindahan pantainya.',
                'kelurahan_id' => 1371011011,
            ],
            [
                'name' => 'Pagaruyung Palace',
                'thumbnail' => 'url_thumbnail_pagaruyung.jpg',
                'description' => 'Pagaruyung Palace adalah sebuah istana megah yang terletak di Nagari Pagaruyung, Kabupaten Tanah Datar, Sumatera Barat, Indonesia. Istana ini adalah rekonstruksi dari istana sejarah Minangkabau yang dulunya merupakan pusat kekuasaan Kerajaan Pagaruyung.

                Dengan arsitektur yang indah dan khas Minangkabau, Pagaruyung Palace menjadi destinasi yang menarik untuk mempelajari sejarah dan budaya daerah ini. Anda dapat mengunjungi istana ini untuk melihat interior yang mengesankan, termasuk ornamen-ornamen ukiran yang halus dan perabotan klasik.

                Selain menikmati keindahan arsitektur istana, Anda juga dapat memahami lebih dalam tentang adat dan tradisi masyarakat Minangkabau yang masih dijaga dengan baik di daerah ini.

                Di sekitar Pagaruyung Palace, Anda akan menemukan panorama alam yang menakjubkan dengan sawah dan perbukitan hijau yang indah.

                Jelajahi sejarah dan budaya Minangkabau di Pagaruyung Palace, rasakan pesona kerajaan masa lalu, dan nikmati keindahan alam Sumatera Barat.',
                'kelurahan_id' => 1304052004,
            ],
            // Tambahkan destinasi lainnya sesuai kebutuhan
        ];

        foreach ($destinations as $destination) {
            Destination::create([
                'name' => $destination['name'],
                'thumbnail' => $destination['thumbnail'],
                'description' => $destination['description'],
                'village_code' => $destination['kelurahan_id'],
                'user_id' => 3,
            ]);
        }
    }
}
