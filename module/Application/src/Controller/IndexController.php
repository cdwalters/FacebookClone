<?php

declare(strict_types=1);

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;
use Application\Model\UserRow;
use Application\Model\UserRowset;
class IndexController extends AbstractActionController
{
    
    public $users = [];
    public $user;
    public function __construct()
    {

        $this->user = new UserRow($this->evan());
    }

    public function indexAction()
    {
        
        
        // build the user data and populate the class property $this->user
       // $this->buildUser($this->evan());
        // assign a local variable to hold the friends data before we unset it on the class property so its not duplicated to the layout
        $friendList = $this->user->getFriends();
        // unset the friends data so that we trim it down for the layouto
        //unset($this->user['friends']);
       // var_dump($this->user);
        //assign the class property to the layout for use above the action view
        $this->layout()->user = $this->user->getArrayCopy();
        // return the view model with the view level variables assigned within its scope for use
        return new ViewModel([
                            'user' => $this->user->getArrayCopy(),
                            'friends' => $this->user->getFriends(),
        ]);
    }
    public function profileAction()
    {
        //var_dump($this->params('userId'));
        $userId = $this->params('userId');
        var_dump($this->getRequest()->getQuery());
        $rowSet = new UserRowset();
        //var_dump($rowSet->fetchResult());         
          //var_dump($rowSet->fetchById(2));
         $this->layout()->user = $this->user->getArrayCopy();
        return new ViewModel([
            'user' => $this->user->getArrayCopy(),
            
         ]);
    }
    public function friendsAction()
    {
        $rowSet = new UserRowset();
        $result = $rowSet->fetchResult();
        var_dump($result);
    }
    //evan.png
    private function evan()
    {
        $data['userName'] = 'evansocom';
        $data['firstName'] = 'Evan';
        $data['lastName'] = 'Alexander';
        $data['profileImage'] = '/img/239298557_2628758764097204_7736176513223063324_n.jpg';
        $data['coverImage'] = '/img/911.jpg';
        $data['friends'] = [
                            'Patty Johnson', 
                            'Misty Alexander', 
                            'Debbie Smith', 
                            'Eric Christianson', 
                            'Joey Smith',  
                            'Dalton Smith',
                            'Aaron Smith',
                            ];
        return $data;
    }
}
