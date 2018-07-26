<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class Usuario extends Model
{
    public function tableName(){
        return 'Usuario';
    }

    public function find($id){
        return 'hola';
    }
}
