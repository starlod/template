<?php

/* TemplateLonelyBundle:Home:index.html.twig */
class __TwigTemplate_f644c293ade6f1aaf7bf69dac0a6af373e75870362a0ef84a2e91a2962e75501 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TemplateLonelyBundle::layout.html.twig", "TemplateLonelyBundle:Home:index.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TemplateLonelyBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Title";
    }

    // line 8
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 9
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/css/sample.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 13
    public function block_javascript($context, array $blocks = array())
    {
        // line 14
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/js/sample.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "TemplateLonelyBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  46 => 13,  39 => 9,  36 => 8,  30 => 5,  11 => 2,);
    }
}
