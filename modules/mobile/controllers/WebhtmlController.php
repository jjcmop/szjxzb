<?php
namespace app\modules\mobile\controllers;
use yii\web\Controller;
use app\modules\mobile\models\M;
class WebhtmlController extends Controller{
    public $layout = false;
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        if(empty($_COOKIE['username'])){
            echo "<script>alert('请先登录！');window.location.href='?m=m/login/index';</script>";
        }
    }
    public function actionAbout(){
        return $this->render("about");
    }
    public function actionContact(){
        return $this->render("contact");
    }
    public function actionFeedback(){
        return $this->render("feedback");
    }
}