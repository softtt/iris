<?php


namespace common\enums;

use yii\helpers\ArrayHelper;

class ProductStatusEnum
{
    const VALUE_POSITIVE = 'Есть в наличии';
    const VALUE_NEGATIVE = 'Нет в наличии';

    public static function items()
    {
        return [
            1 => self::VALUE_POSITIVE,
            0 => self::VALUE_NEGATIVE
        ];
    }

    /**
     * @param $value
     * @return mixed
     */
    public static function getValue($value)
    {
        return ArrayHelper::getValue(static::items(), $value);
    }
}