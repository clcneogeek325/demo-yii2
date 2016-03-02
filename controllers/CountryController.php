<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Country;
use Yii;

class CountryController extends Controller
{
    public function actionIndex()
    {
        $query = Country::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }
    
    public function actionHome()
    {
        $country1  = Yii::$app->db_mysql //conexion mysql
        ->createCommand('SELECT * FROM country')->queryAll();
        $country2  = Yii::$app->db_pssql //conexion posgresql
        ->createCommand('SELECT * FROM country')->queryAll();
        $country3  = Yii::$app->db_sqlite //conexion sqlite
        ->createCommand('SELECT * FROM country')->queryAll();
        
        $msg = "mi mensajrr";
        return $this->render('home',['msg'=>$msg]);
    }
}