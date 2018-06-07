<?php

/**
 * Class Custom
 */
class Custom
{
    /**
     * @var array
     */
    private $arCustom = [];

    /**
     * @param $array
     * @return $this
     */
    public function add($array){
        $this->arCustom[] = $array;
        return $this;
    }

    /**
     * @return string
     */
    public function getMeta(){
        $sResult = '';
        $arMetas = [];
        foreach ($this->arCustom as $arProperties){
            $arTag = [];
            foreach ($arProperties as $sKey => $arValue){
                $arTag[] = $sKey . '="' . $arValue . '"';
            }
            $arMetas[] = implode(' ', $arTag);
        }
        foreach ($arMetas as $arMeta) {
            $sResult .= '<meta ' . $arMeta . ' />';
        }
        return $sResult;
    }
}
