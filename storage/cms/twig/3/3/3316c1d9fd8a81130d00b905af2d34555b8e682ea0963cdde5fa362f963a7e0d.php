<?php

/* C:\xampp\htdocs\pfadiorion/plugins/rainlab/blog/components/posts/default.htm */
class __TwigTemplate_f1d9dd0e1be2698713da05486420a08f1670c2989babc48a1d7d79e2784e1bf6 extends Twig_Template
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
        $context["posts"] = $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "posts", array());
        // line 2
        echo "
<ul class=\"post-list\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "        <li>
            <h3><a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></h3>

            <p class=\"info\">
                Posted
                ";
            // line 10
            if ($this->getAttribute($this->getAttribute($context["post"], "categories", array()), "count", array())) {
                echo " in ";
            }
            // line 11
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 12
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a>";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 13
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "                on ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "published_at", array()), "M d, Y"), "html", null, true);
            echo "
            </p>

            <p class=\"excerpt\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "summary", array()), "html", null, true);
            echo "</p>
        </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 20
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, (isset($context["noPostsMessage"]) ? $context["noPostsMessage"] : null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</ul>

";
        // line 24
        if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "lastPage", array()) > 1)) {
            // line 25
            echo "    <ul class=\"pagination\">
        ";
            // line 26
            if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) > 1)) {
                // line 27
                echo "            <li><a href=\"";
                echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 29
            echo "
        ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 31
                echo "            <li class=\"";
                echo ((($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 32
                echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "
        ";
            // line 36
            if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "lastPage", array()) > $this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()))) {
                // line 37
                echo "            <li><a href=\"";
                echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 39
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\pfadiorion/plugins/rainlab/blog/components/posts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 39,  156 => 37,  154 => 36,  151 => 35,  140 => 32,  135 => 31,  131 => 30,  128 => 29,  122 => 27,  120 => 26,  117 => 25,  115 => 24,  111 => 22,  102 => 20,  94 => 17,  87 => 14,  73 => 13,  64 => 12,  46 => 11,  42 => 10,  33 => 6,  30 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% set posts = __SELF__.posts %}*/
/* */
/* <ul class="post-list">*/
/*     {% for post in posts %}*/
/*         <li>*/
/*             <h3><a href="{{ post.url }}">{{ post.title }}</a></h3>*/
/* */
/*             <p class="info">*/
/*                 Posted*/
/*                 {% if post.categories.count %} in {% endif %}*/
/*                 {% for category in post.categories %}*/
/*                     <a href="{{ category.url }}">{{ category.name }}</a>{% if not loop.last %}, {% endif %}*/
/*                 {% endfor %}*/
/*                 on {{ post.published_at|date('M d, Y') }}*/
/*             </p>*/
/* */
/*             <p class="excerpt">{{ post.summary }}</p>*/
/*         </li>*/
/*     {% else %}*/
/*         <li class="no-data">{{ noPostsMessage }}</li>*/
/*     {% endfor %}*/
/* </ul>*/
/* */
/* {% if posts.lastPage > 1 %}*/
/*     <ul class="pagination">*/
/*         {% if posts.currentPage > 1 %}*/
/*             <li><a href="{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage-1) }) }}">&larr; Prev</a></li>*/
/*         {% endif %}*/
/* */
/*         {% for page in 1..posts.lastPage %}*/
/*             <li class="{{ posts.currentPage == page ? 'active' : null }}">*/
/*                 <a href="{{ this.page.baseFileName|page({ (pageParam): page }) }}">{{ page }}</a>*/
/*             </li>*/
/*         {% endfor %}*/
/* */
/*         {% if posts.lastPage > posts.currentPage %}*/
/*             <li><a href="{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage+1) }) }}">Next &rarr;</a></li>*/
/*         {% endif %}*/
/*     </ul>*/
/* {% endif %}*/
