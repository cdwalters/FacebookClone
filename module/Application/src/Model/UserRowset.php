<?php
namespace Application\Model;

use Application\Model\UserRow as Row;

class UserRowset
{
    public $data = [];
    public $pPath = '/modules/user/profiles/';
    public $cPath = '/modules/user/covers/';
    
    public function __construct()
    {
        return $this;
    }
    public function fetchById($userId)
    {
        $data = $this->fetchResult();
        $arrayObject = new \ArrayObject($data);
        
        $sorted =[];
        foreach ($arrayObject as $row) {
            $row = new Row($row);
            var_dump($row->getArrayCopy());
        }
        
        //var_dump($arrayObject);
    }
    public function fetchResult()
    {
        $data = [
            0 => [
                'userId' => 1,
                'userName' => 'evansocom',
                'firstName' => 'Evan',
                'lastName' => 'Alexander',
                'profileImage' => $this->pPath . 'ealexander.jpg',
                'coverImage' => $this->cPath . 'ealexander.jpg',
                'friends' => [3, 6, 2,],
            ],
            1 => [
                'userId' => 2,
                'userName' => 'pjohnson',
                'firstName' => 'Patty',
                'lastName' => 'Johnson',
                'profileImage' => $this->pPath . 'pjohnson.jpg',
                'coverImage' => $this->cPath . 'pjohnson.jpg',
                'friends' => [2, 4, 6,],
            ],
            2 => [
                'userId' => 3,
                'userName' => 'malex',
                'firstName' => 'Misty',
                'lastName' =>  'Alexander',
                'profileImage' => $this->pPath . 'misty.jpg',
                'coverImage' => $this->cPath . 'misty.jpg',
                'friends' => [4, 5, 7,],
            ],
            3 => [
                'userId' => 4,
                'userName' => 'jsmith',
                'firstName' => 'Joey',
                'lastName' => 'Smith',
                'profileImage' => $this->pPath . 'jsmith.jpg',
                'coverImage' => $this->cPath . 'jsmith.jpg',
                'friends' => [2, 1, 3,],
            
            ],
            4 => [
                'userId' => 5,
                'userName' => 'dsmith',
                'firstName' => 'Dalton',
                'lastName' => 'Smith',
                'profileImage' => $this->pPath . 'dsmith.jpg',
                'coverImage' => $this->cPath . 'dsmith.jpg',
                'friends' => [4, 1, 2,],
            ],
            5 => [
                'userId' => 6,
                'userName' => 'asmith5904',
                'firstName' => 'Aaron',
                'lastName' => 'Smith',
                'profileImage' => $this->pPath . 'asmith.jpg',
                'coverImage' => $this->cPath . 'asmith.jpg',
                'friends' => [1, 5, 4,],
            ],
            6 => [
                'userId' => 7,
                'userName' => 'debbie',
                'firstName' => 'Debbie',
                'lastName' => 'Smith',
                'profileImage' => $this->pPath . 'debbie.jpg',
                'coverImage' => $this->cPath . 'debbie.jpg',
                'friends' => [2, 3, 4,],
            ],
            7 => [
                'userId' => 8,
                'userName' => 'pro',
                'firstName' => 'Eric',
                'lastName' => 'Christianson',
                'profileImage' => $this->pPath . 'eric.jpg',
                'coverImage' => $this->cPath . 'eric.jpg',
                'friends' => [2, 6, 1,],
            ],
        ];
        return $data;
    }
}