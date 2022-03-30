<?php

namespace Modules\Setting\Http\Controllers;


use App\Http\Controllers\Controller;
use Modules\Setting\DataTables\UserDataTable;
use Modules\Setting\Http\Requests\UserRequest;
use Modules\Setting\Repositories\CountryRepositoryInterface;
use Modules\Setting\Repositories\RoleRepositoryInterface;
use Modules\Setting\Repositories\UserRepositoryInterface;


class UserController extends Controller
{
    protected $usersRepository, $roleRepository, $countriesRepository;

    public function __construct(UserRepositoryInterface    $usersRepository,
                                RoleRepositoryInterface    $roleRepository,
                                CountryRepositoryInterface $countriesRepository)
    {
        $this->usersRepository = $usersRepository;
        $this->roleRepository = $roleRepository;
        $this->countriesRepository = $countriesRepository;
    }

    public function index(UserDataTable $dataTable)
    {
        return $dataTable->render('setting::user.index');
    }

    public function create()
    {
        $user = $this->usersRepository->newObject();
        $counties = $this->countriesRepository->allInArray();
        $roles = $this->roleRepository->allInArray();
        return view('setting::user.create', compact('user', 'counties', 'roles'));
    }


    public function store(UserRequest $request)
    {
        $this->usersRepository->store($request->validated());
        return redirect()->route('users.index')
            ->with('success', trans('common.Created successfully'));
    }


    public function show($id)
    {
        $user = $this->usersRepository->findById($id);

        return view('setting::user.show', compact('user'));
    }


    public function edit($id)
    {
        $user = $this->usersRepository->findById($id);

        return view('setting::user.edit', compact('user'));
    }


    public function update(userRequest $request, $id)
    {
        $this->usersRepository->update($id, $request->validated());
        return redirect()->route('users.index')
            ->with('success', trans('common.Updated successfully'));
    }

    public function destroy($id)
    {
        $this->usersRepository->deleteById($id);
        return redirect()->route('users.index')
            ->with('success', trans('common.Deleted successfully'));
    }
}
