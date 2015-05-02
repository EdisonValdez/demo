<?php

/* :TwigBundle/views/Exception:error404.html.twig */
class __TwigTemplate_292282a9a7c32700561861c6f50c0f1b8763a6cb80af76e34124d2c8ef52852e extends Twig_Template
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
    </div>
    <div class=\"topbar_margin\"></div>
    <div class=\"row-welcome{\$content_class}\">
        <div class=\"row-body\">
            <div class=\"welcome-inner\">
                <div class=\"welcome-message\">
                    <div class=\"welcome-title\">
                        404 ERROR PAGE NOT FOUND!
                    </div>
                    <div class=\"welcome-desc\">
                        Please go back where you came from and try again another thing
                    </div>
                    <div class=\"welcome-about\">
                        Thanks <a href=\"\">Back</a>
                    </div>
                </div>
                <div class=\"welcome-inputs\">


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
        return ":TwigBundle/views/Exception:error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 5,  36 => 4,  11 => 1,);
    }
}
