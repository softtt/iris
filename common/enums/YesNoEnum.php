<?php

namespace common\enums;

use yii\helpers\ArrayHelper;

class YesNoEnum
{
    const VALUE_POSITIVE = 'Yes';
    const VALUE_NEGATIVE = 'No';

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
