<?php

namespace Database\Seeders;

use App\Models\Galery;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GalerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Galery::create([
            'category_id' => 1,
            'user_id' => 1,
            'photos' => 'https://a4.mzstatic.com/us/r30/Purple/v4/84/64/21/846421ed-513b-07f2-cbdd-2f9776e5853d/screen480x480.jpeg',
            'title' => 'One Piece',
            'slug' => 'one-piece',
            'author' => 'Eiichiro Oda',
            'body' => 'One Piece adalah sebuah seri manga Jepang yang ditulis dan diilustrasikan oleh Eiichiro Oda. Manga ini telah dimuat di majalah Weekly Shōnen Jump milik Shueisha sejak tanggal 22 Juli 1997, dan telah dibundel menjadi 91 volume tankōbon. Ceritanya mengisahkan petualangan Monkey D'
        ]);
        
        Galery::create([
            'category_id' => 1,
            'user_id' => 1,
            'photos' => 'https://akcdn.detik.net.id/community/media/visual/2020/07/13/manga-naruto-1_43.webp?w=700&q=90',
            'title' => 'Naruto',
            'slug' => 'naruto',
            'author' => 'Masashi Kishimoto',
            'body' => 'Naruto (ナルト) adalah sebuah serial manga karya Masashi Kishimoto yang mendapatkan gelar Hokage, pemimpin dan ninja terk diadaptasi menjadi serial anime. Manga Naruto bercerita seputar kehidupan tokoh utamanya, Naruto Uzumaki, seorang ninja yang hiperaktif, periang, dan ambisius yang ingin mewujudkan keinginannya untukuat di desanya. Serial ini didasarkan pada komik one-shot oleh Kishimoto yang diterbitkan dalam edisi Akamaru Jump pada Agustus 1997.'
        ]);
        Galery::create([
            'category_id' => 1,
            'user_id' => 1,
            'photos' => 'https://www.greenscene.co.id/wp-content/uploads/2021/09/goku-2-696x497.jpg',
            'title' => 'Dragon Ball',
            'slug' => 'dragon-ball',
            'author' => 'Eiichiro Oda',
            'body' => 'Dragon Ball adalah sebuah manga dan anime karya Akira Toriyama dari tahun 1984 sampai 1995. Albumnya terdiri dari 42 buku dan di Indonesia diterbitkan oleh Elex Media Komputindo. Sebelumnya Dragon Ball juga pernah diterbitkan oleh Rajawali Grafiti. Tokoh-tokoh Dragon Ball Goku Bulma Krillin Master Roshi Oolong Yamcha'
        ]);
        Galery::create([
            'category_id' => 2,
            'user_id' => 1,
            'photos' => 'https://swebtoon-phinf.pstatic.net/20210908_244/1631083381205r9LSo_JPEG/95M_details.jpg?type=crop540_540',
            'title' => 'Lookism',
            'slug' => 'lookism',
            'author' => 'Taejoon Park',
            'body' => 'Lookism adalah sebuah webtoon Korea Selatan yang ditulis dan diilustrasikan oleh Park Tae-joon. Webtoon ini pertama kali dipublikasikan di Naver Webtoon sejak bulan November 2014 dan masih berlanjut hingga sekarang'
        ]);
        Galery::create([
            'title' => 'How To Fight',
            'slug' => 'how-to-fight',
            'user_id' => 1,
            'category_id' => 2,
            'photos' => 'https://i.pinimg.com/564x/71/5e/35/715e35ab0e6fb2dc85ff0c3762ef2f98.jpg',
            'author' => 'Taejoon Park',
            'body' => 'How to Fight menceritakan tentang seorang pecundang bernama Yoo Hobin yang berusaha bangkit dari kesengsaraan dengan memanfaatkan newtube (plesetan youtube) sebagai media. Menyadari banyak orang yang senang dengan konten perkelahiannya, Hobin pun memutuskan untuk bertahan dengan konsep itu.'
        ]);
    }
}
