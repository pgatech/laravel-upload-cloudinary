<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UploadedFilesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('uploaded_files')->delete();
        
        \DB::table('uploaded_files')->insert(array (
            0 => 
            array (
                'id' => 1,
                'file_name' => 'Donna Kind Denim.jpg',
                'public_id' => 'gz0qs9brc7d1vlqvpqpw',
                'url' => 'http://res.cloudinary.com/dctimdv7r/image/upload/v1725348236/gz0qs9brc7d1vlqvpqpw.jpg',
                'created_at' => '2024-09-03 07:23:56',
                'updated_at' => '2024-09-03 07:23:56',
            ),
            1 => 
            array (
                'id' => 2,
                'file_name' => 'Archandra Tahar.jpg',
                'public_id' => 'i0p4vp7f1ydkopctxnau',
                'url' => 'http://res.cloudinary.com/dctimdv7r/image/upload/v1725349047/i0p4vp7f1ydkopctxnau.jpg',
                'created_at' => '2024-09-03 07:37:28',
                'updated_at' => '2024-09-03 07:37:28',
            ),
        ));
        
        
    }
}