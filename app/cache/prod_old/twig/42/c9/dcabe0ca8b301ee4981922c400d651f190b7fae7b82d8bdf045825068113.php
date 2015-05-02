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

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Likes</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "likes", array())), "html", null, true);
        echo " Recommended.&nbsp;&nbsp;&nbsp;
                    <ul id=\"share\">
                        ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "likes", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["likes"]) {
            // line 14
            echo "                            <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["likes"], "username", array()), "html", null, true);
            echo "</li>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 16
            echo "                            <li>Do you recommend it?</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['likes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                    </ul>

                    ";
        // line 20
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "hasLikes", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())), "method")) {
            // line 21
            echo "                         <a class=\"unrecommend_btn js-likes-toggle\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("demo_unlikes", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
            echo "\" title=\"Unrecommend\" ></a>
                     ";
        } else {
            // line 23
            echo "                         <a class=\"recommend_btn js-likes-toggle\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("demo_likes", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
            echo "\" title=\"Recommend\"></a>
                    ";
        }
        // line 25
        echo "
                </td>
            </tr>
            <tr>
                <th>Owner</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "owner", array()), "username", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Google Map</th>
                <td>
                     <img src=\"http://maps.googleapis.com/maps/api/staticmap?center=";
        // line 35
        echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "location", array())), "html", null, true);
        echo "&markers=color:red%7Ccolor:red%7C";
        echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "location", array())), "html", null, true);
        echo "&zoom=16&size=300x300&maptype=roadmap&sensor=false\" />

                </td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Time</th>
                <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "time", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Location</th>
                <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "location", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Details</th>
                <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "details", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("demo");
        echo "\">
            Back to the list
        </a>
    </li>
            ";
        // line 64
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) == $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "owner", array()))) {
            // line 65
            echo "    <li>
        <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("demo_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
            echo "\">
            Edit
        </a>
    </li>
            ";
        }
        // line 71
        echo "            ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) == $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "owner", array()))) {
            // line 72
            echo "    <li>";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form');
            echo "</li>
            ";
        }
        // line 74
        echo "</ul>
    </div>
";
    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        // line 80
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
        return array (  187 => 80,  184 => 79,  178 => 74,  172 => 72,  169 => 71,  161 => 66,  158 => 65,  156 => 64,  149 => 60,  139 => 53,  132 => 49,  125 => 45,  118 => 41,  107 => 35,  99 => 30,  92 => 25,  86 => 23,  80 => 21,  78 => 20,  74 => 18,  67 => 16,  59 => 14,  54 => 13,  49 => 11,  40 => 4,  37 => 3,  11 => 1,);
    }
}
