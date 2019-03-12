<?php
/**
 * To deal with user register
 * @author Ashutosh Rai <a.kumar@medlamg.com>
 * @createdAt 11/03/19 12:33
 */
namespace UserBundle\Form;

use Doctrine\ORM\EntityRepository;
use UserBundle\Entity\Enum\ProfileTypeEnum;
use Userbundle\Entity\User;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class UserType
 * @package UserBundle\Form
 */
class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //options parameters
        $em = $options['em'];

        //data
        $profileType = ProfileTypeEnum::getAllValues();

        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('email',Type\EmailType::class,[
                'required' => true,
            ])
            ->add('profileType', Type\ChoiceType::class, [
                'required' => true,
                'choices'  => [
                    'DOCTOR' => 0,
                    'PHARMACIST' => 1,
                    'PATIENT' => 2
                ],
                'expanded' => true,
            ]);
        ;
    }

    /**
     * Get parent default fosuserbundle user form type
     * @return string
     */
    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }


    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        //parent::configureOptions($resolver);
        $resolver->setDefaults(array(
            'data_class' => User::class,
            'validation_groups' => array('Default','Create'),
            'csrf_protection'    => false,
            'allow_extra_fields' => true,
            'em' => null
        ));
    }
}
