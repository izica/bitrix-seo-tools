<?php

/**
 * Class OpenGraph
 */
class OpenGraph
{
    /**
     * @var array
     */
    private $arProperties = [];

    /**
     * @param $string
     * @return $this
     */
    public function image($string){
        $this->arProperties['og:image'] = $string;
        return $this;
    }

    /**
     * @param $string
     * @return $this
     */
    public function title($string){
        $this->arProperties['og:title'] = $string;
        return $this;
    }

    /**
     * @param $string
     * @return $this
     */
    public function description($string){
        $this->arProperties['og:description'] = $string;
        return $this;
    }

    /**
     * @param $string
     * @return $this
     */
    public function url($string){
        $this->arProperties['og:url'] = $string;
        return $this;
    }

    /**
     * @param $string
     * @return $this
     */
    public function locale($string){
        $this->arProperties['og:locale'] = $string;
        return $this;
    }

    /**
     * @return string
     */
    public function getMeta(){
        $sResult = '';
        foreach ($this->arProperties as $sKey => $arProperty) {
            $sResult .= '<meta property="'. $sKey . '" content="'. $arProperty . '" />';
        }
        return $sResult;
    }
}
