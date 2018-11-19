<?php

/**
 * Class GooglePlus
 */
class GooglePlus {
    /**
     * @var array
     */
    private $arProperties = [];

    /**
     * @param $string
     * @return $this
     */
    public function image($string) {
        $this->arProperties['image'] = $string;
        return $this;
    }

    /**
     * @param $string
     * @return $this
     */
    public function title($string) {
        $this->arProperties['name'] = $string;
        return $this;
    }

    /**
     * @param $string
     * @return $this
     */
    public function description($string) {
        $this->arProperties['description'] = $string;
        return $this;
    }

    /**
     * @return string
     */
    public function getMeta() {
        $sResult = '';
        foreach ($this->arProperties as $sKey => $arProperty) {
            $sResult .= '<meta itemprop="' . $sKey . '" content="' . $arProperty . '" />';
        }
        return $sResult;
    }
}
