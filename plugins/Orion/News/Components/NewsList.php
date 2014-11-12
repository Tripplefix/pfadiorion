<?php

namespace Orion\BulletinBoard\Components;

class NewsList extends Cms\Classes\ComponentBase {
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
