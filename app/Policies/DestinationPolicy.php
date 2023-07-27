<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Destination;
use Illuminate\Auth\Access\HandlesAuthorization;

class DestinationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return $user->can('view_any_destination');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Destination $destination)
    {
        return $user->can('view_destination');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->can('create_destination');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Destination $destination)
    {
        return $user->can('update_destination');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Destination $destination)
    {
        return $user->can('delete_destination');
    }

    /**
     * Determine whether the user can bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function deleteAny(User $user)
    {
        return $user->can('delete_any_destination');
    }

    /**
     * Determine whether the user can permanently delete.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Destination $destination)
    {
        return $user->can('force_delete_destination');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDeleteAny(User $user)
    {
        return $user->can('force_delete_any_destination');
    }

    /**
     * Determine whether the user can restore.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Destination $destination)
    {
        return $user->can('restore_destination');
    }

    /**
     * Determine whether the user can bulk restore.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restoreAny(User $user)
    {
        return $user->can('restore_any_destination');
    }

    /**
     * Determine whether the user can replicate.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function replicate(User $user, Destination $destination)
    {
        return $user->can('replicate_destination');
    }

    /**
     * Determine whether the user can reorder.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function reorder(User $user)
    {
        return $user->can('reorder_destination');
    }

    public function viewAll(User $user)
    {
        return $user->can('view_all_destination');
    }

    public function approve(User $user)
    {
        return $user->can('approve_destination');
    }
    public function reject(User $user)
    {
        return $user->can('reject_destination');
    }
}