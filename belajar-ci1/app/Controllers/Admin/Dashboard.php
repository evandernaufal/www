<?php
    namespace App\Controllers\Admin;
    use App\Controllers\BaseController;

    class Dashboard extends BaseController {
        public function index() {
            $session = session();
            return view('home_dashboard_admin');
        }
    }    
?>