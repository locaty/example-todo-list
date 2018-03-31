<?php

namespace App\Entity\Mapper;

use RsORM\State;

class Task extends State\Entity {

    public $id;
    public $name;
    public $status;
}
