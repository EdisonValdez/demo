<?php

/* DemoBundle:Demo:_upcomingDemos.html.twig */
class __TwigTemplate_cbbe50feb8b8cbd7f44244645416faf8310d12e1250021805d358584ee5b3b9a extends Twig_Template
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
        echo " ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["demos"]) ? $context["demos"] : $this->getContext($context, "demos")));
        foreach ($context['_seq'] as $context["_key"] => $context["demo"]) {
            // line 2
            echo "     <tr>
         <td><a href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("demo_show", array("slug" => $this->getAttribute($context["demo"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["demo"], "name", array()), "html", null, true);
            echo "</a></td>
         <td>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["demo"], "name", array()), "html", null, true);
            echo "</td>
         <td>
             <img src=\"http://maps.googleapis.com/maps/api/staticmap?center=";
            // line 6
            echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute($context["demo"], "location", array())), "html", null, true);
            echo "&markers=color:red%7Ccolor:red%7C";
            echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute($context["demo"], "location", array())), "html", null, true);
            echo "&zoom=11&size=100x100&maptype=roadmap&sensor=false\" style=\"border-radius: 75px;\" />
         </td>
         <td>";
            // line 8
            if ($this->getAttribute($context["demo"], "time", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["demo"], "time", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
         <td>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["demo"], "location", array()), "html", null, true);
            echo "</td>
         <td>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["demo"], "details", array()), "html", null, true);
            echo "</td>
         <td>";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('demo')->calculateAgo($this->getAttribute($context["demo"], "createdAt", array())), "html", null, true);
            echo "</td>
         <td>
             <ul>
                 <li>
                     <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("demo_show", array("slug" => $this->getAttribute($context["demo"], "slug", array()))), "html", null, true);
            echo "\">show</a>
                 </li>
                 ";
            // line 17
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == $this->getAttribute($context["demo"], "owner", array()))) {
                // line 18
                echo "                     <li>
                         <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("demo_edit", array("id" => $this->getAttribute($context["demo"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                     </li>
                 ";
            }
            // line 22
            echo "             </ul>
         </td>
     </tr>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "DemoBundle:Demo:_upcomingDemos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 22,  76 => 19,  73 => 18,  71 => 17,  66 => 15,  59 => 11,  55 => 10,  51 => 9,  45 => 8,  38 => 6,  33 => 4,  27 => 3,  24 => 2,  19 => 1,);
    }
}
