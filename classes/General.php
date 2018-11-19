<?php
require_once 'Share.php';
require_once 'OpenGraph.php';
require_once 'Twitter.php';
require_once 'GooglePlus.php';
require_once 'Bitrix.php';
require_once 'Custom.php';

/**
 * Class General
 */
class General {

    /**
     * @var Bitrix
     */
    private static $obBitrix = false;

    /**
     * @var Twitter
     */
    private static $obTwitter = false;

    /**
     * @var OpenGraph
     */
    private static $obOpenGraph = false;

    /**
     * @var GooglePlus
     */
    private static $obGooglePlus = false;

    /**
     * @var bool
     */
    private static $isInit = false;

    /**
     * General constructor.
     * @param $arData
     */
    function __construct($arData) {
        self::$obGooglePlus = $arData['GooglePlus'];
        self::$obBitrix = $arData['Bitrix'];
        self::$obTwitter = $arData['Twitter'];
        self::$obOpenGraph = $arData['OpenGraph'];
    }


    /**
     * @param $string
     * @return $this
     */
    public function title($string) {
        self::$obBitrix->title($string);
        self::$obTwitter->title($string);
        self::$obOpenGraph->title($string);
        self::$obGooglePlus->title($string);
        return $this;
    }

    /**
     * @param $string
     * @return $this
     */
    public function description($string) {
        self::$obBitrix->description($string);
        self::$obTwitter->description($string);
        self::$obOpenGraph->description($string);
        self::$obGooglePlus->description($string);
        return $this;
    }

    /**
     * @param $string
     * @return $this
     */
    public function image($string) {
        self::$obTwitter->image($string);
        self::$obOpenGraph->image($string);
        self::$obGooglePlus->image($string);
        return $this;
    }

    /**
     * @param $string
     * @return $this
     */
    public function url($string) {
        self::$obBitrix->url($string);
        self::$obOpenGraph->url($string);
        return $this;

    }

    /**
     * @param $string
     * @return $this
     */
    public function keywords($string) {
        self::$obBitrix->keywords($string);
        return $this;
    }
}
