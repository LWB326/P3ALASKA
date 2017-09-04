<?php

/* user_form.html.twig */
class __TwigTemplate_7aa2cb3f5dad11569f41eb1d561a27e1432862bfdb6be147d3faa0b23459422e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "user_form.html.twig", 1);
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
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "password", array()), "first", array()), 'errors')) {
            // line 14
            echo "<div class=\"alert alert-danger\">
    ";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "password", array()), "first", array()), 'errors');
            echo "
</div>
";
        }
        // line 18
        echo "
<div class=\"well\">
";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
    <div class=\"form-group\">
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "username", array()), 'label', array("label_attr" => array("class" => "col-sm-5 control-label")));
        // line 24
        echo "
        <div class=\"col-sm-4\">
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "username", array()), 'errors');
        echo "
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        // line 29
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "password", array()), "first", array()), 'label', array("label_attr" => array("class" => "col-sm-5 control-label")));
        // line 35
        echo "
        <div class=\"col-sm-4\">
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "password", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        // line 39
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "password", array()), "second", array()), 'label', array("label_attr" => array("class" => "col-sm-5 control-label")));
        // line 45
        echo "
        <div class=\"col-sm-4\">
            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "password", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        // line 49
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "role", array()), 'label', array("label_attr" => array("class" => "col-sm-5 control-label")));
        // line 55
        echo "
        <div class=\"col-sm-2\">
            ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "role", array()), 'errors');
        echo "
            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "role", array()), 'widget', array("attr" => array("class" => "form-control")));
        // line 60
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        <div class=\"col-sm-offset-5 col-sm-3\">
            <input type=\"submit\" class=\"btn btn-primary\" value=\"Save\" />
        </div>
    </div>
";
        // line 68
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), 'form_end');
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "user_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 68,  140 => 60,  138 => 58,  134 => 57,  130 => 55,  128 => 53,  122 => 49,  120 => 47,  116 => 45,  114 => 43,  108 => 39,  106 => 37,  102 => 35,  100 => 33,  94 => 29,  92 => 27,  88 => 26,  84 => 24,  82 => 22,  77 => 20,  73 => 18,  67 => 15,  64 => 14,  62 => 13,  53 => 10,  50 => 9,  46 => 8,  41 => 7,  38 => 6,  32 => 4,  28 => 1,  26 => 2,  11 => 1,);
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
{% if form_errors(userForm.password.first) %}
<div class=\"alert alert-danger\">
    {{ form_errors(userForm.password.first) }}
</div>
{% endif %}

<div class=\"well\">
{{ form_start(userForm, { 'attr': {'class': 'form-horizontal'} }) }}
    <div class=\"form-group\">
        {{ form_label(userForm.username, null, { 'label_attr':  {
            'class': 'col-sm-5 control-label'
        }}) }}
        <div class=\"col-sm-4\">
            {{ form_errors(userForm.username) }}
            {{ form_widget(userForm.username, { 'attr':  {
                'class': 'form-control'
            }}) }}
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(userForm.password.first, null, { 'label_attr':  {
            'class': 'col-sm-5 control-label'
        }}) }}
        <div class=\"col-sm-4\">
            {{ form_widget(userForm.password.first, { 'attr':  {
                'class': 'form-control'
            }}) }}
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(userForm.password.second, null, { 'label_attr':  {
            'class': 'col-sm-5 control-label'
        }}) }}
        <div class=\"col-sm-4\">
            {{ form_widget(userForm.password.second, { 'attr':  {
                'class': 'form-control'
            }}) }}
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(userForm.role, null, { 'label_attr':  {
            'class': 'col-sm-5 control-label'
        }}) }}
        <div class=\"col-sm-2\">
            {{ form_errors(userForm.role) }}
            {{ form_widget(userForm.role, { 'attr':  {
                'class': 'form-control'
            }}) }}
        </div>
    </div>
    <div class=\"form-group\">
        <div class=\"col-sm-offset-5 col-sm-3\">
            <input type=\"submit\" class=\"btn btn-primary\" value=\"Save\" />
        </div>
    </div>
{{ form_end(userForm) }}
</div>
{% endblock %}", "user_form.html.twig", "F:\\WEB_FACTORY_C\\MicroCMS\\views\\user_form.html.twig");
    }
}
