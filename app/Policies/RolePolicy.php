<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Foundation\Auth\User as AuthUser;
use Spatie\Permission\Models\Role;

class RolePolicy
{
    use HandlesAuthorization;

    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('view_any:role');
    }

    public function view(AuthUser $authUser, Role $role): bool
    {
        return $authUser->can('view:role');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('create:role');
    }

    public function update(AuthUser $authUser, Role $role): bool
    {
        return $authUser->can('update:role');
    }

    public function delete(AuthUser $authUser, Role $role): bool
    {
        return $authUser->can('delete:role');
    }
}
