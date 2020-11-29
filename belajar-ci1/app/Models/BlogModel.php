<?php
    namespace App\Models;
    use CodeIgniter\Database\ConnectionInterface;
    use CodeIgniter\Model;

    class BlogModel extends Model {
        protected $table = 'page';

        protected $allowedFields = ['judulhalaman', 'author', 'tglposting', 'isihalaman'];
    }
?>