## Установка
```
composer require izica/bitrix-seo-tools
```

Для тех кто первый раз сталкивается с composer на битриксе.
Библиотеки обычно ставятся в local/php_interface (cd local/php_interface).
Далее в local/php_interface/init.php прописывается:

```php
require_once 'vendor/autoload.php';
```

header.php
```php
    <head>
        <?$APPLICATION->ShowHead();?>
        <?BitrixSeoTools::showMeta()?>
        <title><?$APPLICATION->ShowTitle();?></title>
    </head>
```
## Поддержка
* OpenGraph(Facebook etc.)
* GooglePlus
* Twitter
* Bitrix API

## Использование
```php
BitrixSeoTools::title('Page Title');
BitrixSeoTools::description('Page Description');
BitrixSeoTools::keywords('page, bitrix, seo');
BitrixSeoTools::image('someurl/image.jpg');
```

### Конкретные типы тегов

```php
BitrixSeoTools::opengraph()
    ->title('Title')
    ->description('Description')
    ->image('image.jpg');
```

### Кастомные теги
```php
BitrixSeoTools::custom()
    ->add(['charset' => 'utf-8'])
    ->add([
        'http-equiv' => 'Content-Type'
        'content' => 'text/html; charset=UTF-8'
    ]);
```

### Генерация шеров
```
<a href="<?=BitrixSeoTools::share()->facebook();?>" target="_blank">Facebook</a>
```

## Описание классов
* BitrixSeoTools
    * title
    * description
    * image
    * url
    * keywords
    * robots
    * googleplus:GooglePlus
    * opengraph:OpenGraph
    * twitter:Twitter
    * bitrix:Bitrix
    * custom:Custom
    * share:Share
    
 * OpenGraph
    * title
    * description
    * image
    * url
    
 * GooglePlus
    * title
    * description
    * image
    
 * Twitter
    * title
    * description
    * image
  
 * Bitrix
     * title
     * description
     * url
     * keywords
     * robots
    
 * Custom
    * add
   
 * Share
    * vkontakte
    * facebook
    * odnoklassniki
    * twitter
