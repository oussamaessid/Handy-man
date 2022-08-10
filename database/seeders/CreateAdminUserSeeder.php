<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;  

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'admin', 
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456789'),
            'role_as' => 'admin'
        ]); 

        $writer = User::create([
            'name'=>'writer',
            'email'=>'writer@gmail.com',
            'password'=>bcrypt('123456789'),
            'role_as' => 'writer'
        ]);

        $provider = User::create([
            'name'=>'provider',
            'email'=>'provider@gmail.com',
            'password'=>bcrypt('123456789'),
            'role_as' => 'provider'
        ]);

        $admin_role = Role::create(['name' => 'admin']);
        $writer_role = Role::create(['name' => 'writer']); 
        $provider_role = Role::create(['name' => 'provider']);


        $permissions = Permission::pluck('id','id')->all();   

        $admin_role->syncPermissions($permissions);    

        $admin->assignRole($admin_role);
        $writer->assignRole($writer_role);
        $provider->assignRole($provider_role);

    }
}