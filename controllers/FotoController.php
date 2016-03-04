<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\FotoForm;
use yii\web\UploadedFile;

class FotoController extends Controller
{
    public function actionIndex()
    {
        $model = new FotoForm();

        if (Yii::$app->request->isPost) {
            $model->foto = UploadedFile::getInstance($model, 'foto');
            if ($model->upload()) {
                // file is uploaded successfully
                return "La imagen se ha subido perfectamente";
            }
        }else{
            return $this->render('index', ['model' => $model]);

        }

        
    }
}
