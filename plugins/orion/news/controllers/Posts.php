<?php namespace Orion\News\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

class Posts extends Controller {
    
    //public $implement = ['Backend.Behaviors.FormController'];

    //public $formConfig = 'form_config.yaml';
    
    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Orion.News', 'news', 'posts');
    }
    
    public function index()
    {
        
    }
    
    public function create()
    {
        
    }
}
