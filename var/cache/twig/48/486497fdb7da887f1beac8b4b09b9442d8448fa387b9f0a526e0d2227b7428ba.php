<?php

/* error.html.twig */
class __TwigTemplate_fec4afadf14bd3824a17d9c008d96d5510b4764f235aa4f5ae41cc3525a63f35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "error.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Error!";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"row\" id=\"errorPanel\">
    <div class=\"col-xs-5\">
        <img class=\"img-responsive pull-right\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/images/404-ghost.png"), "html", null, true);
        echo "\" alt=\"Error ghost\"/>
    </div>
    
    <div class=\"col-xs-6\">
        <h1>Whoops...<br><small>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "</small></h1>
   
\t</div>
   
</div>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block title %}Error!{% endblock %}

{% block content %}
<div class=\"row\" id=\"errorPanel\">
    <div class=\"col-xs-5\">
        <img class=\"img-responsive pull-right\" src=\"{{ asset('/images/404-ghost.png') }}\" alt=\"Error ghost\"/>
    </div>
    
    <div class=\"col-xs-6\">
        <h1>Whoops...<br><small>{{ message }}</small></h1>
   
\t</div>
   
</div>
{% endblock %}", "error.html.twig", "F:\\WEB_FACTORY_C\\MicroCMS\\views\\error.html.twig");
    }
}
