<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Foundation\Auth\User as AuthUser;

class UserPolicy
{
    use HandlesAuthorization;

    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('view_any:user');
    }

    public function view(AuthUser $authUser): bool
    {
        return $authUser->can('view:user');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('create:user');
    }

    public function update(AuthUser $authUser): bool
    {
        return $authUser->can('update:user');
    }

    public function delete(AuthUser $authUser): bool
    {
        return $authUser->can('delete:user');
    }
}
