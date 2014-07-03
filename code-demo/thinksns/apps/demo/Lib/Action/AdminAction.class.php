<?php
// 加载后台控制器
import ( 'admin.Action.AdministratorAction' );
class AdminAction extends AdministratorAction{

    public function index (){
        $this->display();
    }

}
?>