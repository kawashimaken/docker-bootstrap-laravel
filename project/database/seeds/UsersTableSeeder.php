<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // 開発用ユーザーを定義
        App\User::create([
            'name' => 'Demo Admin User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'), 
            'remember_token' => Str::random(10)
        ]);

        // モデルファクトリーで定義したテストユーザーを 20 個作成
        factory(App\User::class, 20)->create();

    }
}
