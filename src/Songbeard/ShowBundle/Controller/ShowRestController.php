<?php
/**
 * Created by PhpStorm.
 * User: djessup
 * Date: 9/06/2014
 * Time: 4:06 PM
 */

namespace Songbeard\ShowBundle\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

class ShowRestController extends Controller
{
	/**
	 * @Rest\View()
	 */
	public function searchAction(Request $request)
	{
		$query = $request->query->get('q');
		if ($query)
		{
			$api = $this->get('thetvdb');
			$shows = $api->searchTvShow($query);

			return $shows;
		}
		else
		{
			throw new HttpException(400, "No query was provided. Use the 'q' parameter to specify search terms");
		}
	}
} 