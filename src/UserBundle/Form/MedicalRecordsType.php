<?php
/**
 * To Handle Medical records related users / patient
 * @author Ashutosh Rai <a.kumar@medlamg.com>
 * @createdAt 12/03/19 18:06
 */
namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type;
use Symfony\Component\OptionsResolver\OptionsResolver;
use UserBundle\Entity\Profile;


/**
 * Class MedicalRecordsType
 * @package UserBundle\Form
 */
class MedicalRecordsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('weight')
            ->add('height')
            ->add('bloodType')
            ->add('pathologies')
            ->add('drugs')
            ->add('allergies')

            ->add('isSharingInformation', Type\ChoiceType::class, [
                'required' => true,
                'choices'  => [
                    'Yes' => true,
                    'No' => false
                ],
                'expanded' => true,
            ]);
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        //parent::configureOptions($resolver);
        $resolver->setDefaults(array(
            'data_class' => Profile::class,
            'validation_groups' => array('Default','Create'),
            'csrf_protection'    => false,
            'allow_extra_fields' => true,
            'em' => null
        ));
    }
}