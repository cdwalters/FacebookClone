<?php

declare(strict_types=1);

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;
use Application\Model\UserRow;
use Application\Model\UserRowset;

class FriendsController extends AbstractActionController
{
    
    public $users = [];
    public $user;
    public function __construct()
    {
        $this->user= new UserRow();
    }

    public function indexAction()
    {
        $rowSet = new UserRowset();
        return new ViewModel(['resultSet' => $rowSet]);
    }
}
