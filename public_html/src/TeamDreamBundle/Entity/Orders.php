<?php

namespace TeamDreamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 */
class Orders
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=FALSE)
     */
    private $userId;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=FALSE)
     */
    private $carId;

 /**
      * @ORM\ManyToOne(targetEntity="Users", inversedBy="orders")
      * @ORM\JoinColumn(name="users_id", referencedColumnName="id")
      */


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set userId
     *
     * @param string $userId
     * @return Orders
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return string 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set carId
     *
     * @param string $carId
     * @return Orders
     */
    public function setCarId($carId)
    {
        $this->carId = $carId;

        return $this;
    }

    /**
     * Get carId
     *
     * @return string 
     */
    public function getCarId()
    {
        return $this->carId;
    }
}
