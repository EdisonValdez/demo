<?php

/* UserBundle:Security:login.html.twig */
class __TwigTemplate_0219168d1dc84a4849138d03fb7364a23b39a6aeb2bb77435f61c9a4a3cf5ee3 extends Twig_Template
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
    </div>
    <div class=\"topbar_margin\"></div>
    <div class=\"row-welcome{\$content_class}\">
        <div class=\"row-body\">
            <div class=\"welcome-inner\">
                <div class=\"welcome-message\">
                    <div class=\"welcome-title\">
                        Welcome To Demo
                    </div>
                    <div class=\"welcome-desc\">
                        Demo is the best
                    </div>
                    <div class=\"welcome-about\">
                        Nice
                    </div>
                </div>
                <div class=\"welcome-inputs\">
                    <form action=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
                        ";
        // line 24
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 25
            echo "                            <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array())), "html", null, true);
            echo "</div>
                        ";
        }
        // line 27
        echo "                        <label for=\"username\">Username:</label>
                        <input type=\"text\" id=\"short\"  name=\"_username\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

                        <label for=\"password\">Password:</label>
                        <input type=\"password\" id=\"short\"  name=\"_password\" />

                        <label for=\"remember_me\">Remember me:</label>
                        <input type=\"checkbox\"  style=\"width:50px\" name=\"_remember_me\"/>
                        <br>
                        <button type=\"submit\" class=\"register-button\">login</button>


                    </form>

                   <!--

                    <form action=\"\" method=\"POST\" autocomplete=\"off\">
                       <!-- {\$registerMsg}

                        <input type=\"text\" id=\"short\" name=\"username\" placeholder=\"{\$lng->username}\" />
                        <input type=\"password\" id=\"short\" name=\"password\" placeholder=\"{\$lng->password}\" />
                        <input type=\"text\" id=\"short\" name=\"email\" placeholder=\"{\$lng->email}\" />
                        {\$captcha}
                        <button type=\"submit\" name=\"register\"  class=\"register-button\">{\$lng->register}</button>
                    </form>
                    <br />
                    <form action=\"\" method=\"POST\" autocomplete=\"off\">
                        {\$loginMsg}
                        <input type=\"text\" id=\"short\" name=\"username\" placeholder=\"{\$lng->username_or_email}\" />
                        <input type=\"password\" id=\"short\" name=\"password\" placeholder=\"{\$lng->password}\" />-->
                        <!--<input type=\"checkbox\" name=\"remember\" value=\"1\">
                        <button type=\"submit\" name=\"login\" class=\"login-button\">{\$lng->login}</button><span class=\"forgot-password\"><a href=\"{\$url}/index.php?a=recover\">{\$lng->forgot_password}</a></span>
                    </form>-->
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
        return "UserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 28,  71 => 27,  65 => 25,  63 => 24,  59 => 23,  39 => 5,  36 => 4,  11 => 2,);
    }
}
