<?php

use Doctrine\ORM\Mapping AS ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="NauticBase")
 */
class NauticBase
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\Column(type="string")
     */
    protected $description;

    /**
     * @ORM\Column(type="string")
     */
    protected $address;

    /**
     * @ORM\Column(type="string")
     */
    protected $city;

    /**
     * @ORM\Column(type="integer")
     */
    protected $postal_code;


    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getPostalCode()
    {
        return $this->postal_code;
    }

    public function setName()
    {
        return $this->name;
    }

    public function setDescription()
    {
        return $this->description;
    }

    public function setAddress()
    {
        return $this->address;
    }

    public function setCity()
    {
        return $this->city;
    }

    public function setPostalCode()
    {
        return $this->postal_code;
    }
}