<?php
require_once 'classes/Share.php';
require_once 'classes/OpenGraph.php';
require_once 'classes/Twitter.php';
require_once 'classes/GooglePlus.php';
require_once 'classes/Bitrix.php';
require_once 'classes/Custom.php';

class BitrixSeoTools
{
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
     * @var Odnoklassniki
     */
    private static $obOdnoklassniki = false;

    /**
     * @var Vkontakte
     */
    private static $obVkotakte = false;

    /**
     * @var GooglePlus
     */
    private static $obGooglePlus = false;

    private static $isInit = false;

    private static function init(){
        if(self::$isInit){
            return;
        }
        self::$obShare = new Share();
        self::$obGooglePlus = new GooglePlus();
        self::$obBitrix = new Bitrix();
        self::$obCustom = new Custom();
        self::$obTwitter = new Twitter();
        self::$obOpenGraph = new OpenGraph();

        self::$isInit = true;
    }
    /**
     * @param $string
     * @return BitrixSeoTools
     */
    public static function title($string){
        self::init();
        self::$obBitrix->title($string);
        self::$obTwitter->title($string);
        self::$obOpenGraph->title($string);
        self::$obGooglePlus->title($string);
        return new static();
    }

    /**
     * @param $string
     * @return BitrixSeoTools
     */
    public static function description($string){
        self::init();
        self::$obBitrix->description($string);
        self::$obTwitter->description($string);
        self::$obOpenGraph->description($string);
        self::$obGooglePlus->description($string);
    }

    /**
     * @param $string
     * @return BitrixSeoTools
     */
    public static function image($string){
        self::init();
        self::$obTwitter->image($string);
        self::$obOpenGraph->image($string);
        self::$obGooglePlus->image($string);
    }

    /**
     * @param $string
     * @return BitrixSeoTools
     */
    public static function url($string){
        self::init();
        self::$obBitrix->url($string);
        self::$obOpenGraph->url($string);
    }

    /**
     * @param $string
     * @return BitrixSeoTools
     */
    public static function keywords($string){
        self::init();
        self::$obBitrix->keywords($string);
    }

    /**
     * @param $string
     * @return BitrixSeoTools
     */
    public static function robots($string){
        self::init();
        self::$obBitrix->robots($string);
    }

    public static function showMeta(){
        global $APPLICATION;
        echo $APPLICATION->AddBufferContent(['BitrixSeoTools', 'getMeta']);
    }

    public static function getMeta(){
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
    public static function twitter(){
        self::init();
        return self::$obTwitter;
    }

    /**
     * @return OpenGraph
     */
    public static function opengraph(){
        self::init();
        return self::$obOpenGraph;
    }

    /**
     * @return GooglePlus
     */
    public static function googleplus(){
        self::init();
        return self::$obGooglePlus;
    }

    /**
     * @return Bitrix
     */
    public static function bitrix(){
        self::init();
        return self::$obBitrix;
    }

    /**
     * @return Custom
     */
    public static function custom(){
        self::init();
        return self::$obCustom;
    }

    /**
     * @return Share
     */
    public static function share(){
        self::init();
        return self::$obShare;
    }

    public static function getBaseUrl(){
        return $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'];
    }
}
