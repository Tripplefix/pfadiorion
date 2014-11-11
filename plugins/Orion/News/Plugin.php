<?php

namespace Acme\Blog;

class Plugin extends \System\Classes\PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'News Plugin',
            'description' => 'Mit diesem Plugin können Online-Beiträge auf der News-Seite veröffentlicht werden.',
            'author' => 'Rolf Isler',
            'icon' => 'icon-pencil'
        ];
    }

    public function registerComponents()
    {
        return [
            'Orion\News\Components\Post' => 'blogPost'
        ];
    }
}