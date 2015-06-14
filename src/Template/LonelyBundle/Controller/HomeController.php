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
     * @Route("/", name="home_index")
     * @Method("GET")
     * @Template("TemplateLonelyBundle:Home:Index")
     */
    public function indexAction()
    {
        // return array();
        return $this->render('TemplateLonelyBundle:Home:index.html.twig');
    }
}