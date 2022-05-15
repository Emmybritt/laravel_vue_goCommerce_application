<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Gate;

class RolePermissionController extends Controller
{
    public function createRole(Request $request)
    {
        if (! Gate::allows('create_role')) {
            abort(403);
        }

        $data = $request->validate([
            'name' => 'required|unique:roles,name'
        ]);
        $role = Role::create([
            'name' => $data['name'],
        ]);
        return response('success',200);
        
    }

    public function createPermission(Request $request)
    {
        if (! Gate::allows('create_permission')) {
            abort(403);
        }

        $data = $request->validate([
            'name' => 'required|unique:permissions,name'
        ]);

        $permission = Permission::create([
            'name' => $data['name']
        ]);
        return response('success',200);
    }

    public function assignRoleToUser(Request $request, $id)
    {
        $data = $request->validate([
            'permissions' => 'required'
        ]);

        if (! Gate::allows('role_access')) {
            abort(403);
        }

        $user = DB::table('user')->find($id);
        $user->syncPermissions($data['permissions']);

        return $user;

    }

    public function assignPermissionToUser(Request $request, $id, $permissions)
    {
        if (! Gate::allows('permission_access')) {
            abort(403);
        }
        $user = DB::table('user')->find($id);
        $user->syncPermissions($permissions);
    }

    public function assignPermissionToRole(Request $request, $id){
        if (! Gate::allows('permission_access')) {
            abort(403);
        }
    }
}
