<?php

/* C:\xampp\htdocs\pfadiorion/themes/orion/pages/news.htm */
class __TwigTemplate_eea83d978e013baf1c49c25a5e224868a2ccca160959454664cce646d1aacec4 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->startBlock('pageTop'        );
        // line 2
        echo "    <script>
        \$(function() {
            \$('#top_image').parallax({
                parallax: 0.6
            });
        });
    </script>
    <div id=\"top_image\" class=\"parallax\" data-image=\"";
        // line 9
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/sarasani.jpg");
        echo "\" data-with=\"1600\" data-height=\"1067\" data-container-height=\"350\" data-posy=\"400\">
        <div id=\"top_image_description\">Abteilungs SoLa 2014</div>
    </div>
";
        // line 1
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 13
        echo "
<div id=\"newsfeed\">
    <h1>Neuigkeiten aus der Abteilung</h1>
    ";
        // line 16
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 17
        echo "    
</div>

<aside class=\"main_sidebar\">
    <section id=\"onlineanschlag\" class=\"sidebarelement\">
        <h3>Nächste Pfadiübung</h3>
        <ul> 
            <!-- load notices -->
        </ul>
    </section><section class=\"sidebarelement\">
        <h3>Anstehende Events</h3>
        <ul>
            <!-- load events -->
        </ul>
        <button class=\"small\" onclick=\"window.location.href='";
        // line 31
        echo $this->env->getExtension('CMS')->pageFilter("news/kalender");
        echo "'\">Kalender</button>
    </section><section class=\"sidebarelement\">
        <h3>Downloads</h3>
        <!-- load downloads -->
        <button class=\"small\" onclick=\"window.location.href='";
        // line 35
        echo $this->env->getExtension('CMS')->pageFilter("news/downloads");
        echo "'\">Alle Downloads</button>

    </section><section class=\"sidebarelement\">
        <h3>Informationen</h3>
        <!-- load infos -->
        <button class=\"small\" onclick=\"window.location.href='";
        // line 40
        echo $this->env->getExtension('CMS')->pageFilter("pfadiheim/belegung");
        echo "'\">Belegungsplan</button>

    </section>
</aside>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\pfadiorion/themes/orion/pages/news.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 40,  70 => 35,  63 => 31,  47 => 17,  43 => 16,  38 => 13,  36 => 1,  30 => 9,  21 => 2,  19 => 1,);
    }
}
/* {% put pageTop %}*/
/*     <script>*/
/*         $(function() {*/
/*             $('#top_image').parallax({*/
/*                 parallax: 0.6*/
/*             });*/
/*         });*/
/*     </script>*/
/*     <div id="top_image" class="parallax" data-image="{{ 'assets/images/sarasani.jpg'|theme }}" data-with="1600" data-height="1067" data-container-height="350" data-posy="400">*/
/*         <div id="top_image_description">Abteilungs SoLa 2014</div>*/
/*     </div>*/
/* {% endput %}*/
/* */
/* <div id="newsfeed">*/
/*     <h1>Neuigkeiten aus der Abteilung</h1>*/
/*     {% component 'blogPosts' %}*/
/*     */
/* </div>*/
/* */
/* <aside class="main_sidebar">*/
/*     <section id="onlineanschlag" class="sidebarelement">*/
/*         <h3>Nächste Pfadiübung</h3>*/
/*         <ul> */
/*             <!-- load notices -->*/
/*         </ul>*/
/*     </section><section class="sidebarelement">*/
/*         <h3>Anstehende Events</h3>*/
/*         <ul>*/
/*             <!-- load events -->*/
/*         </ul>*/
/*         <button class="small" onclick="window.location.href='{{ 'news/kalender'|page }}'">Kalender</button>*/
/*     </section><section class="sidebarelement">*/
/*         <h3>Downloads</h3>*/
/*         <!-- load downloads -->*/
/*         <button class="small" onclick="window.location.href='{{ 'news/downloads'|page }}'">Alle Downloads</button>*/
/* */
/*     </section><section class="sidebarelement">*/
/*         <h3>Informationen</h3>*/
/*         <!-- load infos -->*/
/*         <button class="small" onclick="window.location.href='{{ 'pfadiheim/belegung'|page }}'">Belegungsplan</button>*/
/* */
/*     </section>*/
/* </aside>*/
