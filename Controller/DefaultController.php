<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{


    /**
     * @Route("firstTest", name="first_test")
     * @return \Symfony\Component\HttpFoundation\Response
     * @Method("GET")
     */

    public function firstAction()
    {
        return $this->render('test/first.html.twig');
    }

    /**
     * @Route("secondTest", name="second_test")
     * @return \Symfony\Component\HttpFoundation\Response
     * @Method("GET")
     */

    public function secondAction()
    {
        return $this->render('test/second.html.twig');
    }


}
