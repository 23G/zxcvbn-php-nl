<?php

namespace ZxcvbnPhp\Matchers\NL;

trait DutchTranslations
{
    protected static array $dutchRankedDictionaries;

    /**
     * Get the Dutch ranked dictionaries.
     *
     * @return array
     */
    public static function getRankedDictionaries(): array
    {
        if (!isset(self::$dutchRankedDictionaries)) {
            self::$dutchRankedDictionaries = require __DIR__ . '/../resources/frequency_list.php';
        }

        return self::$dutchRankedDictionaries;
    }
}
