<?php

/* UserBundle:Register:register.html.twig */
class __TwigTemplate_722e8ebd3ea727f452d5db0597f0318111d66f70e01ca2bf7957c6c2cd86ef52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
    <div class=\"row-welcome{\$content_class}\">
        <div class=\"row-body\">
            <div class=\"welcome-inner\">
                <div class=\"welcome-message\">
                    <div class=\"welcome-title\">
                        Register
                    </div>
                    <div class=\"welcome-desc\">
                        And get easiest as never your quotations
                    </div>
                    <div class=\"welcome-about\">
                        Easy, reliable!
                    </div>
                </div>
                <div class=\"welcome-inputs\">

                     <form action=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("user_register");
        echo "\" method=\"POST\" autocomplete=\"off\" novalidate>

                         <div class=\"notification-box box-transparent notification-box-transparent\">
                            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
                         </div>

                         ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'row', array("label" => "Username"));
        echo "
                         ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'row', array("label" => "Email"));
        echo "
                         ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "first", array()), 'row', array("label" => "Password"));
        // line 31
        echo "
                         ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "second", array()), 'row', array("label" => "Repeat Password"));
        // line 33
        echo "
                         ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
                         <button type=\"submit\" name=\"register\"  class=\"register-button\">Register</button>

                     </form>
                     <br />

                </div>
            </div>
        </div>
    </div>
    <div class=\"welcome-full\">
        <div class=\"row-body\">
            <div class=\"welcome-inner\">
                <!-- {\$rows}-->
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "UserBundle:Register:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 34,  85 => 33,  83 => 32,  80 => 31,  78 => 30,  74 => 29,  70 => 28,  64 => 25,  58 => 22,  39 => 5,  36 => 4,  11 => 2,);
    }
}
