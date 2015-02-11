<?php

/* BlogBundle:Post:index.html.twig */
class __TwigTemplate_1d7c9b1a1ce82761bb6f068d9deb40acf2d1117d8ec6825ca2b585b8901c3e57 extends Twig_Template
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
    <h1>Tous les évenements</h1>
    ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 6
            echo "        <header>
            <h2><a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_show_post", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></h2>

        <header>
        <div class=\"thumb\"> <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "thumb", array()), "html", null, true);
            echo "\" alt=\"thumb\" width=\"500\"></div>
        <div class=\"content\">

            ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "content", array()), "html", null, true);
            echo "
        </div>
        <br>
        <div class=\"desc\">Posté par : ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "author", array()), "html", null, true);
            echo ", dans ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "categoryid", array()), "html", null, true);
            echo "</div>
        <time>Le ";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "createdat", array()), "d M Y"), "html", null, true);
            echo "</time>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Post:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 19,  78 => 17,  72 => 16,  66 => 13,  60 => 10,  52 => 7,  49 => 6,  45 => 5,  39 => 3,  36 => 2,  11 => 1,);
    }
}
