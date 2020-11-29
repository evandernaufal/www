<?php
    namespace App\Controllers\Admin;
    use App\Controllers\BaseController;
    use App\Models\PageModel;

    class Page extends BaseController {
        public function index() {
            //buat object dari class PageModel
            $model = new PageModel();
            
            //load seluruh data
            $data['page'] = $model->orderBy('id','DESC')->findAll();

            return view('page_view_all', $data);
        }     
        public function create() {
            return view('page_create_page');
        }   
        public function store() {
            $model = new PageModel();

            $data = [
                'judulhalaman' => $this->request->getVar('judulhalaman'),
                'author' => $this->request->getVar('author'),
                'tglposting' => $this->request->getVar('tglposting'),
                'isihalaman' => $this->request->getVar('isihalaman'),
            ];
            $save = $model->insert($data);

            return redirect()->to(base_url('admin/page'));
        }
        public function edit($id = null) {
            $model = new PageModel();
            $data['page'] = $model->where('id',$id)->first();

            return view('page_edit_page',$data);
        }
        public function update() {
            $model = new PageModel();
            $id = $this->request->getVar('id');
            $data = [
                'judulhalaman' => $this->request->getVar('judulhalaman'),
                'author' => $this->request->getVar('author'),
                'tglposting' => $this->request->getVar('tglposting'),
                'isihalaman' => $this->request->getVar('isihalaman'),
            ];
            $save = $model->update($id,$data);

            return redirect()->to(base_url('admin/page'));
        }
        public function delete($id = null) {
            $model = new PageModel();
            $data['page'] = $model->where('id',$id)->delete();

            return redirect()->to(base_url('admin/page'));
        }
    }
?>