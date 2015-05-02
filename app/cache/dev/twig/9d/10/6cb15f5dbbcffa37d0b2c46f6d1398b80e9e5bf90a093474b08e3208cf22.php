<?php

/* DemoBundle:Default:index.html.twig */
class __TwigTemplate_9d106cb15f5dbbcffa37d0b2c46f6d1398b80e9e5bf90a093474b08e3208cf22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "My New Title";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 6
            echo "            Hello <strong>";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</strong> # ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "!
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        <h2>Demo Details</h2>
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demo"]) ? $context["demo"] : $this->getContext($context, "demo")), "name", array()), "html", null, true);
        echo "<br>
        ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demo"]) ? $context["demo"] : $this->getContext($context, "demo")), "location", array()), "html", null, true);
        echo "<br>

        ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demo"]) ? $context["demo"] : $this->getContext($context, "demo")), "details", array()), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "DemoBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 12,  69 => 10,  65 => 9,  62 => 8,  51 => 6,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
