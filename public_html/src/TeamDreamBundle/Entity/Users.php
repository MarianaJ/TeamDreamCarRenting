<?php

namespace TeamDreamBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
 
/**
* @ORM\Entity
* @ORM\Table(name="fos_user")
*/
class Users extends BaseUser
{

/**
* @ORM\OneToMany(targetEntity="Orders", mappedBy="username")
*/

/**
* @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue(strategy="AUTO")
*/
protected $id;

/**
* @var string
*
* @ORM\Column(name="orders", type="text", nullable=FALSE)
*/

protected $orders;
 
public function __construct()
{
parent::__construct();
// your own logic
}
}