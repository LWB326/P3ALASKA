<?php

/* article_form.html.twig */
class __TwigTemplate_2500461e534021efe02ccfaa7ae0eb69048df9c0ada3eb620087ae92f67b3b2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "article_form.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["articleForm"]) ? $context["articleForm"] : $this->getContext($context, "articleForm")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 3
        $context["adminMenu"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h2 class=\"text-center\">";
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "        <div class=\"alert alert-success\">
            ";
            // line 11
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
    <div class=\"well\">
        ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["articleForm"]) ? $context["articleForm"] : $this->getContext($context, "articleForm")), 'form_start');
        echo "
        
\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["articleForm"]) ? $context["articleForm"] : $this->getContext($context, "articleForm")), "title", array()), 'row');
        echo "                   
\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["articleForm"]) ? $context["articleForm"] : $this->getContext($context, "articleForm")), "title", array()), 'widget');
        echo "

\t\t\t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["articleForm"]) ? $context["articleForm"] : $this->getContext($context, "articleForm")), "content", array()), 'row');
        echo "
\t\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["articleForm"]) ? $context["articleForm"] : $this->getContext($context, "articleForm")), "content", array()), 'widget');
        echo "

\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-offset-2 col-sm-3\">
\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" />
\t\t\t\t</div>
\t\t\t</div>
        ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["articleForm"]) ? $context["articleForm"] : $this->getContext($context, "articleForm")), 'form_end');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "article_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 29,  86 => 22,  82 => 21,  77 => 19,  73 => 18,  68 => 16,  64 => 14,  55 => 11,  52 => 10,  48 => 9,  43 => 8,  40 => 7,  34 => 5,  30 => 1,  28 => 3,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}
{% form_theme articleForm 'bootstrap_3_horizontal_layout.html.twig' %}
{% set adminMenu = true %}

{% block title %}{{ title }}{% endblock %}

{% block content %}
    <h2 class=\"text-center\">{{ block('title') }}</h2>
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"alert alert-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}

    <div class=\"well\">
        {{ form_start(articleForm) }}
        
\t\t\t{{ form_row(articleForm.title) }}                   
\t\t\t{{ form_widget(articleForm.title) }}

\t\t\t{{ form_row(articleForm.content) }}
\t\t\t{{ form_widget(articleForm.content) }}

\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-offset-2 col-sm-3\">
\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" />
\t\t\t\t</div>
\t\t\t</div>
        {{ form_end(articleForm) }}
    </div>
{% endblock %}", "article_form.html.twig", "F:\\WEB_FACTORY_C\\MicroCMS\\views\\article_form.html.twig");
    }
}
