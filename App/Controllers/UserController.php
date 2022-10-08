<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Product;

class UserController extends BaseController {
    public function getDashBoard() {
        // Hiển thị danh sách sản phẩm bằng render() của BladeOne
        // file view ở new-mvc/App/Views/product/index.blade.php
        $viewName = 'dashboard';
        // data view cần biến $name và $price
        $data = [
            'name' => 'Iphone 14',
            'price' => 12000000
            
        ];

        return $this->render($viewName, $data);
    }


}
