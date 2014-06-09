<?php

namespace Songbeard\ShowBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;

class ShowManagementController extends Controller
{

	public function listAction()
	{
		return $this->render('SongbeardShowBundle:ShowManagement:list.html.twig');
	}

    public function addAction()
    {

        return $this->render('SongbeardShowBundle:ShowManagement:add.html.twig');
    }

}
