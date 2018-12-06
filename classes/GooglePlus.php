<?php

/**
 * Class GooglePlus
 */
class GooglePlus extends MetaTags {
    /**
     * @var array
     */
    public $arTagMap = [
        'title'       => 'name',
        'description' => 'description',
    ];

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
     * @param $arDefaultValues
     * @return string
     */
    public function getMeta($arDefaultValues) {
        $arResultProperties = $this->metaMerge($arDefaultValues);

        $sResult = '';
        foreach ($arResultProperties as $sKey => $arProperty) {
            $sResult .= '<meta itemprop="' . $sKey . '" content="' . $arProperty . '" />';
        }
        return $sResult;
    }
}
