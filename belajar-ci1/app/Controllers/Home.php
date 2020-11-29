<?php namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\NewsModel;

class Home extends BaseController
{
	public function index()
	{
		$Model=new NewsModel();
		$news['news']=$Model->orderBy('id','DESC')->findAll();
		return view('welcome_message',$news);
	}
	public function dashboard($id,$nama)
	{
		echo "Parameter yang diinput adalah = ".$id;
		return view('home_dashboard');
	}
	public function newsopen($id = null)
	{
		$model = new NewsModel();
		$data['news'] = $model->where('id',$id)->first();

        return view('view_news',$data);
	}

	//--------------------------------------------------------------------

}
