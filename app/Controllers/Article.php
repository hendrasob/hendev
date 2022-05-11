<?php namespace App\Controllers;

class Article extends BaseController
{
	public function pengenalanhtml()
	{
		return view('article/html/2021/pengenalan-html-untuk-pemula/pengenalan-html');
	}

	public function pengenalancss()
	{
		return view('article/css/2021/pengenalan-css-untuk-pemula/pengenalan-css');
	}

	public function pengenalanjs()
	{
		return view('article/js/2021/pengenalan-javascript-untuk-pemula/pengenalan-javascript');
	}

	public function texteditorlinux()
	{
		return view('article/text_editor/2021/5-text-editor-terbaik-untuk-linux/text-editor-linux');
	}

	public function bloggratis()
	{
		return view('article/blogger/2021/cara-membuat-blog-gratis/membuat-blog');
	}

	//--------------------------------------------------------------------

}
