<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Alumno".
 *
 * @property string $nombre
 * @property string $apellidos
 * @property integer $edad
 * @property integer $activo
 */
class Alumno extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Alumno';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['edad', 'activo'], 'integer'],
            [['nombre', 'apellidos'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nombre' => 'Nombre',
            'apellidos' => 'Apellidos',
            'edad' => 'Edad',
            'activo' => 'Activo',
        ];
    }
}
