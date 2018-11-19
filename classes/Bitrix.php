<?php

/**
 * Class Bitrix
 */
class Bitrix {
    /**
     * @var array
     */
    private $arProperties = [];

    /**
     * @param $string
     * @return $this
     */
    public function title($string) {
        global $APPLICATION;
        $APPLICATION->SetPageProperty("title", $string);
        return $this;
    }

    /**
     * @param $string
     * @return $this
     */
    public function robots($string) {
        global $APPLICATION;
        $APPLICATION->SetPageProperty("robots", $string);
        return $this;
    }

    /**
     * @param $string
     * @return $this
     */
    public function url($string) {
        global $APPLICATION;
        $APPLICATION->SetPageProperty("url", $string);
        return $this;
    }

    /**
     * @param $string
     * @return $this
     */
    public function description($string) {
        global $APPLICATION;
        $APPLICATION->SetPageProperty("description", $string);
        return $this;
    }

    /**
     * @param $string
     * @return $this
     */
    public function keywords($string) {
        global $APPLICATION;
        $APPLICATION->SetPageProperty("keywords", $string);
        return $this;
    }
}
