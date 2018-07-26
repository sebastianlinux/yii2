<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Compra".
 *
 * @property int $id
 * @property int $cantidad
 * @property string $descripcion
 * @property int $valor
 */
class Compra extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Compra';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cantidad', 'valor'], 'integer'],
            [['descripcion'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cantidad' => 'Cantidad',
            'descripcion' => 'Descripcion',
            'valor' => 'Valor',
        ];
    }

    /**
     * {@inheritdoc}
     * @return CompraQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CompraQuery(get_called_class());
    }
}
