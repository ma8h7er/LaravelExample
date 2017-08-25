<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert(
            [
                [
                    'name'  => 'Create Post',
                    'slug' => 'create-post',
                    'description' => ''
                ],
                [
                    'name'  => 'Edit Post',
                    'slug' => 'edit-post',
                    'description' => ''
                ],

                [
                    'name'  => 'Delete Post',
                    'slug' => 'delete-post',
                    'description' => ''
                ]
            ]
        );
    }
}
