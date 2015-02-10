<?php

/* BlogBundle:AdminArticle:add.html.twig */
class __TwigTemplate_10f9eefc2e368f576b20b376d3b639b9667e86ce48f90d6da2433d4923b7197a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
</head>
<body>
<form method=\"post\">
    Titre <input type=\"text\" name=\"titre\">
    <input type=\"submit\" value='poster'>
</form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "BlogBundle:AdminArticle:add.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
