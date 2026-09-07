<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Foundation\Auth\User as AuthUser;
use Spatie\Activitylog\Models\Activity;

class ActivityPolicy
{
    use HandlesAuthorization;

    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('view_any:activity');
    }

    public function view(AuthUser $authUser, Activity $activity): bool
    {
        return $authUser->can('view:activity');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('create:activity');
    }

    public function update(AuthUser $authUser, Activity $activity): bool
    {
        return $authUser->can('update:activity');
    }

    public function delete(AuthUser $authUser, Activity $activity): bool
    {
        return $authUser->can('delete:activity');
    }
}
