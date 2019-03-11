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
      * @ORMColumn(name="name", type="string", nullable=false, length=30)
      */
     protected $name;

 }