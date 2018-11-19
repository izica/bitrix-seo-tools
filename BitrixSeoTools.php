<?php
require_once 'classes/Share.php';
require_once 'classes/OpenGraph.php';
require_once 'classes/Twitter.php';
require_once 'classes/GooglePlus.php';
require_once 'classes/Bitrix.php';
require_once 'classes/Custom.php';
require_once 'classes/General.php';

/**
 * Class BitrixSeoTools
 */
class BitrixSeoTools {
    /**
     * @var Share
     */
    private static $obShare = false;

    /**
     * @var Custom
     */
    private static $obCustom = false;

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
     * @var General
     */
    private static $obGeneral = false;

    /**
     * @var GooglePlus
     */
    private static $obGooglePlus = false;

    /**
     * @var bool
     */
    private static $isInit = false;

    /**
     *
     */
    private static function init() {
        if (self::$isInit) {
            return;
        }
        self::$obCustom = new Custom();
        self::$obShare = new Share();
        self::$obGooglePlus = new GooglePlus();
        self::$obBitrix = new Bitrix();
        self::$obTwitter = new Twitter();
        self::$obOpenGraph = new OpenGraph();
        self::$obGeneral = new General([
            'Bitrix'     => self::$obBitrix,
            'GooglePlus' => self::$obGooglePlus,
            'Twitter'    => self::$obTwitter,
            'OpenGraph'  => self::$obOpenGraph,
        ]);
        self::$isInit = true;
    }

    /**
     * @param $string
     * @return General
     */
    public static function title($string) {
        self::init();
        self::$obBitrix->title($string);
        return self::$obGeneral->title($string);
    }

    /**
     * @param $string
     * @return General
     */
    public static function description($string) {
        self::init();
        return self::$obGeneral->description($string);
    }

    /**
     * @param $string
     * @return General
     */
    public static function image($string) {
        self::init();
        return self::$obGeneral->image($string);
    }


    /**
     * @param $string
     * @return General
     */
    public static function url($string) {
        self::init();
        return self::$obGeneral->url($string);
    }


    /**
     * @param $string
     * @return General
     */
    public static function keywords($string) {
        self::init();
        return self::$obGeneral->keywords($string);
    }


    /**
     * @param $string
     */
    public static function robots($string) {
        self::init();
        self::$obBitrix->robots($string);
    }

    /**
     *
     */
    public static function showMeta() {
        global $APPLICATION;
        echo $APPLICATION->AddBufferContent(['BitrixSeoTools', 'getMeta']);
    }

    /**
     * @return string
     */
    public static function getMeta() {
        self::init();

        $sMeta = '';
        $sMeta .= self::$obOpenGraph->getMeta();
        $sMeta .= self::$obTwitter->getMeta();
        $sMeta .= self::$obGooglePlus->getMeta();
        $sMeta .= self::$obCustom->getMeta();

        return $sMeta;
    }


    /**
     * @return Twitter
     */
    public static function twitter() {
        self::init();
        return self::$obTwitter;
    }

    /**
     * @return OpenGraph
     */
    public static function opengraph() {
        self::init();
        return self::$obOpenGraph;
    }

    /**
     * @return GooglePlus
     */
    public static function googleplus() {
        self::init();
        return self::$obGooglePlus;
    }

    /**
     * @return Bitrix
     */
    public static function bitrix() {
        self::init();
        return self::$obBitrix;
    }

    /**
     * @return Custom
     */
    public static function custom() {
        self::init();
        return self::$obCustom;
    }

    /**
     * @return Share
     */
    public static function share() {
        self::init();
        return self::$obShare;
    }

    /**
     * @return string
     */
    public static function getBaseUrl() {
        return $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'];
    }
}
