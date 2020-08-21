<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{

	/**
	 * @Route("/")
	 */
	public function index(): Response
	{
	
		$number = rand(10,100);
		$data = [
			'PHP',
			'MySQL',
			'Javascript',
			'HMTL5',
			'CSS3'
		];

		return $this->render('index.html.twig', 
			[
				'number' => $number,
				'skills' => $data
			]
		);
	}	
}