<?php

namespace App\Mapper;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * @ODM\Document( db="BD_AUTH", collection="User", repositoryClass="App\Mapper\Repository\UserRepository") */
class User
{
    /**
     * @ODM\Id(strategy="AUTO")
     */
    public $id;

    /**
     * @ODM\Field(type="string")
     */
    public $username;

    /**
     * @ODM\Field(type="string")
     */
    public $password;


}