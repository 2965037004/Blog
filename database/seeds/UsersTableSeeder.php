<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(App\Models\User::class)->times(10)->make();
        App\Models\User::insert($users->makeVisible('password','remember_token')->toArray());

        $user = User::find(1);
        $user->name = 'aadmin';
        $user->email = 'aadmin@admin.com';
        $user->password = bcrypt('aadmin');
        //$user->is_admin = true;
        //$user->activated = true;
        $user->save();
    }
}
