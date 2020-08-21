composer require symfony/web-server-bundle --dev


1. how to create routing after creating controller ?
	
	- register under config folder
	config/
		routes.yaml 
			- hompage:
			  path: /
			  controller: App\Controller\IndexController::home

	or

	run composer require annotations
	and 

	use use Symfony\Component\Routing\Annotation\Route; in the controller wit annotaion
	/**
	* @Route("/")
	*/s
	public function targetMethod(){}




2. templates is missing and $this->twig->render() doen't work
	- 
	You can not use the "render" method if the Templating Component or the Twig Bundle are not available. Try running "composer require symfony/twig-bundle".



3. installing Encore
	- https://symfony.com/doc/4.3/frontend.html#webpack-encore
	- https://symfony.com/doc/4.3/frontend/encore/installation.html
	- https://symfony.com/doc/4.3/frontend/encore/simple-example.html

4. to get the version of symfony 
	- bin/console --version


// php 
1.  \Throwable ?

	\RuntimeException ?
	\Exception
	\InvalidArgumentException




