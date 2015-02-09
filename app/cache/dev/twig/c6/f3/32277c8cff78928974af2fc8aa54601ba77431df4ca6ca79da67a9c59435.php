<?php

/* BlogBundle:Home:page.html.twig */
class __TwigTemplate_c6f332277c8cff78928974af2fc8aa54601ba77431df4ca6ca79da67a9c59435 extends Twig_Template
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
\t<head>
\t\t<title>HELLO</title>
\t</head>
\t<body>
\t\tpage ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
        echo "
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Home:page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }
}
