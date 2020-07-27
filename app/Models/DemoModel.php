<?php  

namespace App\Models ;

class DemoModel extends \CodeIgniter\Model {
    protected $table = 'customer-info'; // table 名稱
    protected $allowedFields = ['systemNum', 'companyName', 'tel', 'fax', 'address', 'guiNum']; // 可以使用 orm 操作ㄉ欄位
} 
