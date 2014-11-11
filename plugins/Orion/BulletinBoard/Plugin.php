<?php

namespace Acme\Blog;

class Plugin extends \System\Classes\PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'Blog Plugin',
            'description' => 'Provides some really cool blog features.',
            'author' => 'ACME Corporation',
            'icon' => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            'Acme\Blog\Components\Post' => 'blogPost'
        ];
    }
}