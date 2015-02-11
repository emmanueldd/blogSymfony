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
        <style>";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "</style>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <header>
            <h1>MyCms</h1>
        </header>
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
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
        // line 7
        echo "            label {
                display: block;
            }";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "                ";
        $this->displayBlock('arianne', $context, $blocks);
        // line 20
        echo "
        ";
    }

    // line 17
    public function block_arianne($context, array $blocks = array())
    {
        // line 18
        echo "                    Accueil
                ";
    }

    // line 22
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
        return array (  93 => 22,  88 => 18,  85 => 17,  80 => 20,  77 => 17,  74 => 16,  68 => 7,  65 => 6,  59 => 5,  53 => 23,  50 => 22,  48 => 16,  39 => 10,  36 => 9,  34 => 6,  30 => 5,  24 => 1,);
    }
}
