<?php

/* :TwigBundle/views/Exception:error.html.twig */
class __TwigTemplate_cb5c20ccb13f1adf23bc409295711c694b0dc74bd5b0167ba6de5d23d014e78a extends Twig_Template
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
            'stylesheets' => array($this, 'block_stylesheets'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
    </div>
    <div class=\"topbar_margin\"></div>
    <div class=\"row-welcome{\$content_class}\">
        <div class=\"row-body\">
            <div class=\"welcome-inner\">
                <div class=\"welcome-message\">
                    <div class=\"welcome-title\">
                        Oh boy! We have a serious Problem!!
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
        return ":TwigBundle/views/Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 8,  47 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
