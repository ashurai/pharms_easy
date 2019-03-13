<?php

/**
 * To Handle App default actions
 * @author Ashutosh Rai <a.kumar@medlamg.com>
 * @createdAt 11/03/19 12:33
 */
namespace UserBundle\Controller;

use UserBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Request;
use UserBundle\Entity\User;

/**
 * Class DefaultController
 * @package UserBundle\Controller
 */
class DefaultController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $userList = $em->getRepository('UserBundle:User')->findAll();
        $user = $this->getUser();
        $userId = $user->getId();
        return $this->render('UserBundle:Default:index.html.twig', [
            'users' => $userList,
            'userId' => $userId,
        ]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function newAction(Request $request){
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        if ($request->getMethod() == "POST"){
            if($form->isValid()){
                print_r($form->getData());exit;
            }
        }

        return $this->render("UserBundle:Default:new.html.twig", [
            'form' => $form->createView()
        ]);
    }
}
