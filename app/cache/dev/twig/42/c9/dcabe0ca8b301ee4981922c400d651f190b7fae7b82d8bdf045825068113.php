<?php

/* DemoBundle:Demo:show.html.twig */
class __TwigTemplate_42c9dcabe0ca8b301ee4981922c400d651f190b7fae7b82d8bdf045825068113 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("DemoBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"row-body content-profile\">
    <h1>Demo</h1>

    <table class=\"table table-hover\">
        <tbody>
            <tr>
                <th>Likes</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "likes", array())), "html", null, true);
        echo " Recommended.&nbsp;&nbsp;&nbsp;
                    <ul class=\"list-group\" id=\"share\">
                        ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "likes", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["like"]) {
            // line 14
            echo "                            <li class=\"list-group-item\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["likes"]) ? $context["likes"] : $this->getContext($context, "likes")), "username", array()), "html", null, true);
            echo "</li>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 16
            echo "                            <li class=\"list-group-item\">Do you recommend it?</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['like'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                    </ul>
                    ";
        // line 19
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 20
            echo "                    ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "hasLikes", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())), "method")) {
                // line 21
                echo "                         <a class=\"unrecommend_btn js-likes-toggle\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("demo_unlikes", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
                echo "\" title=\"Unrecommend\" ></a>
                     ";
            } else {
                // line 23
                echo "                         <a class=\"recommend_btn js-likes-toggle\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("demo_likes", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
                echo "\" title=\"Recommend\"></a>
                    ";
            }
            // line 25
            echo "                    ";
        }
        // line 26
        echo "
                </td>
            </tr>
            <tr>
                <th>Owner</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "owner", array()), "username", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Google Map</th>
                <td>
                     <img src=\"http://maps.googleapis.com/maps/api/staticmap?center=";
        // line 36
        echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "location", array())), "html", null, true);
        echo "&markers=color:red%7Ccolor:red%7C";
        echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "location", array())), "html", null, true);
        echo "&zoom=16&size=300x300&maptype=roadmap&sensor=false\" />

                </td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Time</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "time", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Location</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "location", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Details</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "details", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"list-group\">
    <li class=\"list-group-item\">
        <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("demo");
        echo "\">
            Back to the list
        </a>
    </li>
            ";
        // line 65
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "owner", array()))) {
            // line 66
            echo "    <li class=\"list-group-item\">
        <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("demo_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\">
            Edit
        </a>
    </li>
            ";
        }
        // line 72
        echo "            ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "owner", array()))) {
            // line 73
            echo "    <li class=\"list-group-item\">";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
            echo "</li>
            ";
        }
        // line 75
        echo "</ul>
    </div>
";
    }

    // line 80
    public function block_javascripts($context, array $blocks = array())
    {
        // line 81
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
    \$(document).ready(function() {
    \$('.js-likes-toggle').on('click', function(e) {
    // prevents the browser from \"following\" the link
    e.preventDefault();

    var \$anchor = \$(this);
    var url = \$(this).attr('href')+'.json';

    \$.post(url, null, function(data) {
    if (data.likes) {
    var message = 'Thank You for recommend me!';
    } else {
    var message = 'Oh no, Did We do something wrong?';
    }

    \$anchor.after('<span class=\"alert-success\" >&#10004; '+message+'</span>');
    \$anchor.hide();
    });
    });
    });
    </script>
";
    }

    public function getTemplateName()
    {
        return "DemoBundle:Demo:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 81,  189 => 80,  183 => 75,  177 => 73,  174 => 72,  166 => 67,  163 => 66,  161 => 65,  154 => 61,  144 => 54,  137 => 50,  130 => 46,  123 => 42,  112 => 36,  104 => 31,  97 => 26,  94 => 25,  88 => 23,  82 => 21,  79 => 20,  77 => 19,  74 => 18,  67 => 16,  59 => 14,  54 => 13,  49 => 11,  40 => 4,  37 => 3,  11 => 1,);
    }
}
