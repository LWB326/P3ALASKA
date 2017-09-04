<?php

/* article.html.twig */
class __TwigTemplate_9cc12601e67417688d071c0578778865b742b511b9854a24bed520cbe5eb18e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "article.html.twig", 1);
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
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 3
            $this->env->getExtension('form')->renderer->setTheme((isset($context["commentForm"]) ? $context["commentForm"] : $this->getContext($context, "commentForm")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "</p>

    <h3>Comments</h3>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 13
            echo "        <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "author", array()), "username", array()), "html", null, true);
            echo "</strong> said : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
            echo "<br>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 15
            echo "        No comments yet.
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
    <h3>Add a comment</h3>
    ";
        // line 19
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 20
            echo "   
        ";
            // line 21
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["commentForm"]) ? $context["commentForm"] : $this->getContext($context, "commentForm")), 'form_start');
            echo "

        ";
            // line 23
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["commentForm"]) ? $context["commentForm"] : $this->getContext($context, "commentForm")), "email", array()), 'row');
            echo "
        ";
            // line 24
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["commentForm"]) ? $context["commentForm"] : $this->getContext($context, "commentForm")), "email", array()), 'widget');
            echo "

        ";
            // line 26
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["commentForm"]) ? $context["commentForm"] : $this->getContext($context, "commentForm")), "website", array()), 'row');
            echo "
        ";
            // line 27
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["commentForm"]) ? $context["commentForm"] : $this->getContext($context, "commentForm")), "website", array()), 'widget');
            echo "

        ";
            // line 29
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["commentForm"]) ? $context["commentForm"] : $this->getContext($context, "commentForm")), "content", array()), 'row');
            echo "
        ";
            // line 30
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["commentForm"]) ? $context["commentForm"] : $this->getContext($context, "commentForm")), "content", array()), 'widget');
            echo "

        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-3\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Save\" />
            </div>
        </div>
        ";
            // line 37
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["commentForm"]) ? $context["commentForm"] : $this->getContext($context, "commentForm")), 'form_end');
            echo "
        ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 39
                echo "            <div class=\"alert alert-success\">
                ";
                // line 40
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "    ";
        } else {
            // line 44
            echo "        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Log in</a> to add comments.
    ";
        }
    }

    public function getTemplateName()
    {
        return "article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 44,  143 => 43,  134 => 40,  131 => 39,  127 => 38,  123 => 37,  113 => 30,  109 => 29,  104 => 27,  100 => 26,  95 => 24,  91 => 23,  86 => 21,  83 => 20,  81 => 19,  77 => 17,  70 => 15,  60 => 13,  55 => 12,  49 => 9,  44 => 8,  41 => 7,  35 => 5,  31 => 1,  28 => 3,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}
{% if is_granted('IS_AUTHENTICATED_FULLY') %}
    {% form_theme commentForm 'bootstrap_3_horizontal_layout.html.twig' %}
{% endif %}
{% block title %}{{ article.title }}{% endblock %}

{% block content %}
    <h2>{{ article.title }}</h2>
    <p>{{ article.content }}</p>

    <h3>Comments</h3>
    {% for comment in comments %}
        <strong>{{ comment.author.username }}</strong> said : {{ comment.content }}<br>
    {% else %}
        No comments yet.
    {% endfor %}

    <h3>Add a comment</h3>
    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
   
        {{ form_start(commentForm) }}

        {{ form_row(commentForm.email) }}
        {{ form_widget(commentForm.email) }}

        {{ form_row(commentForm.website) }}
        {{ form_widget(commentForm.website) }}

        {{ form_row(commentForm.content) }}
        {{ form_widget(commentForm.content) }}

        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-3\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Save\" />
            </div>
        </div>
        {{ form_end(commentForm) }}
        {% for flashMessage in app.session.flashbag.get('success') %}
            <div class=\"alert alert-success\">
                {{ flashMessage }}
            </div>
        {% endfor %}
    {% else %}
        <a href=\"{{ path('login') }}\">Log in</a> to add comments.
    {% endif %}
{% endblock %}", "article.html.twig", "F:\\WEB_FACTORY_C\\MicroCMS\\views\\article.html.twig");
    }
}
