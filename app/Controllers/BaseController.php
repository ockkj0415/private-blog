<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */

class BaseController extends Controller
{
	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = [];

	/**
	 * Constructor.
	 *
	 * @param RequestInterface  $request
	 * @param ResponseInterface $response
	 * @param LoggerInterface   $logger
	 */
	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.: $this->session = \Config\Services::session();
	}

	public function loadlayout($page='index', $data=array()){
		// TODO: 
		// if(  ){ // 없으면
		// 	return 404();

		// }
		// page 예외처리
	
		// $uri = service('uri');
		// echo view('layouts/default/header', $data);
		// if( $uri->getSegment(1) !== 'product' ){
		// 	echo view('layouts/default/navbar');
		// }else{
		// 	echo view('layouts/default/subheader');
		// }

		$uri = service('uri');
        $data['libVer'] = '0.0.1';
		echo view('layouts/default/header');
		echo view('layouts/default/navbar');
		
		echo view('pages/'.$page);
		echo view('layouts/default/footer');

		/*
		echo view('layouts/default/header', $data);
		echo view('layouts/default/navbar');
		echo view('pages/'.$page);
		echo view('layouts/default/footer');
		*/
        
    }
}
