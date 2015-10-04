<?php

/* C:\xampp\htdocs\pfadiorion/themes/orion/layouts/main.htm */
class __TwigTemplate_d6b0bb57423ce59c6eda816627c4eb8f64b1a19bb6168a28e9a4b9938a56821e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>

<!--[if lt IE 9]>
    <html class=\"ie8\">
<![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html>
    <!--<![endif]-->
    
    ";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("head"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "    
    <body class=\"hidden\">
        <header id=\"main_header\" class=\"no_select\">
            <nav id=\"big_nav\">
                <ul>
                    <li>
                        <a href=\"";
        // line 17
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">Orion</a>
                    </li><li>
                        <a href=\"";
        // line 19
        echo $this->env->getExtension('CMS')->pageFilter("news");
        echo "\">News</a>
                    </li><li class=\"logo\">
                        ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("big_scout_lily"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "                    </li><li>
                        <a href=\"";
        // line 23
        echo $this->env->getExtension('CMS')->pageFilter("pfadiheim");
        echo "\">Pfadiheim</a>
                    </li><li>
                        <a href=\"";
        // line 25
        echo $this->env->getExtension('CMS')->pageFilter("kontakt");
        echo "\">Kontakt</a>
                    </li>
                </ul>
            </nav>  
            
            ";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("tablet_nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "        </header>
        
        ";
        // line 33
        $context['__placeholder_pageTop_default_contents'] = null;        echo $this->env->getExtension('CMS')->displayBlock('pageTop', $context['__placeholder_pageTop_default_contents']);
        unset($context['__placeholder_pageTop_default_contents']);        // line 34
        echo "        
        <div id=\"main-container\">
            ";
        // line 36
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 37
        echo "        </div>
        
        <div id=\"footer\">
            <div id=\"footer_top\">
                <div class=\"footer_top_element left\">
                    <h3>Übersicht</h3>
                    <ul>
                        <li>
                            <a href=\"";
        // line 45
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">Hauptseite</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 48
        echo $this->env->getExtension('CMS')->pageFilter("news");
        echo "\">News</a>
                            <ul>
                                <li style=\"margin: 0 0 0 10px;list-style-type: disc;\"><a href=\"";
        // line 50
        echo $this->env->getExtension('CMS')->pageFilter("news/kalender");
        echo "\">Kalender</a></li>
                                <li style=\"margin: 0 0 5px 10px;list-style-type: disc;\"><a href=\"";
        // line 51
        echo $this->env->getExtension('CMS')->pageFilter("news/downloads");
        echo "\">Downloads</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"";
        // line 55
        echo $this->env->getExtension('CMS')->pageFilter("pfadiheim");
        echo "\">Pfadiheim</a>
                            <ul>
                                <li style=\"margin: 0 0 5px 10px;list-style-type: disc;\"><a href=\"";
        // line 57
        echo $this->env->getExtension('CMS')->pageFilter("pfadiheim/belegung");
        echo "\">Belegungsplan</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"";
        // line 61
        echo $this->env->getExtension('CMS')->pageFilter("kontakt");
        echo "\">Kontakt</a>
                        </li>
                    </ul>
                </div>
                <div class=\"footer_top_element middle\">
                        ";
        // line 66
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("small_scout_lily"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 67
        echo "                    <p>Allzeit Bereit!</p>
                </div>
                <div class=\"footer_top_element right\">
                    <h3>Nützliche Links</h3>
                    <ul>
                        <li>
                            <a href=\"http://www.pfadiwinti.ch/\">Pfadi Region Winterthur (PRW)</a>
                        </li>
                        <li>
                            <a href=\"http://www.pbs.ch/de/verband/\">Pfadibewegung Schweiz (PBS)</a>
                        </li>
                    </ul>             
                </div>
            </div>
            <div id=\"footer_bottom\">
                <div class=\"footer_bottom_element left\">
                    <a href=\"";
        // line 83
        echo $this->env->getExtension('CMS')->pageFilter("kontakt/impressum");
        echo "\">Impressum</a>
                </div>
                <div class=\"footer_bottom_element middle\">
                    <p><a href=\"";
        // line 86
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">Pfadi Orion</a> © <?php echo date(\"Y\"); ?></p>
                </div>
                <div class=\"footer_bottom_element right\">
                    <a href=\"";
        // line 89
        echo $this->env->getExtension('CMS')->pageFilter("backend");
        echo "\">Login</a>
                </div>
            </div>
        </div>
        ";
        // line 93
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 94
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\pfadiorion/themes/orion/layouts/main.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 94,  181 => 93,  174 => 89,  168 => 86,  162 => 83,  144 => 67,  140 => 66,  132 => 61,  125 => 57,  120 => 55,  113 => 51,  109 => 50,  104 => 48,  98 => 45,  88 => 37,  86 => 36,  82 => 34,  80 => 33,  76 => 31,  72 => 30,  64 => 25,  59 => 23,  56 => 22,  52 => 21,  47 => 19,  42 => 17,  34 => 11,  30 => 10,  19 => 1,);
    }
}
/* <!doctype html>*/
/* */
/* <!--[if lt IE 9]>*/
/*     <html class="ie8">*/
/* <![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!-->*/
/* <html>*/
/*     <!--<![endif]-->*/
/*     */
/*     {% partial "head" %}*/
/*     */
/*     <body class="hidden">*/
/*         <header id="main_header" class="no_select">*/
/*             <nav id="big_nav">*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ 'home'|page }}">Orion</a>*/
/*                     </li><li>*/
/*                         <a href="{{ 'news'|page }}">News</a>*/
/*                     </li><li class="logo">*/
/*                         {% partial "big_scout_lily" %}*/
/*                     </li><li>*/
/*                         <a href="{{ 'pfadiheim'|page }}">Pfadiheim</a>*/
/*                     </li><li>*/
/*                         <a href="{{ 'kontakt'|page }}">Kontakt</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </nav>  */
/*             */
/*             {% partial "tablet_nav" %}*/
/*         </header>*/
/*         */
/*         {% placeholder pageTop %}*/
/*         */
/*         <div id="main-container">*/
/*             {% page %}*/
/*         </div>*/
/*         */
/*         <div id="footer">*/
/*             <div id="footer_top">*/
/*                 <div class="footer_top_element left">*/
/*                     <h3>Übersicht</h3>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ 'home'|page }}">Hauptseite</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ 'news'|page }}">News</a>*/
/*                             <ul>*/
/*                                 <li style="margin: 0 0 0 10px;list-style-type: disc;"><a href="{{ 'news/kalender'|page }}">Kalender</a></li>*/
/*                                 <li style="margin: 0 0 5px 10px;list-style-type: disc;"><a href="{{ 'news/downloads'|page }}">Downloads</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ 'pfadiheim'|page }}">Pfadiheim</a>*/
/*                             <ul>*/
/*                                 <li style="margin: 0 0 5px 10px;list-style-type: disc;"><a href="{{ 'pfadiheim/belegung'|page }}">Belegungsplan</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ 'kontakt'|page }}">Kontakt</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="footer_top_element middle">*/
/*                         {% partial "small_scout_lily" %}*/
/*                     <p>Allzeit Bereit!</p>*/
/*                 </div>*/
/*                 <div class="footer_top_element right">*/
/*                     <h3>Nützliche Links</h3>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="http://www.pfadiwinti.ch/">Pfadi Region Winterthur (PRW)</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="http://www.pbs.ch/de/verband/">Pfadibewegung Schweiz (PBS)</a>*/
/*                         </li>*/
/*                     </ul>             */
/*                 </div>*/
/*             </div>*/
/*             <div id="footer_bottom">*/
/*                 <div class="footer_bottom_element left">*/
/*                     <a href="{{ 'kontakt/impressum'|page }}">Impressum</a>*/
/*                 </div>*/
/*                 <div class="footer_bottom_element middle">*/
/*                     <p><a href="{{ 'home'|page }}">Pfadi Orion</a> © <?php echo date("Y"); ?></p>*/
/*                 </div>*/
/*                 <div class="footer_bottom_element right">*/
/*                     <a href="{{ 'backend'|page }}">Login</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {% scripts %}*/
/*     </body>*/
/* </html>*/
