<?php

/* ::base.html.twig */
class __TwigTemplate_f3700cd003670cd5db58a34983d290f58455a9ec62b85b48becfa34efe3c1236 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'arianne' => array($this, 'block_arianne'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <header>
            <h1>MyCms</h1>
        </header>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "MyCms";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "                ";
        $this->displayBlock('arianne', $context, $blocks);
        // line 17
        echo "
        ";
    }

    // line 14
    public function block_arianne($context, array $blocks = array())
    {
        // line 15
        echo "                    Accueil
                ";
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  87 => 19,  82 => 15,  79 => 14,  74 => 17,  71 => 14,  68 => 13,  63 => 6,  57 => 5,  51 => 20,  48 => 19,  46 => 13,  36 => 7,  34 => 6,  30 => 5,  24 => 1,);
    }
}
