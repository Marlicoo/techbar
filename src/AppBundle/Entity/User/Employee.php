<?php

namespace AppBundle\Entity\User;

use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="employee")
 * @UniqueEntity(fields = "username", targetClass = "AppBundle\Entity\User\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "AppBundle\Entity\User\User", message="fos_user.email.already_used")
 */
class Employee extends User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer", nullable=false)
     * @Assert\NotBlank(message = "Personal number is required", groups={"registration"})
     */
    private $pesel;

    /**
     * @ORM\Column(type="string", nullable=false)
     * @Assert\NotBlank(message = "First name is required", groups={"registration"})
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", nullable=false)
     * @Assert\NotBlank(message = "Last name is required", groups={"registration"})
     */
    private $lastName;

    /**
     * @return int|null
     */
    public function getPesel(): ?int
    {
        return $this->pesel;
    }

    /**
     * @param int $pesel
     */
    public function setPesel(int $pesel):void
    {
        $this->pesel = $pesel;
    }

    /**
     * @return null|string
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return null|string
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }


}