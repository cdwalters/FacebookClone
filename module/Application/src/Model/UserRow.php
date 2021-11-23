<?php
namespace Application\Model;

class UserRow 
{
    public $userId;
    public $userName;
    public $firstName;
    public $lastName;
    public $coverImage;
    public $profileImage;
    /*
     * @var $friends array 
     */
    public $friends;
    
    public function __construct(array $data)
    {
        if(array_key_exists('userId', $data) || array_key_exists('userName', $data)) {
            $this->exchangeArray($data);
        }
        return $this;
    }
    public function exchangeArray($data = [])
    {
        $this->userId = !empty($data['userId']) ? $data['userId'] : null;
        $this->userName = !empty($data['userName']) ? $data['userName'] : null;
        $this->firstName = !empty($data['firstName']) ? $data['firstName'] : null;
        $this->lastName = !empty($data['lastName']) ? $data['lastName'] : null;
        $this->profileImage = !empty($data['profileImage']) ? $data['profileImage'] : null;
        $this->coverImage = !empty($data['coverImage']) ? $data['coverImage'] : null;
        $this->friends = !empty($data['friends']) ? $data['friends'] : null;
    }
    public function getArrayCopy()
    {
        // $data['userId'] = $this->getUserId();
        $data['userId'] = $this->userId;
        $data['userName'] = $this->userName;
        $data['firstName'] = $this->firstName;
        $data['lastName'] = $this->lastName;
        $data['profileImage'] = $this->profileImage;
        $data['coverImage'] = $this->coverImage;
        $data['friends'] = $this->friends;
        return $data;
    }
    
    /**
     * @return the $userId
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @return the $userName
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @return the $firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return the $lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return the $profileImageName
     */
    public function getProfileImage()
    {
        return $this->profileImage;
    }

    /**
     * @param field_type $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @param field_type $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * @param field_type $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @param field_type $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @param field_type $profileImage
     */
    public function setProfileImage($profileImage)
    {
        $this->profileImage = $profileImage;
    }
    /**
     * @return the $coverImage
     */
    public function getCoverImage()
    {
        return $this->coverImage;
    }

    /**
     * @return the $friends
     */
    public function getFriends()
    {
        return $this->friends;
    }

    /**
     * @param Ambigous <NULL, unknown> $coverImage
     */
    public function setCoverImage($coverImage)
    {
        $this->coverImage = $coverImage;
    }

    /**
     * @param Ambigous <NULL, unknown> $friends
     */
    public function setFriends($friends)
    {
        $this->friends = $friends;
    }

    
}