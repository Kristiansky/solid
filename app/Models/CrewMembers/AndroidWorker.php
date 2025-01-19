<?php

namespace App\Models\CrewMembers;

use Illuminate\Database\Eloquent\Model;

class AndroidWorker extends Model implements WorkableInterface, ManageableInterface
{
    public function work()
    {
        return 'android working';
    }

    public function beManaged()
    {
        return 'android is being managed';
    }
}
