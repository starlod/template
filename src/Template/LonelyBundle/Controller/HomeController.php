<?php
namespace Template\LonelyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/lonely")
 */
class HomeController extends Controller
{
    /**
     * @Route("/", name="lonely_home_index")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}