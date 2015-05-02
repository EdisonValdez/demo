<?php

/* DemoBundle:Demo:index.html.twig */
class __TwigTemplate_fb0e811329f8b1d7289685426c60f5ef437c44b8dfd0ca3eac4212809f3aeb84 extends Twig_Template
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
    <h1>Demo list</h1>
    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Map</th>
                <th>Time</th>
                <th>Location</th>
                <th>Details</th>
                <th>Posted</th>
                <th>Actions</th>


            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        echo "       ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("DemoBundle:Demo:_upcomingDemos"));
        echo "

        </tbody>
    </table>

        <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("demo_new");
        echo "\">
            <button>
                Create a new entry
        </button>
            </a>

    </div>
    ";
    }

    public function getTemplateName()
    {
        return "DemoBundle:Demo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 28,  59 => 23,  39 => 4,  36 => 3,  11 => 1,);
    }
}
