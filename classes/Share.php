<?php

/**
 * Class Share
 */
class Share
{
    /**
     * @param $url
     * @return string
     */
    public function vkontakte($url = false){
        if($url === false){
            $url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
        }
        return 'http://vk.com/share.php?url=' . $url;
    }

    /**
     * @param $url
     * @return string
     */
    public function facebook($url = false){
        if($url === false){
            $url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
        }
        return 'https://www.facebook.com/sharer.php?u=' . $url;
    }

    /**
     * @param $url
     * @return string
     */
    public function odnoklassniki($url = false){
        if($url === false){
            $url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
        }
        return 'https://connect.ok.ru/dk?st.cmd=WidgetSharePreview&st.shareUrl=' . $url;
    }

    /**
     * @param $text
     * @param $url
     * @return string
     */
    public function twitter($text, $url = false){
        if($url === false){
            $url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
        }
        return 'https://twitter.com/intent/tweet?text=' . $text . '&url=' . $url;
    }
}
