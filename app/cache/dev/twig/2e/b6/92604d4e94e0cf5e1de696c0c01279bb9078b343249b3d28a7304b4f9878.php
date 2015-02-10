<?php

/* BlogBundle:Admin:index.html.twig */
class __TwigTemplate_2eb692604d4e94e0cf5e1de696c0c01279bb9078b343249b3d28a7304b4f9878 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("BlogBundle::layout_admin.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'arianne' => array($this, 'block_arianne'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogBundle::layout_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Index Admin | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 3
    public function block_arianne($context, array $blocks = array())
    {
        $this->displayParentBlock("arianne", $context, $blocks);
        echo " > Index";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<div id=\"flash\">
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 8
            echo "        <div class=\"flash-notice\">
            ";
            // line 9
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
</div>
<a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("blog_add_post");
        echo "\">Ajouter article</a>
";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 14,  77 => 12,  68 => 9,  65 => 8,  61 => 7,  55 => 5,  52 => 4,  45 => 3,  38 => 2,  11 => 1,);
    }
}
