<?php

namespace Modules\Setting\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Modules\Setting\DataTables\RoleDataTable;
use Modules\Setting\Http\Requests\RoleRequest;
use Modules\Setting\Models\Role;
use Modules\Setting\Repositories\RoleRepositoryInterface;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    protected $rolesRepository;

    public function __construct(RoleRepositoryInterface $rolesRepository)
    {
        $this->rolesRepository = $rolesRepository;
    }

    public function index(RoleDataTable $dataTable)
    {
        return $dataTable->render('setting::role.index');
    }

    public function create()
    {
        $role = new Role();
        return view('setting::role.create', compact('role'));
    }

    public function store(RoleRequest $request)
    {
        $this->rolesRepository->store($request->validated());
        return redirect()->route('roles.index')
            ->with('success', trans('common.Created successfully'));
    }

    public function show($id)
    {
        $role = $this->rolesRepository->findById($id);

        return view('setting::role.show', compact('role'));
    }

    public function edit($id)
    {
        $role = $this->rolesRepository->findById($id);

        return view('setting::role.edit', compact('role'));
    }

    public function update(RoleRequest $request, $id)
    {
        $this->rolesRepository->update($id, $request->validated());
        return redirect()->route('roles.index')
            ->with('success', trans('common.Updated successfully'));
    }

    public function destroy($id)
    {
        $this->rolesRepository->deleteById($id);


        return redirect()->route('roles.index')
            ->with('success', trans('common.Deleted successfully'));
    }

    public function permission($id)
    {
        $role = \Spatie\Permission\Models\Role::findById($id);
        $permission_groups = User::getpermissionGroups();
        $all_permissions = Permission::all();
        return view('setting::role.permission', compact('all_permissions', 'role', 'permission_groups'));
    }

    public function permissionSubmit($id, Request $request)
    {
        $permissions = $request->input('permissions');
        $role = \Spatie\Permission\Models\Role::findById($id);
        if (!empty($permissions)) {
            $role->syncPermissions($permissions);
        }

        session()->flash('success', trans('common.Role has been created'));
        return back();
    }
}
