<?php

/* BlogBundle:Post:show.html.twig */
class __TwigTemplate_bc105b0bf597478138ebe00519a740456d6bf4c3557aaf3880c93496e5834d59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
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
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("blog_add_post");
        echo "\">Ajouter un évenement</a>

    ";
        // line 5
        $this->env->loadTemplate("BlogBundle:Post:post_content.html.twig")->display($context);
        // line 6
        echo "
";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Post:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  45 => 5,  39 => 3,  36 => 2,  11 => 1,);
    }
}
