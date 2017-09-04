<?php

/* article_form.html.twig */
class __TwigTemplate_e8a7817b56517346c33bef00e5852ef5c4490425e0cf9c3e067bed0b1946524e extends Twig_Template
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
        $context["adminMenu"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<h2 class=\"text-center\">";
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 9
            echo "<div class=\"alert alert-success\">
    ";
            // line 10
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
<div class=\"well\">
";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["articleForm"]) ? $context["articleForm"] : $this->getContext($context, "articleForm")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
    <div class=\"form-group\">
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["articleForm"]) ? $context["articleForm"] : $this->getContext($context, "articleForm")), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label")));
        // line 19
        echo "
        <div class=\"col-sm-6\">
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["articleForm"]) ? $context["articleForm"] : $this->getContext($context, "articleForm")), "title", array()), 'errors');
        echo "
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["articleForm"]) ? $context["articleForm"] : $this->getContext($context, "articleForm")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        // line 24
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["articleForm"]) ? $context["articleForm"] : $this->getContext($context, "articleForm")), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label")));
        // line 30
        echo "
        <div class=\"col-sm-6\">
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["articleForm"]) ? $context["articleForm"] : $this->getContext($context, "articleForm")), "content", array()), 'errors');
        echo "
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["articleForm"]) ? $context["articleForm"] : $this->getContext($context, "articleForm")), "content", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "8")));
        // line 36
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        <div class=\"col-sm-offset-4 col-sm-3\">
            <input type=\"submit\" class=\"btn btn-primary\" value=\"Save\" />
        </div>
    </div>
";
        // line 44
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
        return array (  111 => 44,  101 => 36,  99 => 33,  95 => 32,  91 => 30,  89 => 28,  83 => 24,  81 => 22,  77 => 21,  73 => 19,  71 => 17,  66 => 15,  62 => 13,  53 => 10,  50 => 9,  46 => 8,  41 => 7,  38 => 6,  32 => 4,  28 => 1,  26 => 2,  11 => 1,);
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
{{ form_start(articleForm, { 'attr': {'class': 'form-horizontal'} }) }}
    <div class=\"form-group\">
        {{ form_label(articleForm.title, null, { 'label_attr':  {
            'class': 'col-sm-4 control-label'
        }}) }}
        <div class=\"col-sm-6\">
            {{ form_errors(articleForm.title) }}
            {{ form_widget(articleForm.title, { 'attr':  {
                'class': 'form-control'
            }}) }}
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(articleForm.content, null, { 'label_attr':  {
            'class': 'col-sm-4 control-label'
        }}) }}
        <div class=\"col-sm-6\">
            {{ form_errors(articleForm.content) }}
            {{ form_widget(articleForm.content, { 'attr':  {
                'class': 'form-control',
                'rows': '8'
            }}) }}
        </div>
    </div>
    <div class=\"form-group\">
        <div class=\"col-sm-offset-4 col-sm-3\">
            <input type=\"submit\" class=\"btn btn-primary\" value=\"Save\" />
        </div>
    </div>
{{ form_end(articleForm) }}
</div>
{% endblock %}
", "article_form.html.twig", "F:\\WEB_FACTORY_C\\MicroCMS\\views\\article_form.html.twig");
    }
}
