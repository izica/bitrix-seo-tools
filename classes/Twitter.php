<?php

/**
 * Class Twitter
 */
class Twitter extends MetaTags {
    /**
     * @var array
     */
    public $arTagMap = [
        'title'       => 'twitter:title',
        'description' => 'twitter:description',
    ];

    /**
     * @param $string
     * @return $this
     */
    public function image($string) {
        $this->arProperties['twitter:image'] = $string;
        return $this;
    }

    /**
     * @param $string
     * @return $this
     */
    public function title($string) {
        $this->arProperties['twitter:title'] = $string;
        return $this;
    }

    /**
     * @param $string
     * @return $this
     */
    public function description($string) {
        $this->arProperties['twitter:description'] = $string;
        return $this;
    }

    /**
     * @param $arDefaultValues
     * @return string
     */
    public function getMeta($arDefaultValues) {
        $arResultProperties = $this->metaMerge($arDefaultValues);

        $sResult = '<meta name="twitter:card" content="summary_large_image">';
        foreach ($this->arProperties as $sKey => $arProperty) {
            $sResult .= '<meta name="' . $sKey . '" content="' . $arProperty . '" />';
        }
        return $sResult;
    }
}
