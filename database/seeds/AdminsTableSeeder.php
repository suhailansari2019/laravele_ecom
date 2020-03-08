<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        $adminRecords=[
         ['id'=>1,'name'=>'admin','type'=>'admin','mobile'=>'9088778900','email'=>'admin@gmail.com','password'=>'$2y$10$QYMQwdz9GbagnMlAOIJuXOI5mVBht3gmz62yI6MKZdiStzf1THHL2','image'=>'','status'=>1

         ],
             ['id'=>2,'name'=>'suhail','type'=>'subadmin','mobile'=>'9088778900','email'=>'suhail@gmail.com','password'=>'$2y$10$QYMQwdz9GbagnMlAOIJuXOI5mVBht3gmz62yI6MKZdiStzf1THHL2','image'=>'','status'=>1

         ],

         ['id'=>3,'name'=>'ansari','type'=>'newadmin','mobile'=>'9088778900','email'=>'ansari@gmail.com','password'=>'$2y$10$QYMQwdz9GbagnMlAOIJuXOI5mVBht3gmz62yI6MKZdiStzf1THHL2','image'=>'','status'=>1

         ],

         ['id'=>4,'name'=>'jhon','type'=>'useradmin','mobile'=>'9088778900','email'=>'jhon@gmail.com','password'=>'$2y$10$QYMQwdz9GbagnMlAOIJuXOI5mVBht3gmz62yI6MKZdiStzf1THHL2','image'=>'','status'=>1

         ],


        ];
         DB::table('admins')->insert($adminRecords);
        // foreach ($adminRecords as $key => $record) {
        // 	\App\Admin::create($record);
        // }
    }
}
