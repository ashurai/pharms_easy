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
     * @var String
     *
     * @ORM\Column(name="profile_type", type="string", length=15, nullable=false)
     */
    protected $profileType;

    /**
     * @var \UserBundle\Entity\Profile
     *
     * @ORM\OneToOne(targetEntity="\UserBundle\Entity\Profile")
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="profile_id", referencedColumnName="id")
     * })
     */
    protected $profile;

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
     * Set profile
     *
     * @param \UserBundle\Entity\Profile $profile
     *
     * @return User
     */
    public function setProfile(\UserBundle\Entity\Profile $profile = null)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get profile
     *
     * @return \UserBundle\Entity\Profile
     */
    public function getProfile()
    {
        return $this->profile;
    }
}
