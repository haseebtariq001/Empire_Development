<?php

namespace Database\Seeders;

use App\Events\DefaultData;
use App\Models\User;
use App\Models\WorkSpace;
use App\Events\GivePermissionToRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Super Admin
        $admin = User::where('type','super admin')->first();
        if(empty($admin))
        {
            $super_admin = new User();
            $super_admin->name = 'Super admin';
            $super_admin->email = 'superadmin@example.com';
            $super_admin->password = Hash::make('1234');
            $super_admin->email_verified_at = date('Y-m-d H:i:s');
            $super_admin->type = 'super admin';
            $super_admin->active_status = 1;
            $super_admin->active_workspace = 0;
            $super_admin->avatar = 'uploads/users-avatar/avatar.png';
            $super_admin->dark_mode = 1;
            $super_admin->lang = 'en';
            $super_admin->workspace_id = 0;
            $super_admin->created_by = $admin->id;
            $super_admin->save();


            $role_r = Role::findByName('super_admin');
            $super_admin->assignRole($role_r);

            $data= $super_admin->MakeRole();

            // create  WorkSpace
            $workspace = new WorkSpace();
            $workspace->name = 'Rajodiya infotech';
            $workspace->slug = 'rajodiya-infotech';
            $workspace->created_by = $super_admin->id;
            $workspace->save();


            $super_admin = User::find($super_admin->id);

            $super_admin->workspace_id = $workspace->id;
            $super_admin->active_workspace = $workspace->id;
            $super_admin->save();

            // super_admin setting save

            User::CompanySetting($super_admin->id);
        }

        // Company
        $user = User::where('type','company')->first();
        if(empty($user))
        {
            $company = new User();
            $company->name = 'Rajodiya infotech';
            $company->email = 'company@example.com';
            $company->password = Hash::make('1234');
            $company->email_verified_at = date('Y-m-d H:i:s');
            $company->type = 'company';
            $company->active_status = 1;
            $company->active_workspace = 1;
            $company->avatar = 'uploads/users-avatar/avatar.png';
            $company->dark_mode = 0;
            $company->lang = 'en';
            $company->workspace_id = 1;
            $company->created_by = $admin->id;
            $company->save();


            $role_r = Role::findByName('company');
            $company->assignRole($role_r);

            $data= $company->MakeRole();

            // create  WorkSpace
            $workspace = new WorkSpace();
            $workspace->name = 'Rajodiya infotech';
            $workspace->slug = 'rajodiya-infotech';
            $workspace->created_by = $company->id;
            $workspace->save();


            $company = User::find($company->id);

            $company->workspace_id = $workspace->id;
            $company->active_workspace = $workspace->id;
            $company->save();

            // company setting save

            User::CompanySetting($company->id);
        }
    }
}
