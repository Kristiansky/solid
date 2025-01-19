<?php

namespace App\Models\CrewMembers;

use Illuminate\Database\Eloquent\Model;

class HumanWorker extends Model implements WorkableInterface, SleepableInterface, ManageableInterface
{
    public function work()
    {
        return 'human working';
    }

    public function sleep()
    {
        return 'human sleeping';
    }

    public function beManaged()
    {
        return 'human is being managed';
    }
}
