<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "noticia".
 *
 * @property string $Titulo
 * @property integer $Codigo_Noticia
 * @property string $Cuerpo
 * @property string $Categoria
 * @property integer $Estado
 * @property string $Fecha_creacion
 */
class Noticia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'noticia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Titulo', 'Cuerpo', 'Categoria', 'Estado', 'Fecha_creacion'], 'required'],
            [['Cuerpo'], 'string'],
            [['Estado'], 'integer'],
            [['Fecha_creacion'], 'safe'],
            [['Titulo', 'Categoria'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Titulo' => 'Titulo',
            'Codigo_Noticia' => 'Codigo  Noticia',
            'Cuerpo' => 'Cuerpo',
            'Categoria' => 'Categoria',
            'Estado' => 'Estado',
            'Fecha_creacion' => 'Fecha Creacion',
        ];
    }
}
