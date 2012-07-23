<?php

namespace NoiseLabs\Bundle\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/projects")
 *
 * @author Vítor Brandão <noisebleed@noiselabs.org>
 */
class ProjectController extends Controller
{
    /**
     * @Route("/", name="projects")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }
}