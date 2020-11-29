<?php
    namespace App\Models;
    use CodeIgniter\Database\ConnectionInterface;
    use CodeIgniter\Model;

    class AboutwebModel extends Model {
        protected $table = 'aboutweb';

        protected $allowedFields = ['foto', 'deskripsi'];
    }
?>