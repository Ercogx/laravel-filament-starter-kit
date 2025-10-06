<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Auth\Access\HandlesAuthorization;

class ActivityPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('view_any_activity');
    }

    public function view(AuthUser $authUser, Activity $activity): bool
    {
        return $authUser->can('view_activity');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('create_activity');
    }

    public function update(AuthUser $authUser, Activity $activity): bool
    {
        return $authUser->can('update_activity');
    }

    public function delete(AuthUser $authUser, Activity $activity): bool
    {
        return $authUser->can('delete_activity');
    }

    public function restore(AuthUser $authUser, Activity $activity): bool
    {
        return $authUser->can('restore_activity');
    }

    public function forceDelete(AuthUser $authUser, Activity $activity): bool
    {
        return $authUser->can('force_delete_activity');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('force_delete_any_activity');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('restore_any_activity');
    }

    public function replicate(AuthUser $authUser, Activity $activity): bool
    {
        return $authUser->can('replicate_activity');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('reorder_activity');
    }

}