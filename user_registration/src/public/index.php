<?php 

session_start();


use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Slim\Middleware\SessionCookie;
use \Slim\Http;
require '..\vendor\autoload.php';

$app = new \Slim\App;
	$config = require __DIR__ . '/config.php';
	
$app = new \Slim\App($config);

	// Fetch DI Container
	$container = $app->getContainer();
	//$settings = $container->get('settings');

	// Register flash provider
	$container['flash'] = function () {
		return new \Slim\Flash\Messages();
	};
	
	
	// Register Twig View helper
	$container['view'] = function ($c) use ($app) {
		$view = new \Slim\Views\Twig('templates', [
			 'cache' => 'cache'
		]);
		
	
		// Instantiate and add Slim specific extension
		$basePath = rtrim(str_ireplace('index.php', '', $c['request']->getUri()->getBasePath()), '/');
		$view->addExtension(new Slim\Views\TwigExtension($c['router'], $basePath));
		$view->getEnvironment()->addGlobal('flash', $c['flash']); // this
		return $view;
	};
	
//route for welcome page
	$app->get('/user_page', function (Request $request, Response $response, $args) {
		return $this->view->render($response, 'user.twig', []);
	});
	
//route for login page
	$app->any('/user_login', function (Request $request, Response $response, $args) use ($app) {
		//if post method is triggered
		if($request->isPost())
		{
			//get the post req here
			$post_req = $request->getParams();
			$user_name = $post_req['user_name'];
			$user_password = $post_req['user_password'];
			
			$dsn = $app->getContainer()->get('settings')['mysql']['dsn'];
			$usr = $app->getContainer()->get('settings')['mysql']['usr'];
			$pwd = $app->getContainer()->get('settings')['mysql']['pwd'];
			
			$pdo = new \Slim\PDO\Database($dsn, $usr, $pwd);
			
			//check if user exists
			$selectStatement = $pdo->select()
							   ->from('user_login')
							   ->where('user_name', '=', $user_name)
							   ->where('user_password', '=', $user_password);

			$stmt = $selectStatement->execute();
			$data = $stmt->fetch();
			
			if(!$data['user_name'])
			{
				// Set flash message for next request
				$this->flash->addMessage('error', 'Not valid, try again');
				
				$this->view->render($response, 'login.twig', [
					'flash' => $this->flash
				]);
				
				// Redirect - render to be introduced
				return $response->withStatus(302)->withHeader('Location', '/user_login');
			}
			if($data['user_name'] != "")
			{
				//render the welcome page
				$this->view->render($response, 'user.twig', [
					'flash' => $this->flash, 
					'name' => $user_name
				]);	
			}
			return false;
		}
		return $this->view->render($response, 'login.twig', []);
	});

//home route
	$app->get('/', function (Request $request, Response $response) {
		// Redirect - render to be introduced
		return $response->withStatus(302)->withHeader('Location', '/user_login');
	});

	$app->run();