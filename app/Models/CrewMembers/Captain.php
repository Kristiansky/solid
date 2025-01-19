<?php

namespace App\Models\CrewMembers;

use Illuminate\Database\Eloquent\Model;

class Captain extends Model
{
    public function hire(ManageableInterface $worker)
    {
        return $worker->beManaged();
    }
}
