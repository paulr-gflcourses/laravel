<?php
namespace MegaApp\Repository\UserRepository;

class  UserRepository implements UserRepositoryInterface
{
    protected $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }
}

?>
