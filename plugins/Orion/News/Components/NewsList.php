<?php namespace Orion\News\Components;

use Cms\Classes\ComponentBase;
use DB;

class NewsList extends ComponentBase {
    /**
     * A collection of posts to display
     * @var Collection
     */
    public $posts;
    
    public function componentDetails()
    {
        return [
            'name' => 'News List',
            'description' => 'Zeigt die Neuigkeiten der Abteilung an.'
        ];
    }
    
    public function onRun()
    {
        $this->posts = $this->page['posts'] = DB::table('orion_news_posts')->get();
    }
    
    /*public function news(){
        $posts = DB::table('orion_news_posts')->get();

        $result = [];
        foreach ($posts as $post)
        {
            array_push($result, $post->content);
        }
        
        return $result;
    }*/
}
