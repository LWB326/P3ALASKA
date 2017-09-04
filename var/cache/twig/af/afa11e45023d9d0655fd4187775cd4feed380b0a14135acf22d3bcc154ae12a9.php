<?php

/* admin.html.twig */
class __TwigTemplate_6389d8f0451124a7f22b2b76b672cad93a1dc89651253a68e64141ecb01db705 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "admin.html.twig", 1);
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
        echo "Administration";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "\t<h2 class=\"text-center\">";
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>

";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "\t<div class=\"alert alert-success\">
\t\t";
            // line 11
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
<div class=\"row\">
    <div class=\"col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3\">
        <ul class=\"nav nav-tabs nav-justified\">
            <li class=\"active\"><a href=\"#articles\" data-toggle=\"tab\">Chapitres</a></li>
            <li><a href=\"#comments\" data-toggle=\"tab\">Commentaires</a></li>
            <li><a href=\"#users\" data-toggle=\"tab\">Utilisateurs</a></li>
\t\t\t<li><a href=\"#signalements\" data-toggle=\"tab\">Signalements</a></li>
        </ul>
    </div>
</div>
<!-- Onglet Chapitres -->
<div class=\"tab-content\">
    <div class=\"tab-pane fade in active adminTable\" id=\"articles\">
        ";
        // line 28
        if ((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles"))) {
            // line 29
            echo "        <div class=\"table-responsive\">
            <table class=\"table table-hover table-condensed\">
                <thead>
                    <tr>
                        <th>Titre du chapitre</th>
                        <th>Texte du chapitre</th>
                        <th>Edition du chapitre</th>
                        <th>Suppression du chapitre</th>  <!-- Actions column -->
                    </tr>
                </thead>
                ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 40
                echo "                <tr>
                    <td><a class=\"articleTitle\" href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["article"], "title", array()), 20), "html", null, true);
                echo "</a></td>
                    <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["article"], "content", array()), 60), "html", null, true);
                echo "</td>
                    <td>
                        <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_edit", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info btn-xs\" title=\"Editer le chapitre\"><span class=\"glyphicon glyphicon-edit\"></span></a>
\t\t\t\t\t</td>
                    <td>    
                        <button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Supprimer le chapitre\" data-toggle=\"modal\" data-target=\"#articleDialog";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\"></span>
                        </button>
                        <div class=\"modal fade\" id=\"articleDialog";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation nécessaire</h4>
                                    </div>
                                    <div class=\"modal-body\">
                                        Souhaitez-vous vraiment supprimer ce chapitre ?
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                        <a href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_delete", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">Confirmer</a>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "            </table>
        </div>
        ";
        } else {
            // line 72
            echo "        <div class=\"alert alert-warning\">Aucun chapitre trouvé.</div>
        ";
        }
        // line 74
        echo "        <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_add");
        echo "\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter un chapitre </button></a>
    </div>
\t
<!-- Onglet Commentaires -->
    
<!-- Onglet Utilisateurs -->
  
<!-- Onglet Signalements -->

<!-- Onglet Signalements -->
\t<div class=\"tab-pane fade adminTable\" id=\"signalements\">
        <!-- TODO Insérer ici le code de gestion des signalements -->
 ";
        // line 86
        if ((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments"))) {
            // line 87
            echo "\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-hover table-condensed\">
\t\t\t   <thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Titre du</br>chapitre</th>
\t\t\t\t\t\t<th>Auteur du</br>commentaire</th>
\t\t\t\t\t\t<th>Texte du</br>commentaire</th>
\t\t\t\t\t\t<th>Nombre de</br>signalements</th>
\t\t\t\t\t\t<th>Editer</br>commentaire</th>
\t\t\t\t\t\t<th>Supprimer</br>commentaire</th>
\t\t\t\t\t\t<th>R-A-Z</br>signalements</th>  <!-- Actions column -->
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 101
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td><a class=\"articleTitle\" href=\"";
                // line 102
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article", array("id" => $this->getAttribute($this->getAttribute($context["comment"], "article", array()), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "article", array()), "title", array()), 20), "html", null, true);
                echo "</a></td>
\t\t\t\t\t<td>";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "author", array()), "username", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 104
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["comment"], "content", array()), 30), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "signal", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_comment_edit", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info btn-xs\" title=\"Editer\"><span class=\"glyphicon glyphicon-edit\"></span></a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Supprimer\" data-toggle=\"modal\" data-target=\"#commentDialog";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"modal fade\" id=\"commentDialog";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation nécessaire</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\tSouhaitez-vous vraiment effacer ce commentaire ?
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 125
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_comment_delete", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">Confirmez</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div><!-- /.modal-content -->
\t\t\t\t\t\t\t</div><!-- /.modal-dialog -->
\t\t\t\t\t\t</div><!-- /.modal -->
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t<!-- gestion remise à zero compteur début -->\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-xs\" title=\"Remise à zéro compteur\" data-toggle=\"modal\" data-target=\"#commentDialogRAZ";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"modal fade\" id=\"commentDialogRAZ";
                // line 137
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation nécessaire</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\tSouhaitez-vous vraiment remettre à zéro le compteur de signalements de ce commentaire ?
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 149
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_comment_resetSig", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">Confirmer</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div><!-- /.modal-content -->
\t\t\t\t\t\t\t</div><!-- /.modal-dialog -->
\t\t\t\t\t\t</div><!-- /.modal -->
\t\t\t\t\t</td>
\t\t\t\t
\t\t\t<!-- gestion remise à zero compteur fin -->\t\t\t\t\t
\t\t
\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo "\t\t\t</table>
\t\t</div>
        ";
        } else {
            // line 163
            echo "        <div class=\"alert alert-warning\">No comments found.</div>
        ";
        }
        // line 164
        echo "       
    </div>

<!-- fin des Onglets -->
</div>
";
    }

    public function getTemplateName()
    {
        return "admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 164,  301 => 163,  296 => 160,  279 => 149,  264 => 137,  258 => 134,  246 => 125,  231 => 113,  225 => 110,  219 => 107,  214 => 105,  210 => 104,  206 => 103,  200 => 102,  197 => 101,  193 => 100,  178 => 87,  176 => 86,  160 => 74,  156 => 72,  151 => 69,  137 => 61,  122 => 49,  117 => 47,  111 => 44,  106 => 42,  100 => 41,  97 => 40,  93 => 39,  81 => 29,  79 => 28,  63 => 14,  54 => 11,  51 => 10,  47 => 9,  41 => 7,  38 => 6,  32 => 4,  28 => 1,  26 => 2,  11 => 1,);
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
{% set adminMenu = true %}

{% block title %}Administration{% endblock %}

{% block content %}
\t<h2 class=\"text-center\">{{ block('title') }}</h2>

{% for flashMessage in app.session.flashbag.get('success') %}
\t<div class=\"alert alert-success\">
\t\t{{ flashMessage }}
\t</div>
{% endfor %}

<div class=\"row\">
    <div class=\"col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3\">
        <ul class=\"nav nav-tabs nav-justified\">
            <li class=\"active\"><a href=\"#articles\" data-toggle=\"tab\">Chapitres</a></li>
            <li><a href=\"#comments\" data-toggle=\"tab\">Commentaires</a></li>
            <li><a href=\"#users\" data-toggle=\"tab\">Utilisateurs</a></li>
\t\t\t<li><a href=\"#signalements\" data-toggle=\"tab\">Signalements</a></li>
        </ul>
    </div>
</div>
<!-- Onglet Chapitres -->
<div class=\"tab-content\">
    <div class=\"tab-pane fade in active adminTable\" id=\"articles\">
        {% if articles %}
        <div class=\"table-responsive\">
            <table class=\"table table-hover table-condensed\">
                <thead>
                    <tr>
                        <th>Titre du chapitre</th>
                        <th>Texte du chapitre</th>
                        <th>Edition du chapitre</th>
                        <th>Suppression du chapitre</th>  <!-- Actions column -->
                    </tr>
                </thead>
                {% for article in articles %}
                <tr>
                    <td><a class=\"articleTitle\" href=\"{{ path('article', { 'id': article.id }) }}\">{{ article.title | truncate(20)}}</a></td>
                    <td>{{ article.content | truncate(60) }}</td>
                    <td>
                        <a href=\"{{ path('admin_article_edit', { 'id': article.id }) }}\" class=\"btn btn-info btn-xs\" title=\"Editer le chapitre\"><span class=\"glyphicon glyphicon-edit\"></span></a>
\t\t\t\t\t</td>
                    <td>    
                        <button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Supprimer le chapitre\" data-toggle=\"modal\" data-target=\"#articleDialog{{ article.id }}\"><span class=\"glyphicon glyphicon-remove\"></span>
                        </button>
                        <div class=\"modal fade\" id=\"articleDialog{{ article.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation nécessaire</h4>
                                    </div>
                                    <div class=\"modal-body\">
                                        Souhaitez-vous vraiment supprimer ce chapitre ?
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                        <a href=\"{{ path('admin_article_delete', { 'id': article.id }) }}\" class=\"btn btn-danger\">Confirmer</a>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </td>
                </tr>
                {% endfor %}
            </table>
        </div>
        {% else %}
        <div class=\"alert alert-warning\">Aucun chapitre trouvé.</div>
        {% endif %}
        <a href=\"{{ path('admin_article_add') }}\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter un chapitre </button></a>
    </div>
\t
<!-- Onglet Commentaires -->
    
<!-- Onglet Utilisateurs -->
  
<!-- Onglet Signalements -->

<!-- Onglet Signalements -->
\t<div class=\"tab-pane fade adminTable\" id=\"signalements\">
        <!-- TODO Insérer ici le code de gestion des signalements -->
 {% if comments %}
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-hover table-condensed\">
\t\t\t   <thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Titre du</br>chapitre</th>
\t\t\t\t\t\t<th>Auteur du</br>commentaire</th>
\t\t\t\t\t\t<th>Texte du</br>commentaire</th>
\t\t\t\t\t\t<th>Nombre de</br>signalements</th>
\t\t\t\t\t\t<th>Editer</br>commentaire</th>
\t\t\t\t\t\t<th>Supprimer</br>commentaire</th>
\t\t\t\t\t\t<th>R-A-Z</br>signalements</th>  <!-- Actions column -->
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t{% for comment in comments %}
\t\t\t\t<tr>
\t\t\t\t\t<td><a class=\"articleTitle\" href=\"{{ path('article', { 'id': comment.article.id }) }}\">{{ comment.article.title | truncate(20) }}</a></td>
\t\t\t\t\t<td>{{ comment.author.username }}</td>
\t\t\t\t\t<td>{{ comment.content | truncate(30) }}</td>
\t\t\t\t\t<td>{{ comment.signal }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ path('admin_comment_edit', { 'id':comment.id}) }}\" class=\"btn btn-info btn-xs\" title=\"Editer\"><span class=\"glyphicon glyphicon-edit\"></span></a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Supprimer\" data-toggle=\"modal\" data-target=\"#commentDialog{{ comment.id }}\"><span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"modal fade\" id=\"commentDialog{{ comment.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation nécessaire</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\tSouhaitez-vous vraiment effacer ce commentaire ?
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('admin_comment_delete', { 'id': comment.id }) }}\" class=\"btn btn-danger\">Confirmez</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div><!-- /.modal-content -->
\t\t\t\t\t\t\t</div><!-- /.modal-dialog -->
\t\t\t\t\t\t</div><!-- /.modal -->
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t<!-- gestion remise à zero compteur début -->\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-xs\" title=\"Remise à zéro compteur\" data-toggle=\"modal\" data-target=\"#commentDialogRAZ{{ comment.id }}\"><span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"modal fade\" id=\"commentDialogRAZ{{ comment.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation nécessaire</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\tSouhaitez-vous vraiment remettre à zéro le compteur de signalements de ce commentaire ?
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('admin_comment_resetSig', { 'id': comment.id }) }}\" class=\"btn btn-danger\">Confirmer</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div><!-- /.modal-content -->
\t\t\t\t\t\t\t</div><!-- /.modal-dialog -->
\t\t\t\t\t\t</div><!-- /.modal -->
\t\t\t\t\t</td>
\t\t\t\t
\t\t\t<!-- gestion remise à zero compteur fin -->\t\t\t\t\t
\t\t
\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</table>
\t\t</div>
        {% else %}
        <div class=\"alert alert-warning\">No comments found.</div>
        {% endif %}       
    </div>

<!-- fin des Onglets -->
</div>
{% endblock %}", "admin.html.twig", "F:\\WEB_FACTORY_C\\MicroCMS\\views\\admin.html.twig");
    }
}
