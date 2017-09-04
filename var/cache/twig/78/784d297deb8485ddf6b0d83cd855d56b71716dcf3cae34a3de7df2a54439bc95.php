<?php

/* error.html.twig */
class __TwigTemplate_0cd3b5a865f7f88c9bf0b1b8271c59128b7d4d24d8af1306a8c1eb8926f19aa7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
";
        // line 2
        echo twig_var_dump($this->env, $context, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")));
        echo "

 </html>";
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
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
{{dump(error)}}

 </html>", "error.html.twig", "F:\\WEB_FACTORY_C\\MicroCMS\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\error.html.twig");
    }
}
