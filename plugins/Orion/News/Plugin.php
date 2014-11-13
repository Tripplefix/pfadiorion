<?php namespace Orion\News;

use Backend;
use Controller;
use System\Classes\PluginBase;

class Plugin extends PluginBase
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
            'Orion\News\Components\NewsList' => 'newsList'
        ];
    }
    
    public function registerNavigation()
    {
        return [
            'news' => [
                'label'       => 'News',
                'url'         => Backend::url('orion/news/posts'),
                'icon'        => 'icon-pencil',
                'permissions' => ['orion.news.*'],
                'order'       => 500,
            ]
        ];
    }
    public function registerPermissions()
    {
        return [
            'orion.news.access_posts'       => ['label' => 'Beiträge bearbeiten'],
        ];
    }
}