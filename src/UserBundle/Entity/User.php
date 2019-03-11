<?php 

namespace UserBundle\Entity;

use Doctrine\ORM\MApping as ORM;

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
 *          @ORM\Index(name="idx_user_profile_type", columns={"country_id"}),
 *          @ORM\Index(name="idx_fos_user_platform1", columns={"platform_id"})
 *      }
 * )
 */
class User
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="bigint")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @Assert\Length(min=8, groups={"Default", "Password", "Create", "Patch"})
     * @PasswordStrong(groups={"Default", "Password", "Create", "Patch"})
     * @Gedmo\Versioned
     */
    protected $plainPassword;

    /**
     * @var boolean
     *
     * @Serializer\Expose()
     * @Serializer\Groups({"Private", "Public"})
     * @Gedmo\Versioned
     */
    protected $enabled;
}