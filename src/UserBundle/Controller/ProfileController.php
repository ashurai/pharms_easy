<?php
/**
 * To Handle Profile Type related Actions required
 * @author Ashutosh Rai <a.kumar@medlamg.com>
 * @createdAt 11/03/19 12:33
 */
namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\Profile;
use UserBundle\Form\MedicalRecordsType;

/**
 * Class ProfileController
 * @package UserBundle\Controller
 */
class ProfileController extends Controller
{
    /**
     * @param Request $request
     * @param $userId
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request, $userId){

        $user = $this->getUser();

        $profile = $em = $this->getDoctrine()->getRepository('UserBundle:Profile')->findOneBy(array('user' => $userId));

        //var_dump($profile);exit;
        if(!$profile){
            $profile = new Profile();
            $isShared = false;
        }else{
            $isShared = $profile->getIsSharingInformation();
        }

        $medicalForm = $this->createForm(MedicalRecordsType::class, $profile);
        $isAccountOwner = false;
        if ($user->getId() == $userId){
            $isAccountOwner = true;
        }


        if($request->getMethod() == "POST") {
            $medicalForm->handleRequest($request);
            if ($medicalForm->isSubmitted() && $medicalForm->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $profile->setUser($this->getUser());
                $em->persist($profile);
                $em->flush();
            }
        }

        return $this->render('UserBundle:Profile:index.html.twig', [
            'user' => $user,
            'profileForm' => $medicalForm->createView(),
            'isAccountOwner' => $isAccountOwner,
            'isShared' => $isShared
        ]);
    }
}