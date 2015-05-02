<?php

/* ::base.html.twig */
class __TwigTemplate_f407133d23ba7d85aa3214387f9469599a3ab755d219883f222667ac8ceb54d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>

        <meta name=\"viewport\" content=\"width=device-width, minimum-scale=1.0, maximum-scale=1.0\" />
        <link rel=\"shortcut icon\" href=\"bundles/demo/images/icon.ico\" />
        <title>";
        // line 8
        if ($this->renderBlock("title", $context, $blocks)) {
            // line 9
            $this->displayBlock("title", $context, $blocks);
            echo "Welcome Guys and Gals!";
        } else {
            // line 11
            echo "Demo Ready to rumble!";
        }
        // line 13
        echo "</title>
        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    </head>
    <body>

    <div class=\"topbar\">
        <div class=\"header\">
            <a href=\"http://127.0.0.1:8000\"><div class=\"logo\"></div><div class=\"logo-small\"></div></a>
            <div class=\"search-input\"><input type=\"text\" id=\"search\" placeholder=\"search companies\"></div>
            ";
        // line 36
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 37
            echo "            <!-- Nothing here  -->
            ";
        } else {
            // line 39
            echo "            <a href=\"register\"><div class=\"menu_btn\" title=\"Register\"><img src=\"bundles/demo/images/register.png\" /></div></a>
            ";
        }
        // line 41
        echo "            ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 42
            echo "            <div class=\"menu_visitor\"><a class=\"\" style=\"color:#fff;\" href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">
                                <strong>Logout</strong></a>  | Logged in as ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo "

                            ";
        } else {
            // line 46
            echo "                       <div class=\"menu_visitor\">Hello <strong>Visitor</strong></div>
                        ";
        }
        // line 48
        echo "                    </div>
        </div>
        <div class=\"search-container\"></div>
    </div>
    <div class=\"topbar_margin\"></div>
        ";
        // line 53
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "has", array(0 => "success"), "method")) {
            // line 54
            echo "            <div class=\"notification-box box-transparent notification-box-transparent\">
                ";
            // line 55
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 56
                echo "                ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "            </div>
        ";
        }
        // line 60
        echo "

        ";
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "
    </body>
</html>

";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\">

            ";
        // line 17
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4927f74_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4927f74_0") : $this->env->getExtension('assets')->getAssetUrl("css/built/layout_style_1.css");
            // line 23
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "4927f74"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4927f74") : $this->env->getExtension('assets')->getAssetUrl("css/built/layout.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
            ";
        }
        unset($context["asset_url"]);
        // line 25
        echo "
        ";
    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        // line 64
        echo "        <script src=\"//code.jquery.com/jquery-1.11.0.min.js\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 64,  166 => 63,  161 => 62,  156 => 25,  142 => 23,  138 => 17,  134 => 15,  131 => 14,  123 => 66,  120 => 63,  118 => 62,  114 => 60,  110 => 58,  101 => 56,  97 => 55,  94 => 54,  92 => 53,  85 => 48,  81 => 46,  75 => 43,  70 => 42,  67 => 41,  63 => 39,  59 => 37,  57 => 36,  44 => 27,  42 => 14,  39 => 13,  36 => 11,  32 => 9,  30 => 8,  22 => 1,);
    }
}
