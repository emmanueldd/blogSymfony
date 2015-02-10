<?php

/* BlogBundle::layout_admin.html.twig */
class __TwigTemplate_c2478c268ccf71afca690053374d05bbe6105d175d292e843e64a3f63cdc6e2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::admin.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'arianne' => array($this, 'block_arianne'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Admin";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 5
    public function block_arianne($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("arianne", $context, $blocks);
        echo " > Blog ";
    }

    public function getTemplateName()
    {
        return "BlogBundle::layout_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  44 => 3,  38 => 2,  11 => 1,);
    }
}
