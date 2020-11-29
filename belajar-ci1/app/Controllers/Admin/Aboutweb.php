<?php
    namespace App\Controllers\Admin;
    use App\Controllers\BaseController;
    use App\Models\AboutwebModel;

    class Aboutweb extends BaseController {
        public function index() {
            //buat object dari class AboutwebModel
            $model = new AboutwebModel();
            //load seluruh data
            $data['aboutweb'] = $model->orderBy('id','DESC')->findAll();

            return view('about_view_all', $data);
        }  
        public function store() {
            $model = new AboutwebModel();

            $data = [
                'foto' => $this->request->getVar('foto'),
                'deskripsi' => $this->request->getVar('deskripsi'),
            ];
            $save = $model->insert($data);

            return redirect()->to(base_url('admin/aboutweb'));
        }
        public function edit($id = null) {
            $model = new AboutwebModel();
            $data['aboutweb'] = $model->where('id',$id)->first();

            return view('about_edit_about',$data);
        }
        public function update() {
            $model = new AboutwebModel();
            $id = $this->request->getVar('id');
            $data = [
                'foto' => $this->request->getVar('foto'),
                'deskripsi' => $this->request->getVar('deskripsi'),
            ];
            $save = $model->update($id,$data);

            return redirect()->to(base_url('admin/aboutweb'));
        }
        public function delete($id = null) {
            $model = new AboutwebModel();
            $data['aboutweb'] = $model->where('id',$id)->delete();

            return redirect()->to(base_url('admin/aboutweb'));
        }
    }
?>