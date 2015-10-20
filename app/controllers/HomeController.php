<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{
		$title = "Disaño grafico | felipesosa.com";
		$menu = array(
			's1',
			's2',
			's3',
			's4',
			's5',
		);
		return View::make('home.index')
		->with('title',$title)
		->with('menu',$menu);
	}
	public function postSendEmail()
	{
		if (Request::ajax()) {
			$d = Input::all();
			$rules = array(
				'pais' 		=> 'required',
				'nombre'	=> 'required|min:4',
				'email'		=> 'required|email',
				'msg'		=> 'required',
			);
			$msg   = array(
				'required' => 'El campo :attribute es obligatorio',
				'min' 	   => 'El campo :attribute debe tener minimo 4 caracteres',
				'email'    => 'El campo :attribute debe ser un email valido', 
			);
			$cus   = array(
				'msg' => 'mensaje'
			);
			$validator = Validator::make($d, $rules, $msg, $cus);
			if ($validator->fails()) {
				return Response::json(array('type' => 'danger','data' => $validator->getMessageBag()->toArray()));
			}
			$data = array(
				'pais' 		=> $d['pais'],
				'nombre' 	=> $d['nombre'],
				'email'	 	=> $d['email'],
				'msg' 		=> $d['msg'],
			);
			Mail::send('emails.contact', $data, function($message)
			{
				$message->to('contacto@felipesosa.com')->from('sistema@felipesosa.com')->subject('Email de contacto felipesosa.com');
			});
			return Response::json(array(
				'type' => 'success',
			));
		}
	}
	public function changeLang($lang)
	{
		if ($lang == "es"){
			Session::set('language', 'es');
		}elseif($lang == "en")
		{
			Session::set('language', 'en');
		}
		return Redirect::back();
	}
	public function getBiografy()
	{
		$title = "Biografia | felipesosa";
		$segunda = 1;
		$menu = array(
			'http://localhost/felipe/public/inicio#s1',
			'http://localhost/felipe/public/inicio#s2',
			'http://localhost/felipe/public/inicio#s3',
			'http://localhost/felipe/public/inicio#s4',
			'http://localhost/felipe/public/inicio#s5',
		);
		return View::make('home.biografia')
		->with('title')
		->with('menu',$menu)
		->with('segunda',$segunda);
	}
	public function getTerms()
	{
		$title = "Terminos y condiciones | felipesosa";
		$segunda = 1;
		$menu = array(
			'http://localhost/felipe/public/inicio#s1',
			'http://localhost/felipe/public/inicio#s2',
			'http://localhost/felipe/public/inicio#s3',
			'http://localhost/felipe/public/inicio#s4',
			'http://localhost/felipe/public/inicio#s5',
		);
		return View::make('home.terms')
		->with('title',$title)
		->with('menu',$menu)
		->with('segunda',$segunda);
	}
	public function getServices()
	{
		$title = "Servicios | felipesosa";
		$segunda = 1;
		$menu = array(
			'http://localhost/felipe/public/inicio#s1',
			'http://localhost/felipe/public/inicio#s2',
			'http://localhost/felipe/public/inicio#s3',
			'http://localhost/felipe/public/inicio#s4',
			'http://localhost/felipe/public/inicio#s5',
		);
		return View::make('home.services')
		->with('title',$title)
		->with('menu',$menu)
		->with('segunda',$segunda);
	}
}
