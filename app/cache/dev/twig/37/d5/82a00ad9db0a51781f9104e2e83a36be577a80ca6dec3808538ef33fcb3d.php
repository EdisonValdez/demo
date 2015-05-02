<?php

/* ::form_theme.html.twig */
class __TwigTemplate_37d582a00ad9db0a51781f9104e2e83a36be577a80ca6dec3808538ef33fcb3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->env->loadTemplate("form_div_layout.html.twig");
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form_label"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form_label" is not defined in trait "form_div_layout.html.twig".'));
        }

        $_trait_0_blocks["base_form_label"] = $_trait_0_blocks["form_label"]; unset($_trait_0_blocks["form_label"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'form_label' => array($this, 'block_form_label'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('form_row', $context, $blocks);
        // line 17
        $this->displayBlock('form_errors', $context, $blocks);
        // line 28
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('form_label', $context, $blocks);
    }

    // line 2
    public function block_form_row($context, array $blocks = array())
    {
        // line 3
        echo "<!-- <marquee>It looks like is working...</marquee>-->
    <div class=\"form-group ";
        // line 4
        echo (((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) ? ("has-error") : (""));
        echo "\">";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 9
        if ((array_key_exists("help", $context) && (isset($context["help"]) ? $context["help"] : $this->getContext($context, "help")))) {
            // line 10
            echo "        <div class=\"help-block\">
            ";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["help"]) ? $context["help"] : $this->getContext($context, "help")), "html", null, true);
            echo "
        </div>
         ";
        }
        // line 14
        echo "    </div>";
    }

    // line 17
    public function block_form_errors($context, array $blocks = array())
    {
        // line 19
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 20
            echo "<ul class=\"help-block\">";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 22
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "</ul>";
        }
    }

    // line 28
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        ob_start();
        // line 30
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 31
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 32
        echo "        <input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 36
    public function block_form_label($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        $context["label_attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 38
        echo "
    ";
        // line 39
        $this->displayBlock("base_form_label", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "::form_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  145 => 39,  142 => 38,  139 => 37,  136 => 36,  120 => 32,  117 => 31,  114 => 30,  111 => 29,  108 => 28,  103 => 24,  95 => 22,  91 => 21,  89 => 20,  87 => 19,  84 => 17,  80 => 14,  74 => 11,  71 => 10,  69 => 9,  67 => 7,  65 => 6,  63 => 5,  60 => 4,  57 => 3,  54 => 2,  50 => 36,  47 => 35,  45 => 28,  43 => 17,  41 => 2,  14 => 1,);
    }
}
