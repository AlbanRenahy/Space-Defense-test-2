<?php

namespace src\Model;

/**Character of the CommandShip. A character has a role('admiral'), a name('alban') and take part of vessels collection. This class is currently only used for fleet test */
class Character
{
    private $role;
    private $name;

    public function __construct(Role $role, string $name)
    {
        $this->role = $role;
        $this->name = $name;
    }
}
