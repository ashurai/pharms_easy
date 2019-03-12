<?php


namespace UserBundle\Entity\Enum;


abstract class AbstractEnum
{
    private static $constCacheArray = NULL;

    public static function getAll()
    {
        if (self::$constCacheArray == NULL) {
            self::$constCacheArray = [];
        }

        $calledClass = get_called_class();

        if (!array_key_exists($calledClass, self::$constCacheArray)) {
            $reflect = new \ReflectionClass($calledClass);
            self::$constCacheArray[$calledClass] = $reflect->getConstants();
        }
        return self::$constCacheArray[$calledClass];
    }

    public static function getAllValues()
    {
        return array_values(self::getAll());
    }

    public static function getAllValuesWithTranslationKeys()
    {
        $constants = self::getAll();
        $newArray = [];
        foreach ($constants as $constant) {
            $newArray[static::class.".$constant"] = $constant;
        }
        return $newArray;
    }

    public static function isValidName($name, $strict = false)
    {
        $constants = self::getAll();

        if ($strict) {
            return array_key_exists($name, $constants);
        }

        $keys = array_map('strtolower', array_keys($constants));
        return in_array(strtolower($name), $keys);
    }

    public static function isValidValue($value, $strict = true)
    {
        $values = array_values(self::getAll());
        return in_array($value, $values, $strict);
    }
}