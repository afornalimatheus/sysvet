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
        $__internal_00ad53084ea16660a09f4e3c9cce070a91775da32a5e4ab716ead662c472104d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00ad53084ea16660a09f4e3c9cce070a91775da32a5e4ab716ead662c472104d->enter($__internal_00ad53084ea16660a09f4e3c9cce070a91775da32a5e4ab716ead662c472104d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/index.html.twig"));

        $__internal_3fef35ff8e3fe5d464ba92b08caa50145522a8fc0e1970a55ca5ef8e9c14d8a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fef35ff8e3fe5d464ba92b08caa50145522a8fc0e1970a55ca5ef8e9c14d8a5->enter($__internal_3fef35ff8e3fe5d464ba92b08caa50145522a8fc0e1970a55ca5ef8e9c14d8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00ad53084ea16660a09f4e3c9cce070a91775da32a5e4ab716ead662c472104d->leave($__internal_00ad53084ea16660a09f4e3c9cce070a91775da32a5e4ab716ead662c472104d_prof);

        
        $__internal_3fef35ff8e3fe5d464ba92b08caa50145522a8fc0e1970a55ca5ef8e9c14d8a5->leave($__internal_3fef35ff8e3fe5d464ba92b08caa50145522a8fc0e1970a55ca5ef8e9c14d8a5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_da46bca5d15e53ad0f16c22ef4dabcb87e6443ae358c3abe08d343c5cc24cfb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da46bca5d15e53ad0f16c22ef4dabcb87e6443ae358c3abe08d343c5cc24cfb5->enter($__internal_da46bca5d15e53ad0f16c22ef4dabcb87e6443ae358c3abe08d343c5cc24cfb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4e92f20e1476de8ab35d0a9fb51fb980602604b524f1c9415ae192c83148746b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e92f20e1476de8ab35d0a9fb51fb980602604b524f1c9415ae192c83148746b->enter($__internal_4e92f20e1476de8ab35d0a9fb51fb980602604b524f1c9415ae192c83148746b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4e92f20e1476de8ab35d0a9fb51fb980602604b524f1c9415ae192c83148746b->leave($__internal_4e92f20e1476de8ab35d0a9fb51fb980602604b524f1c9415ae192c83148746b_prof);

        
        $__internal_da46bca5d15e53ad0f16c22ef4dabcb87e6443ae358c3abe08d343c5cc24cfb5->leave($__internal_da46bca5d15e53ad0f16c22ef4dabcb87e6443ae358c3abe08d343c5cc24cfb5_prof);

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
