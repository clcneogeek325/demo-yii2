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
        $lista = Yii::$app->db->createCommand('CALL Sp_countrys()')
            ->queryAll();
        $msg = "Lista cargada desde un store procedure";
        return $this->render('home',['msg'=>$msg,'lista'=>$lista]);
    }
}