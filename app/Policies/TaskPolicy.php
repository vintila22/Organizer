<?php

namespace App\Policies;

use App\User;
use App\Task;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    /**
     * Determine if the given user can delete the given task.
     *
     * @param  User  $user
     * @param  Task  $task
     * @return boo
     */
/*
    O tentativa de glumita, dar nu am reusit sa o implementez corect
    public function add(Task $task){
            if($task->name === "Cristi are nota 10"){
                return true;
            }else {
                return false;

            }

    }
*/
    public function destroy(User $user, Task $task)
    {
        return $user->id === $task->user_id;
    }




  
}
