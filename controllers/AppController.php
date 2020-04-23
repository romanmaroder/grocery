<?php


    namespace app\controllers;


    use yii\web\Controller;

    class AppController extends Controller
    {

        public function beforeAction($action)
        {
            // Вывод title на вкладке используя 'name' из /config/web

            $this->view->title = \Yii::$app->name;

            return parent::beforeAction($action); // TODO: Change the autogenerated stub
        }

        protected function setMeta($title = null, $keywords = null, $description = null)
        {
            $this->view->title = $title;
            $this->view->registerMetaTag(['name' => 'keywords', 'content' => "$keywords"]);
            $this->view->registerMetaTag(['name' => 'description', 'content' => "$description"]);
        }
    }