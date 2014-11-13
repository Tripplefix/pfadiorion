<?php namespace Orion\News\Components;

use Cms\Classes\ComponentBase;

class NewsList extends ComponentBase {
    public function componentDetails()
    {
        return [
            'name' => 'News List',
            'description' => 'Zeigt die Neuigkeiten der Abteilung an.'
        ];
    }
    
    public function news(){
        return ['news1', 'news2'];
    }
}
