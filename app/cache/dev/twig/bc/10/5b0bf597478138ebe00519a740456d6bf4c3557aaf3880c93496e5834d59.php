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

    <header>
    <h2><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_show_post", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</a></h2>

    <header>
    <div class=\"thumb\"> <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "thumb", array()), "html", null, true);
        echo "\" alt=\"thumb\" width=\"500\"></div>
    <div class=\"content\">

        ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "content", array()), "html", null, true);
        echo "
    </div>
    <br>
    <div class=\"desc\">Posté par : ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "author", array()), "html", null, true);
        echo ", dans ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "categoryid", array()), "html", null, true);
        echo "</div>
    <time>Le ";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "createdat", array()), "d M Y"), "html", null, true);
        echo "</time>


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
        return array (  72 => 16,  66 => 15,  60 => 12,  54 => 9,  46 => 6,  39 => 3,  36 => 2,  11 => 1,);
    }
}
