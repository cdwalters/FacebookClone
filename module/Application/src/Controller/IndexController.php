<?php

declare(strict_types=1);

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public $users = [];
    protected function buildUser($data = [])
    {
        $this->user = $data;
    }
    public function indexAction()
    {
        // build the user data and populate the class property $this->user
        $this->buildUser($this->evan());
        // assign a local variable to hold the friends data before we unset it on the class property so its not duplicated to the layout
        $friendList = $this->user['friends'];
        // unset the friends data so that we trim it down for the layouto
        unset($this->user['friends']);
        var_dump($this->user);
        //assign the class property to the layout for use above the action view
        $this->layout()->user = $this->user;
        // return the view model with the view level variables assigned within its scope for use
        return new ViewModel([
                            'user' => $this->user,
                            'friends' => $friendList,
        ]);
    }
    public function profileAction()
    {
        $this->buildUser($this->evan());
        
        //var_dump($this->user);
        $this->layout()->user = $this->user;
        return new ViewModel(['user' => $this->user,]);
    }
    //evan.png
    private function evan()
    {
        $data['userName'] = 'evansocom';
        $data['firstName'] = 'Evan';
        $data['lastName'] = 'Alexander';
        $data['profileImage'] = '/img/239298557_2628758764097204_7736176513223063324_n.jpg';
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
