<?php  
namespace app\models;

use yii\db\ActiveRecord;
use Yii;


class FotoForm extends ActiveRecord
{
	public $foto;
	
	 public function rules()
    {
        return [
            [['foto'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }
    
    public function upload()
    {
        if ($this->validate()) {

            $this->foto->saveAs('upload/' . $this->foto->baseName . '.' . $this->foto->extension);
            return true;
        } else {
            return false;
        }
    }
}