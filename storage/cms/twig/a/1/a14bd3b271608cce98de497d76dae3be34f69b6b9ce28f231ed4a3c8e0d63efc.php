<?php

/* C:\xampp\htdocs\pfadiorion/themes/orion/partials/head.htm */
class __TwigTemplate_cbee13308d2d09aa00cd9df657f1a0c1e1a698f234cf4358295d01ee6657b876 extends Twig_Template
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
        echo "<head>
    <title>Pfadi Orion - ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
    <meta charset=\"utf-8\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"mobile-web-app-capable\" content=\"yes\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <link rel=\"icon\" href=\"";
        // line 7
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/favicon.gif");
        echo "\" type=\"image/gif\">

    <link href=\"";
        // line 9
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/main.css"));
        echo "\" rel=\"stylesheet\">

    <!-- webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Denk+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Chelsea+Market' rel='stylesheet' type='text/css'>

    <!-- parallax plugin -->
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
    <script src=\"";
        // line 17
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/js/parallax/parallax.js", 1 => "assets/js/Orion.js", 2 => "assets/js/jquery.scrollTo.min.js", 3 => "assets/js/jquery.easing.min.js"));
        // line 22
        echo "\"></script>
    
    <!--[if lt IE 9]>
        <script>
           document.createElement('header');
           document.createElement('nav');
           document.createElement('section');
           document.createElement('article');
           document.createElement('aside');
           document.createElement('footer');
        </script>
     <![endif]-->
    <script>
        //Google Analytics
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-49674561-1', 'pfadiorion.ch');
        ga('require', 'displayfeatures');
        ga('send', 'pageview');

        \$(function() {
            Orion.init();
            
            \$('body').on('click', '.disabled_link', function(event) {
                event.preventDefault();
            });
            
            \$('#footer_toggle').on(\"click\", function() {
                if (\$('#footer_nav').is(\":visible\")) {
                    \$('#footer_nav').slideUp(200);
                    \$('#footer_toggle p').removeClass(\"open\");
                    
                } else {
                    \$('#footer_nav').show();
                    \$('body, html').animate({
                        scrollTop: document.body.scrollHeight
                    }, {
                        duration: 800,
                        queue: false,
                        easing: 'linear'
                    });
                    \$('#footer_toggle p').addClass(\"open\");
                }
            });
            
            \$(window).load(function(){
                \$('body').addClass('visible');
            });
            
            ";
        // line 81
        $context['__placeholder_scripts_default_contents'] = null;        echo $this->env->getExtension('CMS')->displayBlock('scripts', $context['__placeholder_scripts_default_contents']);
        unset($context['__placeholder_scripts_default_contents']);        // line 82
        echo "        });
    </script>
    ";
        // line 84
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 85
        echo "</head>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\pfadiorion/themes/orion/partials/head.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 85,  115 => 84,  111 => 82,  109 => 81,  48 => 22,  46 => 17,  35 => 9,  30 => 7,  22 => 2,  19 => 1,);
    }
}
/* <head>*/
/*     <title>Pfadi Orion - {{ this.page.title }}</title>*/
/*     <meta charset="utf-8">*/
/*     <meta name="apple-mobile-web-app-capable" content="yes">*/
/*     <meta name="mobile-web-app-capable" content="yes">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />*/
/*     <link rel="icon" href="{{ 'assets/images/favicon.gif'|theme }}" type="image/gif">*/
/* */
/*     <link href="{{ ['assets/css/main.css']|theme }}" rel="stylesheet">*/
/* */
/*     <!-- webfonts -->*/
/*     <link href='http://fonts.googleapis.com/css?family=Denk+One' rel='stylesheet' type='text/css'>*/
/*     <link href='http://fonts.googleapis.com/css?family=Chelsea+Market' rel='stylesheet' type='text/css'>*/
/* */
/*     <!-- parallax plugin -->*/
/*     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>*/
/*     <script src="{{ [*/
/*     'assets/js/parallax/parallax.js', */
/*     'assets/js/Orion.js', */
/*     'assets/js/jquery.scrollTo.min.js',*/
/*     'assets/js/jquery.easing.min.js'*/
/*     ]|theme }}"></script>*/
/*     */
/*     <!--[if lt IE 9]>*/
/*         <script>*/
/*            document.createElement('header');*/
/*            document.createElement('nav');*/
/*            document.createElement('section');*/
/*            document.createElement('article');*/
/*            document.createElement('aside');*/
/*            document.createElement('footer');*/
/*         </script>*/
/*      <![endif]-->*/
/*     <script>*/
/*         //Google Analytics*/
/*         (function(i, s, o, g, r, a, m) {*/
/*             i['GoogleAnalyticsObject'] = r;*/
/*             i[r] = i[r] || function() {*/
/*                 (i[r].q = i[r].q || []).push(arguments)*/
/*             }, i[r].l = 1 * new Date();*/
/*             a = s.createElement(o),*/
/*                     m = s.getElementsByTagName(o)[0];*/
/*             a.async = 1;*/
/*             a.src = g;*/
/*             m.parentNode.insertBefore(a, m)*/
/*         })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');*/
/* */
/*         ga('create', 'UA-49674561-1', 'pfadiorion.ch');*/
/*         ga('require', 'displayfeatures');*/
/*         ga('send', 'pageview');*/
/* */
/*         $(function() {*/
/*             Orion.init();*/
/*             */
/*             $('body').on('click', '.disabled_link', function(event) {*/
/*                 event.preventDefault();*/
/*             });*/
/*             */
/*             $('#footer_toggle').on("click", function() {*/
/*                 if ($('#footer_nav').is(":visible")) {*/
/*                     $('#footer_nav').slideUp(200);*/
/*                     $('#footer_toggle p').removeClass("open");*/
/*                     */
/*                 } else {*/
/*                     $('#footer_nav').show();*/
/*                     $('body, html').animate({*/
/*                         scrollTop: document.body.scrollHeight*/
/*                     }, {*/
/*                         duration: 800,*/
/*                         queue: false,*/
/*                         easing: 'linear'*/
/*                     });*/
/*                     $('#footer_toggle p').addClass("open");*/
/*                 }*/
/*             });*/
/*             */
/*             $(window).load(function(){*/
/*                 $('body').addClass('visible');*/
/*             });*/
/*             */
/*             {% placeholder scripts %}*/
/*         });*/
/*     </script>*/
/*     {% styles %}*/
/* </head>*/
