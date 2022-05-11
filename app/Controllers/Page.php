<?php namespace App\Controllers;

class Page extends BaseController
{
	public function about()
	{
		return view('page/about/index');
	}

	public function privacy()
	{
		return view('page/privacy-policy/index');
	}

	public function contact()
	{
		return view('page/contact/index');
	}

	public function disclaimer()
	{
		return view('page/disclaimer/index');
	}

	public function tutorial()
	{
		return view('page/tutorial/index');
	}

	public function tutorialhtml()
	{
		return view('page/tutorial/html/index');
	}

	public function tutorialcss()
	{
		return view('page/tutorial/css/index');
	}

	public function tutorialjs()
	{
		return view('page/tutorial/js/index');
	}

	public function tutorialblogger()
	{
		return view('page/tutorial/blogger/index');
	}

	public function category()
	{
		return view('page/category/index');
	}

	public function categoryhtml()
	{
		return view('page/category/html/index');
	}

	public function categorycss()
	{
		return view('page/category/css/index');
	}

	public function categoryjs()
	{
		return view('page/category/js/index');
	}

	public function categoryte()
	{
		return view('page/category/text_editor/index');
	}

	public function categoryblogger()
	{
		return view('page/category/blogger/index');
	}

	//--------------------------------------------------------------------

}
