<?php


/**
 * Class MetaTags
 */
class MetaTags {
    /**
     * @var array
     */
    public $arTagMap = [];
    /**
     * @var array
     */
    public $arProperties = [];

    /**
     * @param $arDefaultValues
     * @return array
     */
    public function metaMerge($arDefaultValues) {
        $arResult = $this->arProperties;
        foreach ($this->arTagMap as $sBitrixTag => $sTag){
            if(!isset($arResult[$sTag]) && isset($arDefaultValues[$sBitrixTag])){
                $arResult[$sTag] = $arDefaultValues[$sBitrixTag];
            }
        }
        return $arResult;
    }
}
