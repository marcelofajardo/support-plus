<?php

namespace Modules\Setting\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\Eloquent\BaseRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Modules\Setting\Repositories\UserRepositoryInterface;
use Spatie\Permission\Models\Role;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{

    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function userStore($data): Model
    {
        $role_id = $data['role'];
        unset($data['role']);

        $user = User::create($data);
        $role = Role::find($role_id);
        if ($role) {
            $user->assignRole($role);
        }
        return $user;
    }

    public function totalThisMonthUsers(): int
    {
        return User::whereYear('created_at', '=', now()->year)
            ->whereMonth('created_at', '=', now()->month)->count();
    }

    public function recentJoin(): Collection
    {
        return User::with('roles')->whereHas('roles', function ($q) {
            $q->where('name', 'Admin');
        })->with('payments')->latest()->limit(5)->get();
    }

    public function allActiveAdminInArray(): array
    {
        return User::with('roles')->whereHas('roles', function ($q) {
            $q->where('name', 'Admin');
        })->latest()->where('status', 1)->pluck('name', 'id')->toArray();
    }

    public function totalUsers(): int
    {
        return User::count();
    }
}
