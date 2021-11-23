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
                
            ],
            3 => [
                
            ],
            4 => [
                
            ],
            5 => [
                
            ],
            6 => [
                
            ],
            7 => [
                
            ],
        ];
        return $data;
    }
}