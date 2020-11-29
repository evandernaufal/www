<?php
    namespace App\Models;
    use CodeIgniter\Database\ConnectionInterface;
    use CodeIgniter\Model;

    class PageModel extends Model {
        protected $table = 'page';

        protected $allowedFields = ['judulhalaman', 'author', 'tglposting', 'isihalaman'];
    }
?>