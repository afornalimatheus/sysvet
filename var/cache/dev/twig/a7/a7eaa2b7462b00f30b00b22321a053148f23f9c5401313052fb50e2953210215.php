<?php

/* cliente/index.html.twig */
class __TwigTemplate_0910d371e048d479d10a6515cc16e44e647700b82ed24b9b1763e559f5d13d09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cliente/index.html.twig", 1);
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
        $__internal_fe32ff913caad79d90795e388c94f246769d4acf617887e77e35a89bce2f9510 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe32ff913caad79d90795e388c94f246769d4acf617887e77e35a89bce2f9510->enter($__internal_fe32ff913caad79d90795e388c94f246769d4acf617887e77e35a89bce2f9510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/index.html.twig"));

        $__internal_e4cb588abd361452e61dfcc490a1eacabb5e43054338f9e27cd8805ebe58cc1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4cb588abd361452e61dfcc490a1eacabb5e43054338f9e27cd8805ebe58cc1d->enter($__internal_e4cb588abd361452e61dfcc490a1eacabb5e43054338f9e27cd8805ebe58cc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe32ff913caad79d90795e388c94f246769d4acf617887e77e35a89bce2f9510->leave($__internal_fe32ff913caad79d90795e388c94f246769d4acf617887e77e35a89bce2f9510_prof);

        
        $__internal_e4cb588abd361452e61dfcc490a1eacabb5e43054338f9e27cd8805ebe58cc1d->leave($__internal_e4cb588abd361452e61dfcc490a1eacabb5e43054338f9e27cd8805ebe58cc1d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b55c105c74adf636e131f8d4bf427f6f7c387bbc44c5bb68f4ecb890fbe6ae7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b55c105c74adf636e131f8d4bf427f6f7c387bbc44c5bb68f4ecb890fbe6ae7f->enter($__internal_b55c105c74adf636e131f8d4bf427f6f7c387bbc44c5bb68f4ecb890fbe6ae7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d41dbb6e310806ae41b2d0247823fe6dd81af62f732a788cefa2cdedd7786b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d41dbb6e310806ae41b2d0247823fe6dd81af62f732a788cefa2cdedd7786b5e->enter($__internal_d41dbb6e310806ae41b2d0247823fe6dd81af62f732a788cefa2cdedd7786b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_new");
        echo "\" class=\"btn btn-primary float-right\">Adicionar Cliente</a>
    <h1>Lista de clientes</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Documento</th>
                <th>Data de cadastro</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clientes"] ?? $this->getContext($context, "clientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
            // line 21
            echo "                <tr>
                    <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_show", array("id" => $this->getAttribute($context["cliente"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "nome", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "email", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "telefone", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "documento", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            if ($this->getAttribute($context["cliente"], "dataCadastro", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cliente"], "dataCadastro", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
                    <td>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_show", array("id" => $this->getAttribute($context["cliente"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info\">Exibir</a>
                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_edit", array("id" => $this->getAttribute($context["cliente"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Editar</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>
";
        
        $__internal_d41dbb6e310806ae41b2d0247823fe6dd81af62f732a788cefa2cdedd7786b5e->leave($__internal_d41dbb6e310806ae41b2d0247823fe6dd81af62f732a788cefa2cdedd7786b5e_prof);

        
        $__internal_b55c105c74adf636e131f8d4bf427f6f7c387bbc44c5bb68f4ecb890fbe6ae7f->leave($__internal_b55c105c74adf636e131f8d4bf427f6f7c387bbc44c5bb68f4ecb890fbe6ae7f_prof);

    }

    public function getTemplateName()
    {
        return "cliente/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 34,  109 => 30,  105 => 29,  98 => 27,  94 => 26,  90 => 25,  86 => 24,  82 => 23,  76 => 22,  73 => 21,  69 => 20,  49 => 4,  40 => 3,  11 => 1,);
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
    <a href=\"{{ path('cliente_new') }}\" class=\"btn btn-primary float-right\">Adicionar Cliente</a>
    <h1>Lista de clientes</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Documento</th>
                <th>Data de cadastro</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            {% for cliente in clientes %}
                <tr>
                    <td><a href=\"{{ path('cliente_show', { 'id': cliente.id }) }}\">{{ cliente.id }}</a></td>
                    <td>{{ cliente.nome }}</td>
                    <td>{{ cliente.email }}</td>
                    <td>{{ cliente.telefone }}</td>
                    <td>{{ cliente.documento }}</td>
                    <td>{% if cliente.dataCadastro %}{{ cliente.dataCadastro|date('d/m/Y') }}{% endif %}</td>
                    <td>
                        <a href=\"{{ path('cliente_show', { 'id': cliente.id }) }}\" class=\"btn btn-info\">Exibir</a>
                        <a href=\"{{ path('cliente_edit', { 'id': cliente.id }) }}\" class=\"btn btn-primary\">Editar</a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "cliente/index.html.twig", "/home/aluno/matheus-php2/sysvet/app/Resources/views/cliente/index.html.twig");
    }
}
