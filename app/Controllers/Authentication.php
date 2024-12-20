<?php

namespace App\Controllers;

use App\Models\MainModel;

class Authentication extends BaseController
{
	# Session
	protected $objSession;

	# Models
	protected $objMainModel;

	# Services
	protected $objRequest;

	public function __construct()
	{
		# Session
		$this->objSession = session();

		# Services
		$this->objRequest = \Config\Services::request();

		# Models
		$this->objMainModel = new MainModel;

		# Set Lang
		if (session('lang') === null) {
			$acceptLanguage = $this->objRequest->getHeaderLine('accept-language');
			$browserLang = explode(',', $acceptLanguage);
			session()->set('lang', $browserLang[0]);

			if (strpos(session('lang'), 'es') === 0)
				session()->set('lang', 'es');
			elseif (strpos(session('lang'), 'en') === 0)
				session()->set('lang', 'en');
			else
				session()->set('lang', 'en');
		}

		$this->objRequest->setLocale(session('lang'));
	}

	public function login()
	{
		$data = array();
		$data['page'] = 'authentication/login';

		return view('layout/header', $data);
	}

	public function register()
	{
		$data = array();
		$data['page'] = 'authentication/register';

		return view('layout/header', $data);
	}
}
