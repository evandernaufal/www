<?php namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\BlogModel;

class Blog extends BaseController
{
	public function index()
	{
		$Model=new BlogModel();
		$page['page']=$Model->orderBy('id','DESC')->findAll();
		return view('blog_view_all',$page);
	}
	public function blogopen($id = null)
	{
		$model = new BlogModel();
		$data['page'] = $model->where('id',$id)->first();

        return view('view_blog',$data);
	}

	//--------------------------------------------------------------------

}
