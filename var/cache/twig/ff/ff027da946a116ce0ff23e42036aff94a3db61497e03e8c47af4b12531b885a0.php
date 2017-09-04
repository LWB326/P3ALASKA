<?php

/* layout.html.twig */
class __TwigTemplate_8759ff19b6456b00c0211860678e0b0d533fc472eaf7c1663764ca0f062a2f81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html> <!-- working version 03_05_2017 -->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/lib/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/microcms.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <title>WFC-MicroCMS- ";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body>
\t<div class=\"container-fluid\"> <!-- main container -->
<!-- partie 1 navbar  -->
\t<nav class=\"navbar navbar-default navbar-fixed-top navbar-inverse\" role=\"navigation\">
            <div class=\"container\"> <!-- nav container -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-target\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Un aller simple pour l'Alaska</a>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-target\">
\t\t\t\t\t
\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
                       
                    ";
        // line 28
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 29
            echo "    \t\t\t\t<li class=\"";
            if (array_key_exists("adminMenu", $context)) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
            echo "\">
    \t\t\t\t<span class=\"glyphicon glyphicon-user\"></span>Administration</a></li>
\t\t\t\t\t";
        }
        // line 32
        echo "                       

                        ";
        // line 34
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 35
            echo "                            <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <span class=\"glyphicon glyphicon-cog\"></span> Bienvenue en Alaska, ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " ! <b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Log out</a></li>
                                </ul>
                            </li>
                        ";
        } else {
            // line 43
            echo "                            <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <span class=\"glyphicon glyphicon-user\"></span> Non connecté <b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Se connecter</a></li>
                                </ul>
                            </li>
                        ";
        }
        // line 51
        echo "                    </ul>
              </div> <!-- nav container -->
\t\t\t</div><!-- /.container -->
        </nav>

<!-- partie 2 photo de bannière  -->\t\t\t\t
\t<div id=\"photoBandeau1\" class=\"col-xs-12 col-lg-12\" > 
\t\t<p>
\t\t\t<img id=\"picture1\" class=\"col-xs-12 col-lg-12\" src=\"http://MicroCMS/images/salmon_glacier_820x230.jpg\"  alt=\"vue panoramique du glacier du saumon, Alaska\" />\t
\t\t</p>
\t</div>\t\t
\t<!-- </div> -->
\t\t
<!-- partie 3 left sidebar et content <div class=\"col-xs-12\" ></div>-->\t\t
\t\t
\t<div class=\"raw\" >
\t\t<div class=\"container-fluid\">
\t\t\t<aside class=\"zouba\">
\t\t\t\t<div id=\"leftAside\" class=\"col-xs-12 col-md-2\" >
\t\t\t\t\t
\t\t\t\t\t\t<div id=\"infopanelUp\">      
\t\t\t\t\t\t\t<p class=\"titreInfopanel\"><strong>Avertissement</strong></p>
\t\t\t\t\t\t\t<p>Ce livre décrit l'Alaska du XIX° siècle, extrême, exaltant, mais aussi brutal pour les hommes et les animaux. Pour survivre, ces hommes, ces femmes ont parfois recouru à des solutions qui peuvent choquer un public jeune ou sensible. La lecture de ce récit ne leur est pas destinée.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"infopanelDown\">  
\t\t\t\t\t\t\t<p class=\"titreInfopanel\"><strong>Quelques unités</strong></p>
\t\t\t\t\t\t\t<p>Distance terrestre :<br /> 1 mile = 1,6 km<br />Distance sur l'eau :<br /> 1 mile = 1,85 km<br />Longueur :<br /> 1 pied = 30 cm<br />1 pouce = 2,54 cm<br />Calibre des armes :<br />1 cal. = 0,254 mm<br />Température<br />- 10°F = -23°C<br />32°F = 0°C<br />98°F = 37°C<br />Poids :<br /> 1 livre(pound) = 0,45 kg<br />1 once = 28,3 g<br />Superficie :<br />1 acre = 0,40 hectare</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t<!-- </div>  -->
\t\t\t\t</div>
\t\t\t</aside>
\t\t
\t\t\t<div  id=\"content\">
\t\t\t\t<div class=\"col-xs-12  col-md-offset-1 col-md-11\" >
\t\t\t\t ";
        // line 85
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t</\tdiv>
<!-- partie 4 footer -->\t\t\t
\t\t<div id=\"piedPage\"><footer class=\"footer\">
\t\t<a href=\"https://github.com/bpesquet/OC-MicroCMS\">Alaska</a> site officiel
    \t</footer>
   \t\t</div>
\t</div> <!-- main container -->
    
     <!-- jQuery -->
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/lib/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- JavaScript Boostrap plugin -->
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/lib/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    
</body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
    }

    // line 85
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 85,  175 => 9,  167 => 100,  162 => 98,  146 => 85,  110 => 51,  103 => 47,  97 => 43,  90 => 39,  85 => 37,  81 => 35,  79 => 34,  75 => 32,  64 => 29,  62 => 28,  53 => 22,  37 => 9,  33 => 8,  29 => 7,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html> <!-- working version 03_05_2017 -->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link href=\"{{ asset('/lib/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('/css/microcms.css') }}\" rel=\"stylesheet\">
    <title>WFC-MicroCMS- {% block title %}{% endblock %}</title>
</head>
<body>
\t<div class=\"container-fluid\"> <!-- main container -->
<!-- partie 1 navbar  -->
\t<nav class=\"navbar navbar-default navbar-fixed-top navbar-inverse\" role=\"navigation\">
            <div class=\"container\"> <!-- nav container -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-target\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"{{ path('home') }}\">Un aller simple pour l'Alaska</a>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-target\">
\t\t\t\t\t
\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
                       
                    {% if app.user and is_granted('ROLE_ADMIN') %}
    \t\t\t\t<li class=\"{% if adminMenu is defined %}active{% endif %}\"><a href=\"{{ path('admin') }}\">
    \t\t\t\t<span class=\"glyphicon glyphicon-user\"></span>Administration</a></li>
\t\t\t\t\t{% endif %}
                       

                        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                            <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <span class=\"glyphicon glyphicon-cog\"></span> Bienvenue en Alaska, {{ app.user.username }} ! <b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"{{ path('logout') }}\">Log out</a></li>
                                </ul>
                            </li>
                        {% else %}
                            <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <span class=\"glyphicon glyphicon-user\"></span> Non connecté <b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"{{ path('login') }}\">Se connecter</a></li>
                                </ul>
                            </li>
                        {% endif %}
                    </ul>
              </div> <!-- nav container -->
\t\t\t</div><!-- /.container -->
        </nav>

<!-- partie 2 photo de bannière  -->\t\t\t\t
\t<div id=\"photoBandeau1\" class=\"col-xs-12 col-lg-12\" > 
\t\t<p>
\t\t\t<img id=\"picture1\" class=\"col-xs-12 col-lg-12\" src=\"http://MicroCMS/images/salmon_glacier_820x230.jpg\"  alt=\"vue panoramique du glacier du saumon, Alaska\" />\t
\t\t</p>
\t</div>\t\t
\t<!-- </div> -->
\t\t
<!-- partie 3 left sidebar et content <div class=\"col-xs-12\" ></div>-->\t\t
\t\t
\t<div class=\"raw\" >
\t\t<div class=\"container-fluid\">
\t\t\t<aside class=\"zouba\">
\t\t\t\t<div id=\"leftAside\" class=\"col-xs-12 col-md-2\" >
\t\t\t\t\t
\t\t\t\t\t\t<div id=\"infopanelUp\">      
\t\t\t\t\t\t\t<p class=\"titreInfopanel\"><strong>Avertissement</strong></p>
\t\t\t\t\t\t\t<p>Ce livre décrit l'Alaska du XIX° siècle, extrême, exaltant, mais aussi brutal pour les hommes et les animaux. Pour survivre, ces hommes, ces femmes ont parfois recouru à des solutions qui peuvent choquer un public jeune ou sensible. La lecture de ce récit ne leur est pas destinée.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"infopanelDown\">  
\t\t\t\t\t\t\t<p class=\"titreInfopanel\"><strong>Quelques unités</strong></p>
\t\t\t\t\t\t\t<p>Distance terrestre :<br /> 1 mile = 1,6 km<br />Distance sur l'eau :<br /> 1 mile = 1,85 km<br />Longueur :<br /> 1 pied = 30 cm<br />1 pouce = 2,54 cm<br />Calibre des armes :<br />1 cal. = 0,254 mm<br />Température<br />- 10°F = -23°C<br />32°F = 0°C<br />98°F = 37°C<br />Poids :<br /> 1 livre(pound) = 0,45 kg<br />1 once = 28,3 g<br />Superficie :<br />1 acre = 0,40 hectare</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t<!-- </div>  -->
\t\t\t\t</div>
\t\t\t</aside>
\t\t
\t\t\t<div  id=\"content\">
\t\t\t\t<div class=\"col-xs-12  col-md-offset-1 col-md-11\" >
\t\t\t\t {% block content %}{% endblock %}</div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t</\tdiv>
<!-- partie 4 footer -->\t\t\t
\t\t<div id=\"piedPage\"><footer class=\"footer\">
\t\t<a href=\"https://github.com/bpesquet/OC-MicroCMS\">Alaska</a> site officiel
    \t</footer>
   \t\t</div>
\t</div> <!-- main container -->
    
     <!-- jQuery -->
    <script src=\"{{ asset('/lib/jquery/jquery.min.js') }}\"></script>
    <!-- JavaScript Boostrap plugin -->
    <script src=\"{{ asset('/lib/bootstrap/js/bootstrap.min.js') }}\"></script>
    
</body>
</html>", "layout.html.twig", "F:\\WEB_FACTORY_C\\MicroCMS\\views\\layout.html.twig");
    }
}
