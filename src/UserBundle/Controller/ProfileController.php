<?php
/**
 * To Handle Profile Type related Actions required
 * @author Ashutosh Rai <a.kumar@medlamg.com>
 * @createdAt 11/03/19 12:33
 */
namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class ProfileController
 * @package UserBundle\Controller
 */
class ProfileController extends Controller
{
    public function indexAction(Request $request){

        return $this->render('UserBundle:Profile:index.html.twig', [

        ]);
    }

    public function postAction(Request $request){

    }
}