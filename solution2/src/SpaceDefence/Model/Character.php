<?php

namespace App\SpaceDefence\Model;

/**Character of the CommandShip. A character has a role('admiral'), a name('alban') and take part of vessels collection */
class Character
{
    private Role $role;
    private string $name;
    private $vessels;

    public function __construct(Role $role, string $name, array $vessels)
    {
        $this->role = $role;
        $this->name = $name;
        $this->vessels = $vessels;
    }
}
