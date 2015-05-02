<?php

/* DemoBundle:Demo:edit.html.twig */
class __TwigTemplate_a962b31eb7ed2da6d8c97c715e156f3db9bf276e01ac95d6864bbd707e352c1b extends Twig_Template
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
        <section class=\"event-show event-edit\">
            <header id=\"menu\">
                <a class=\"link\" href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("demo");
        echo "\">&larr; back to the event list</a>
                <a class=\"link\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("demo_show", array("slug" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "slug", array()))), "html", null, true);
        echo "\">demo event</a>
            </header>

            <article>
                <header class=\"map-container\">

                </header>
                <section>
                    ";
        // line 17
        echo "                    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_start');
        echo "
                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'errors');
        echo "
                    <h1>
                        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "name", array()), 'errors');
        echo "
                        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "name", array()), 'widget');
        echo "
                    </h1>

                    <dl>
                        <dt>where:</dt>
                        <dd>
                            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "location", array()), 'errors');
        echo "
                            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "location", array()), 'widget');
        echo "
                        </dd>

                        <dt>when:</dt>
                        <dd>
                            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "time", array()), 'errors');
        echo "
                            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "time", array()), 'widget');
        echo "
                        </dd>

                        <dt>what:</dt>
                        <dd>
                            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "details", array()), 'errors');
        echo "
                            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "details", array()), 'widget');
        echo "
                        </dd>
                    </dl>

                    ";
        // line 45
        echo "                    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_end');
        echo "

                    ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form');
        echo "
                </section>
            </article>
        </section>
    </div>
";
    }

    public function getTemplateName()
    {
        return "DemoBundle:Demo:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 47,  117 => 45,  110 => 40,  106 => 39,  98 => 34,  94 => 33,  86 => 28,  82 => 27,  73 => 21,  69 => 20,  64 => 18,  59 => 17,  48 => 8,  44 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}
