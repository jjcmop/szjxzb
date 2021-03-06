<?php
namespace app\modules\mobile\controllers;
use yii\web\Controller;
use app\modules\mobile\models\M;
class ScController extends Controller{
    public $layout = "m_main";
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        if(empty($_COOKIE['username'])){
            echo "<script>alert('请先登录！');window.location.href='?m=m/login/index';</script>";
        }
    }
    public function actionIndex(){
        //购物车数据
        $cartData = cartdata($_COOKIE['username']);
        $cartData = cartinct($cartData);
        //热销
        $arrHot = M::findjoinsql("mzsm_goods AS g","inner join","mzsm_img AS i","i.goods_id = g.goods_id","*",[],4,0,"g.is_hot desc");
        return $this->render("index",compact("cartData","arrHot"));
    }
    public function actionOrder(){
        $this->layout = false;
        return $this->render("order");
    }
    public function actionCart(){
        $request = $this->request;
        $user = $request->get("u");
        $data = $request->get("d");
        logyiicart($user,$data);
    }
}