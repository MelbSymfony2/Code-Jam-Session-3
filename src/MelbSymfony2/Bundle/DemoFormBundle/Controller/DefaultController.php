<?php

namespace MelbSymfony2\Bundle\DemoFormBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * 
 */
class DefaultController extends Controller
{
    /**
     * @Route("/", name="demo_form")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('MelbSymfony2\Bundle\DemoFormBundle\Entity\Message');

        // TODO: Add in a form to validate and insert a "message" entity

        // ...


        // TODO: Add the form to the view
        return array(
            'entities' => $repository->findAll()
        );
    }
}
