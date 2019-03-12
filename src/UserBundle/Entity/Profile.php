<?php
/**
 * To Handle all profile table operations
 * @author Ashutosh Rai <a.kumar@medlamg.com>
 * @createdAt 11/03/19 12:33
 */

 namespace UserBundle\Entity;

 use Doctrine\ORM\Mapping as ORM;

 /**
  * Class Profile
  * @package UserBundle\Entity
  * @ORM\Entity
  * @ORM\Table(name="profile")
  */
 class Profile
 {
     /**
      * @var int
      * @ORM\Id
      * @ORM\Column(type="integer", name="id", nullable=false)
      * @ORM\GeneratedValue(strategy="AUTO")
      */
     protected $id;

     /**
      * @var String
      * @ORM\Column(name="first_name", type="string", nullable=false, length=30)
      */
     protected $name;

     #######################################################################################
     # patient info
     #######################################################################################

     /**
      * @var string
      *
      * @ORM\Column(name="weight", type="decimal", nullable=true, precision=6, scale=2)
      */
     private $weight;

     /**
      * @var string
      *
      * @ORM\Column(name="height", type="decimal", nullable=true, precision=6, scale=2)
      */
     private $height;

     /**
      * @var string
      *
      * @ORM\Column(name="blood_type", type="string", nullable=true, columnDefinition="enum('A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-')")

      */
     private $bloodType;

     /**
      * @var String
      *
      * @ORM\Column(name="pathologies", type="string", length=1000, nullable=true)
      */
     private $pathologies;

     /**
      * @var String
      *
      * @ORM\Column(name="drugs", type="string", length=1000, nullable=true)
      */
     private $drugs;

     /**
      * @var String
      *
      * @ORM\Column(name="allergies", type="string", length=2000, nullable=true)
      */
     private $allergies;

     /**
      * @var String
      *
      * @ORM\Column(name="additional_information", type="string", length=2000, nullable=true)
      */
     private $additionalInformation;

     /**
      * @var Boolean
      *
      * @ORM\Column(name="is_sharing_information", type="boolean", nullable=true)
      */
     private $isSharingInformation;

     /**
      * @var \DateTime
      *
      * @ORM\Column(name="created_at", type="datetime", nullable=true)
      */
     private $createdAt;

     /**
      * @var \DateTime
      *
      * @ORM\Column(name="updated_at", type="datetime", nullable=true)
      */
     private $updatedAt;
     

 
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
     * Set name
     *
     * @param string $name
     *
     * @return Profile
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set weight
     *
     * @param string $weight
     *
     * @return Profile
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set height
     *
     * @param string $height
     *
     * @return Profile
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set bloodType
     *
     * @param string $bloodType
     *
     * @return Profile
     */
    public function setBloodType($bloodType)
    {
        $this->bloodType = $bloodType;

        return $this;
    }

    /**
     * Get bloodType
     *
     * @return string
     */
    public function getBloodType()
    {
        return $this->bloodType;
    }

    /**
     * Set pathologies
     *
     * @param string $pathologies
     *
     * @return Profile
     */
    public function setPathologies($pathologies)
    {
        $this->pathologies = $pathologies;

        return $this;
    }

    /**
     * Get pathologies
     *
     * @return string
     */
    public function getPathologies()
    {
        return $this->pathologies;
    }

    /**
     * Set drugs
     *
     * @param string $drugs
     *
     * @return Profile
     */
    public function setDrugs($drugs)
    {
        $this->drugs = $drugs;

        return $this;
    }

    /**
     * Get drugs
     *
     * @return string
     */
    public function getDrugs()
    {
        return $this->drugs;
    }

    /**
     * Set allergies
     *
     * @param string $allergies
     *
     * @return Profile
     */
    public function setAllergies($allergies)
    {
        $this->allergies = $allergies;

        return $this;
    }

    /**
     * Get allergies
     *
     * @return string
     */
    public function getAllergies()
    {
        return $this->allergies;
    }

    /**
     * Set additionalInformation
     *
     * @param string $additionalInformation
     *
     * @return Profile
     */
    public function setAdditionalInformation($additionalInformation)
    {
        $this->additionalInformation = $additionalInformation;

        return $this;
    }

    /**
     * Get additionalInformation
     *
     * @return string
     */
    public function getAdditionalInformation()
    {
        return $this->additionalInformation;
    }

    /**
     * Set isSharingInformation
     *
     * @param boolean $isSharingInformation
     *
     * @return Profile
     */
    public function setIsSharingInformation($isSharingInformation)
    {
        $this->isSharingInformation = $isSharingInformation;

        return $this;
    }

    /**
     * Get isSharingInformation
     *
     * @return boolean
     */
    public function getIsSharingInformation()
    {
        return $this->isSharingInformation;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Profile
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Profile
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
