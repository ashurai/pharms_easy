<?php
/**
 * To Handle User Table
 * @author Ashutosh Rai <a.kumar@medlamg.com>
 * @createdAt 11/03/19 12:33
 */
namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User 
 * 
 * @ORM\Table(name="user", 
 *      uniqueConstraints={
 *          @ORM\UniqueConstraint(name="unique_username_canonical", columns={"username_canonical"}),
 *          @ORM\UniqueConstraint(name="unique_email_canonical", columns={"email_canonical"}),
 *          @ORM\UniqueConstraint(name="unique_confirmation_token", columns={"confirmation_token"}),
 *      },
 *      indexes={
 *          @ORM\Index(name="idx_user_profile_type", columns={"profile_type"})
 *      }
 * )
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="bigint")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=255, nullable=true)
     */
    protected $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255, nullable=true)
     */
    protected $lastName;

    /**
     * @var String
     *
     * @ORM\Column(name="profile_type", type="string", length=15, nullable=false)
     */
    protected $profileType;

    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Set profileType
     *
     * @param string $profileType
     *
     * @return User
     */
    public function setProfileType($profileType)
    {
        $this->profileType = $profileType;

        return $this;
    }

    /**
     * Get profileType
     *
     * @return string
     */
    public function getProfileType()
    {
        return $this->profileType;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }
}
