<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AddRolePermission extends Migration
{

    public function up()
    {
        // Create Roles
        $superAdmin = Role::create(['name' => 'Super Admin']);
        $admin = Role::create(['name' => 'Admin']);

        // Permission List as array
//        $permissions = [
//            [
//                'group_name' => 'User',
//                'permissions' => [
//                    'user.create',
//                    'user.view',
//                    'user.edit',
//                    'user.delete',
//                    'user.import',
//                    'change.password',
//                ]
//            ],
//            [
//                'group_name' => 'role',
//                'permissions' => [
//                    'role.create',
//                    'role.view',
//                    'role.edit',
//                    'role.delete',
//                ]
//            ],
//        ];
//
//        // Create and Assign Permissions
//        for ($i = 0; $i < count($permissions); $i++) {
//            $permissionGroup = $permissions[$i]['group_name'];
//            for ($j = 0; $j < count($permissions[$i]['permissions']); $j++) {
//                Permission::create(['name' => $permissions[$i]['permissions'][$j], 'group_name' => $permissionGroup]);
//            }
//        }


        $user = User::where('email', 'admin@gmail.com')->first();
        if (is_null($user)) {
            $user = new User();
            $user->name = "Ashif";
            $user->email = "admin@gmail.com";
            $user->email_verified_at = now();
            $user->password = Hash::make('123456');
            $user->save();
        }
        $user->assignRole($superAdmin);

        $user2 = User::where('email', 'business@gmail.com')->first();
        if (is_null($user2)) {
            $user2 = new User();
            $user2->name = "Business User";
            $user2->email = "business@gmail.com";
            $user2->email_verified_at = now();
            $user2->password = Hash::make('123456');
            $user2->save();
        }
        $user2->assignRole($admin);
    }


    public function down()
    {
        //
    }
}
