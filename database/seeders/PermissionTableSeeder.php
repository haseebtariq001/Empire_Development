<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artisan::call('cache:forget spatie.permission.cache');
        Artisan::call('cache:clear');

        // Super Admin
        $admin = User::where('type', 'super admin')->first();
        if (empty($admin)) {
            $admin = new User();
            $admin->name = 'Super Admin';
            $admin->email = 'superadmin@example.com';
            $admin->password = Hash::make('1234');
            $admin->email_verified_at = date('Y-m-d H:i:s');
            $admin->type = 'super admin';
            $admin->active_status = 1;
            $admin->active_workspace = 0;
            $admin->avatar = 'uploads/users-avatar/avatar.png';
            $admin->dark_mode = 0;
            $admin->lang = 'en';
            $admin->workspace_id = 0;
            $admin->created_by = 0;
            $admin->save();

            $role = Role::where('name', 'super admin')->where('guard_name', 'web')->exists();
            if (!$role) {
                $superAdminRole        = Role::updateOrCreate(
                    [
                        'name' => 'super admin',
                        'created_by' => 0,
                    ]
                );
            }
            $role_r = Role::findByName('super admin');
            $admin->assignRole($role_r);
        }
        $role = Role::where('name', 'company')->where('guard_name', 'web')->exists();
        if (!$role) {
            $company_role        = Role::updateOrCreate(
                [
                    'name' => 'company',
                    'created_by' => $admin->id,
                ]
            );
        }

        $adnin_permission = [
            'user manage',
            'user create',
            'user edit',
            'user delete',
            'user profile manage',
            'user reset password',
            'user login manage',
            'user import',
            'user logs history',
            'setting manage',
            'setting logo manage',
            'setting theme manage',
            'setting storage manage',
            'coupon manage',
            'coupon create',
            'coupon edit',
            'coupon delete',
            'plan manage',
            'plan create',
            'plan edit',
            'plan delete',
            'plan orders',
            'module manage',
            'module add',
            'module remove',
            'module edit',
            'email template manage',
            'language manage',
            'language create',
            'language delete',
            'helpdesk manage',
            'helpdesk ticket manage',
            'helpdesk ticket create',
            'helpdesk ticket edit',
            'helpdesk ticket show',
            'helpdesk ticket reply',
            'helpdesk ticket delete',
            'helpdeskticket setup manage',
            'helpdesk ticketcategory manage',
            'helpdesk ticketcategory create',
            'helpdesk ticketcategory edit',
            'helpdesk ticketcategory delete',

            'api key setting manage',
            'api key setting create',
            'api key setting edit',
            'api key setting delete',
            
            'agency manage',
            'agency create',
            'agency view',
            'agency delete',
            'agency edit',
            'agency update',

            'unit create',
            'unit edit',
            'unit update',
            'unit delete',
            'unit import',
        ];
// Admin permissions as company
        $compnay_permission = [
            'user manage',
            'user create',
            'user edit',
            'user delete',
            'user profile manage',
            'user chat manage',
            'user reset password',
            'user login manage',
            'user import',
            'user logs history',
            'workspace manage',
            'workspace create',
            'workspace edit',
            'workspace delete',
            'roles manage',
            'roles create',
            'roles edit',
            'roles delete',
            'plan manage',
            'plan purchase',
            'plan subscribe',
            'plan orders',
            'proposal manage',
            'proposal create',
            'proposal edit',
            'proposal delete',
            'proposal show',
            'proposal send',
            'proposal duplicate',
            'proposal product delete',
            'proposal convert invoice',
            'invoice manage',
            'invoice create',
            'invoice edit',
            'invoice delete',
            'invoice show',
            'invoice send',
            'invoice duplicate',
            'invoice product delete',
            'invoice payment create',
            'invoice payment delete',
            'setting manage',
            'setting logo manage',
            'setting theme manage',
            'helpdesk ticket manage',
            'helpdesk ticket create',
            'helpdesk ticket edit',
            'helpdesk ticket show',
            'helpdesk ticket reply',
            'helpdesk ticket delete',

            'project manage',
            'project create',
            'project edit',
            'project show',
            'project update',
            'project delete',

            'unit create',
            'unit edit',
            'unit update',
            'unit show',
            'unit delete',
            'unit import',
            'unit export',

            'agency manage',
            'agency create',
            'agency view',
            'agency delete',
            'agency edit',
            'agency update',

            
            'salesoffer manage',
            'salesoffer create',
            'salesoffer view',
            'salesoffer delete',

            'unit reservation manage',
            'unit make reservation',
            'unit view reservation',
            'unit release',

            'commission manage',

        ];

      

        $superAdminRole  = Role::where('name', 'super admin')->first();
        foreach ($adnin_permission  as $key => $value) {
            $permission = Permission::where('name', $value)->where('module', 'General')->first();
            if (empty($permission)) {
                $permission = Permission::updateOrCreate(
                    [
                        'name' => $value,
                        'guard_name' => 'web',
                        'module' => 'General',
                        'created_by' => $admin->id,
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s')
                    ]
                );
            }
            $superAdminRole->givePermissionTo($permission);
        }

        $company_role = Role::where('name', 'company')->first();
        foreach ($compnay_permission as $key => $value) {
            $permission = Permission::where('name', $value)->where('module', 'General')->first();
            if (empty($permission)) {
                $permission = Permission::updateOrCreate(
                    [
                        'name' => $value,
                        'guard_name' => 'web',
                        'module' => 'General',
                        'created_by' => $admin->id,
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s')
                    ]
                );
            }
            $company_role->givePermissionTo($permission);
        }

        if ($admin) {
            $admin->assignRole($superAdminRole);
        }

        $company = User::where('type', 'company')->first();
        if ($company) {
            $company->assignRole($company_role);
        }

        $agency_permission = [
            'project manage',
            'project show',

            'unit show',
            'make reservation',

            'salesoffer manage',
            'salesoffer create',
            'salesoffer view',

            'agent manage',
            'agent create',
            'agent edit',
            'agent update',
            'agent delete',
            'agent show',
            
            'commission manage',

            'client create',
            'client manage',
            'client edit',
            'client update',
            'client delete',
            
        ];
        
        $agency_role = Role::where('name', 'agency')->where('guard_name', 'web')->first();
        if (!$agency_role) {
            $agency_role = Role::updateOrCreate([
                'name' => 'agency',
                'created_by' => $admin->id,
            ]);
        }
        
        foreach ($agency_permission as $value) {
            $permission = Permission::where('name', $value)->where('module', 'General')->first();
            if (empty($permission)) {
                $permission = Permission::updateOrCreate([
                    'name' => $value,
                    'guard_name' => 'web',
                    'module' => 'General',
                    'created_by' => $admin->id,
                    'created_at' => date('Y-m-d H:i:s'), 
                    'updated_at' => date('Y-m-d H:i:s'), 
                ]);
            }
            $agency_role->givePermissionTo($permission);
        }
        //  Empire Agent
        $empire_agent_permission = [
            'project manage',
            'project show',

            'client create',
            'client manage',
            'client edit',
            'client update',
            'client delete',

            'unit show',
            'make reservation',

            'salesoffer manage',
            'salesoffer create',
            'salesoffer view',

            'commission manage',

        ];
        
        $empire_agent_role = Role::where('name', 'empire agent')->where('guard_name', 'web')->first();
        if (!$empire_agent_role) {
            $empire_agent_role = Role::updateOrCreate([
                'name' => 'empire agent',
                'created_by' => $admin->id,
            ]);
        }
        
        foreach ($empire_agent_permission as $value) {
            $permission = Permission::where('name', $value)->where('module', 'General')->first();
            if (empty($permission)) {
                $permission = Permission::updateOrCreate([
                    'name' => $value,
                    'guard_name' => 'web',
                    'module' => 'General',
                    'created_by' => $admin->id,
                    'created_at' => date('Y-m-d H:i:s'), 
                    'updated_at' => date('Y-m-d H:i:s'), 
                ]);
            }
            $empire_agent_role->givePermissionTo($permission);
        }
      
        //  Agency Agent
        $agent_permission = [
            'project manage',
            'project show',

            'unit show',
            'make reservation',

            'salesoffer manage',
            'salesoffer create',
            'salesoffer view',

            'commission manage',

            'client create',
            'client manage',
            'client edit',
            'client update',
            'client delete',
        ];
        
        $agent_role = Role::where('name', 'agent')->where('guard_name', 'web')->first();
        if (!$agent_role) {
            $agent_role = Role::updateOrCreate([
                'name' => 'agent',
                'created_by' => $admin->id,
            ]);
        }
        
        foreach ($agent_permission as $value) {
            $permission = Permission::where('name', $value)->where('module', 'General')->first();
            if (empty($permission)) {
                $permission = Permission::updateOrCreate([
                    'name' => $value,
                    'guard_name' => 'web',
                    'module' => 'General',
                    'created_by' => $admin->id,
                    'created_at' => date('Y-m-d H:i:s'), 
                    'updated_at' => date('Y-m-d H:i:s'), 
                ]);
            }
            $empire_agent_role->givePermissionTo($permission);
        }

        
        
    }
}
