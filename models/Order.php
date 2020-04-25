<?php


    namespace app\models;


    use yii\behaviors\TimestampBehavior;
    use yii\db\ActiveRecord;
    use yii\db\Expression;

    class Order extends ActiveRecord
    {

        public static function tableName()
        {
            return 'orders';
        }


        public function behaviors()
        {
            return [
                [
                    'class' => TimestampBehavior::clsass,
                    'attributes' => [
                        ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                        ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                    ],
                    // если вместо метки времени UNIX используется datetime:
                    'value' => new Expression('NOW()'),
                ],
            ];
        }

        public function rules()
        {
            return [
                [['name', 'email', 'phone', 'address'], 'required'],
                ['note', 'string'],
                ['email', 'email'],
                [['created_at', 'update_at'], 'safe'],
                ['qty', 'integer'],
                ['total', 'number'],
                ['status', 'boolean'],
            ];
        }

        public function attributeLabels()
        {
            return [
                'name'    => 'имя',
                'email'   => 'E-mail',
                'phone'   => 'Телефон',
                'address' => 'Адрес',
                'note'    => 'Примечание',
            ];
        }

    }