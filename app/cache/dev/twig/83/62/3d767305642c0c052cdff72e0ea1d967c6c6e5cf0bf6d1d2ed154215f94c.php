<?php

/* TemplateLonelyBundle::layout.html.twig */
class __TwigTemplate_83623d767305642c0c052cdff72e0ea1d967c6c6e5cf0bf6d1d2ed154215f94c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TemplateLonelyBundle::layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascripts' => array($this, 'block_javascripts'),
            'javascript' => array($this, 'block_javascript'),
            'content' => array($this, 'block_content'),
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
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
        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/css/common.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link type=\"text/css\" href=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/cepertino/jquery-ui.css\" rel=\"stylesheet\" />
    ";
        // line 8
        $this->displayBlock('stylesheet', $context, $blocks);
    }

    public function block_stylesheet($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        // line 13
        echo "    <script type=\"text/javascript\" src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"http://code.jquery.com/ui/1.10.3/jquery-ui.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/js/main.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 16
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = array())
    {
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 25
        echo "
    ";
        // line 26
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        // line 21
        echo "    <div id=\"header\">
        ";
        // line 23
        echo "    </div><!-- / #header -->
    ";
    }

    // line 26
    public function block_footer($context, array $blocks = array())
    {
        // line 27
        echo "        <div id=\"footer\">
            <div class=\"footer_navi\">
                <p id=\"copyright\">Copyright &copy; 2015 www.starlod.net All Rights Reserved.</p>
            </div>
        </div><!-- / #footer -->
    ";
    }

    public function getTemplateName()
    {
        return "TemplateLonelyBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 27,  102 => 26,  97 => 23,  94 => 21,  91 => 20,  87 => 26,  84 => 25,  81 => 20,  78 => 19,  70 => 16,  66 => 15,  62 => 13,  60 => 12,  57 => 11,  49 => 8,  44 => 6,  39 => 5,  37 => 4,  34 => 3,  11 => 1,);
    }
}
