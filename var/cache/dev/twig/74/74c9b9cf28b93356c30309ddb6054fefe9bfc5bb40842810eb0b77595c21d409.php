<?php

/* servico/index.html.twig */
class __TwigTemplate_e40e61938a2954b82e1ccd8b2bd0ee3c7393384071e3eb675c60622d428501f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "servico/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f52eefe4f8fd49fcb92c3c57a34c1b50182103453a1f436869850006505688e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f52eefe4f8fd49fcb92c3c57a34c1b50182103453a1f436869850006505688e->enter($__internal_3f52eefe4f8fd49fcb92c3c57a34c1b50182103453a1f436869850006505688e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "servico/index.html.twig"));

        $__internal_56f0b262aeb21afc5ffc5d4b4b60f204b753273e41c03383e07a26ea54d3dd08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56f0b262aeb21afc5ffc5d4b4b60f204b753273e41c03383e07a26ea54d3dd08->enter($__internal_56f0b262aeb21afc5ffc5d4b4b60f204b753273e41c03383e07a26ea54d3dd08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "servico/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f52eefe4f8fd49fcb92c3c57a34c1b50182103453a1f436869850006505688e->leave($__internal_3f52eefe4f8fd49fcb92c3c57a34c1b50182103453a1f436869850006505688e_prof);

        
        $__internal_56f0b262aeb21afc5ffc5d4b4b60f204b753273e41c03383e07a26ea54d3dd08->leave($__internal_56f0b262aeb21afc5ffc5d4b4b60f204b753273e41c03383e07a26ea54d3dd08_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_44ba1ea77933a70a57e1704c9ecac631f647b9843b4d7d2fe4b1ead495f77a51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44ba1ea77933a70a57e1704c9ecac631f647b9843b4d7d2fe4b1ead495f77a51->enter($__internal_44ba1ea77933a70a57e1704c9ecac631f647b9843b4d7d2fe4b1ead495f77a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_889db98af65f43d85c8cb44bdf9a900cd4a543db93a00defd76ac3736eaebf1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_889db98af65f43d85c8cb44bdf9a900cd4a543db93a00defd76ac3736eaebf1e->enter($__internal_889db98af65f43d85c8cb44bdf9a900cd4a543db93a00defd76ac3736eaebf1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "      <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("servico_new");
        echo "\" class=\"btn btn-primary float-right\">Criar novo serviço</a>
    <h1>Servicos list</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th><a href=\"?ord=id\" ";
        // line 10
        if ((($context["ord"] ?? $this->getContext($context, "ord")) == "id")) {
            echo " class=\"text-dark\" ";
        }
        echo ">ID</a></th>
                <th><a href=\"?ord=nome\" ";
        // line 11
        if ((($context["ord"] ?? $this->getContext($context, "ord")) == "nome")) {
            echo " class=\"text-dark\" ";
        }
        echo ">Nome</a></th>
                <th><a href=\"?ord=descricao\" ";
        // line 12
        if ((($context["ord"] ?? $this->getContext($context, "ord")) == "descricao")) {
            echo " class=\"text-dark\" ";
        }
        echo ">Descrição</a></th>
                <th><a href=\"?ord=preco\" ";
        // line 13
        if ((($context["ord"] ?? $this->getContext($context, "ord")) == "preco")) {
            echo " class=\"text-dark\" ";
        }
        echo ">Preço</a></th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["servicos"] ?? $this->getContext($context, "servicos")));
        foreach ($context['_seq'] as $context["_key"] => $context["servico"]) {
            // line 19
            echo "                <tr>
                    <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("servico_show", array("id" => $this->getAttribute($context["servico"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["servico"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["servico"], "nome", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["servico"], "descricao", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["servico"], "preco", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("servico_show", array("id" => $this->getAttribute($context["servico"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info\">Exibir</a>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("servico_edit", array("id" => $this->getAttribute($context["servico"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Editar</a>

                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['servico'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>
";
        
        $__internal_889db98af65f43d85c8cb44bdf9a900cd4a543db93a00defd76ac3736eaebf1e->leave($__internal_889db98af65f43d85c8cb44bdf9a900cd4a543db93a00defd76ac3736eaebf1e_prof);

        
        $__internal_44ba1ea77933a70a57e1704c9ecac631f647b9843b4d7d2fe4b1ead495f77a51->leave($__internal_44ba1ea77933a70a57e1704c9ecac631f647b9843b4d7d2fe4b1ead495f77a51_prof);

    }

    public function getTemplateName()
    {
        return "servico/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 31,  117 => 26,  113 => 25,  108 => 23,  104 => 22,  100 => 21,  94 => 20,  91 => 19,  87 => 18,  77 => 13,  71 => 12,  65 => 11,  59 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
      <a href=\"{{ path('servico_new') }}\" class=\"btn btn-primary float-right\">Criar novo serviço</a>
    <h1>Servicos list</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th><a href=\"?ord=id\" {% if ord == 'id' %} class=\"text-dark\" {% endif %}>ID</a></th>
                <th><a href=\"?ord=nome\" {% if ord == 'nome' %} class=\"text-dark\" {% endif %}>Nome</a></th>
                <th><a href=\"?ord=descricao\" {% if ord == 'descricao' %} class=\"text-dark\" {% endif %}>Descrição</a></th>
                <th><a href=\"?ord=preco\" {% if ord == 'preco' %} class=\"text-dark\" {% endif %}>Preço</a></th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            {% for servico in servicos %}
                <tr>
                    <td><a href=\"{{ path('servico_show', { 'id': servico.id }) }}\">{{ servico.id }}</a></td>
                    <td>{{ servico.nome }}</td>
                    <td>{{ servico.descricao }}</td>
                    <td>{{ servico.preco }}</td>
                    <td>
                        <a href=\"{{ path('servico_show', { 'id': servico.id }) }}\" class=\"btn btn-info\">Exibir</a>
                        <a href=\"{{ path('servico_edit', { 'id': servico.id }) }}\" class=\"btn btn-primary\">Editar</a>

                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}", "servico/index.html.twig", "/home/aluno/matheus-php2/sysvet/app/Resources/views/servico/index.html.twig");
    }
}
