<?php

/* cliente/show.html.twig */
class __TwigTemplate_928337d402eeba85b316395550c0685267f03e5782877b71ba0ac972e35996b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cliente/show.html.twig", 1);
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
        $__internal_8c679d4a862e19bbb8de004ab56bd9c2100bc0a56576470f70146fbd847026dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c679d4a862e19bbb8de004ab56bd9c2100bc0a56576470f70146fbd847026dd->enter($__internal_8c679d4a862e19bbb8de004ab56bd9c2100bc0a56576470f70146fbd847026dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/show.html.twig"));

        $__internal_bae3f9514de287787d6089dc550fe9d9a9dd727423cfa5587cdd39a5c7ca2ac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae3f9514de287787d6089dc550fe9d9a9dd727423cfa5587cdd39a5c7ca2ac0->enter($__internal_bae3f9514de287787d6089dc550fe9d9a9dd727423cfa5587cdd39a5c7ca2ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c679d4a862e19bbb8de004ab56bd9c2100bc0a56576470f70146fbd847026dd->leave($__internal_8c679d4a862e19bbb8de004ab56bd9c2100bc0a56576470f70146fbd847026dd_prof);

        
        $__internal_bae3f9514de287787d6089dc550fe9d9a9dd727423cfa5587cdd39a5c7ca2ac0->leave($__internal_bae3f9514de287787d6089dc550fe9d9a9dd727423cfa5587cdd39a5c7ca2ac0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eda0758f08d296e3fabdb1743f66209e135881baaadd9a66e8aab7f0cf9a965e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eda0758f08d296e3fabdb1743f66209e135881baaadd9a66e8aab7f0cf9a965e->enter($__internal_eda0758f08d296e3fabdb1743f66209e135881baaadd9a66e8aab7f0cf9a965e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e51054011d25ad5a4ad478edee0dc76ad5a233839e965e0cf50d90aef4d4fe0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e51054011d25ad5a4ad478edee0dc76ad5a233839e965e0cf50d90aef4d4fe0c->enter($__internal_e51054011d25ad5a4ad478edee0dc76ad5a233839e965e0cf50d90aef4d4fe0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Cliente</h1>
    <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_index");
        echo "\"><< Voltar para a lista</a>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cliente"] ?? $this->getContext($context, "cliente")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nome</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cliente"] ?? $this->getContext($context, "cliente")), "nome", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cliente"] ?? $this->getContext($context, "cliente")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telefone</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cliente"] ?? $this->getContext($context, "cliente")), "telefone", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Documento</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cliente"] ?? $this->getContext($context, "cliente")), "documento", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datacadastro</th>
                <td>";
        // line 31
        if ($this->getAttribute(($context["cliente"] ?? $this->getContext($context, "cliente")), "dataCadastro", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["cliente"] ?? $this->getContext($context, "cliente")), "dataCadastro", array()), "d/m/Y H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_edit", array("id" => $this->getAttribute(($context["cliente"] ?? $this->getContext($context, "cliente")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary float-left\">Editar</a>
    ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input type=\"submit\" value=\"Deletar\" class=\"btn btn-danger\">
    ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
";
        
        $__internal_e51054011d25ad5a4ad478edee0dc76ad5a233839e965e0cf50d90aef4d4fe0c->leave($__internal_e51054011d25ad5a4ad478edee0dc76ad5a233839e965e0cf50d90aef4d4fe0c_prof);

        
        $__internal_eda0758f08d296e3fabdb1743f66209e135881baaadd9a66e8aab7f0cf9a965e->leave($__internal_eda0758f08d296e3fabdb1743f66209e135881baaadd9a66e8aab7f0cf9a965e_prof);

    }

    public function getTemplateName()
    {
        return "cliente/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 39,  110 => 37,  106 => 36,  96 => 31,  89 => 27,  82 => 23,  75 => 19,  68 => 15,  61 => 11,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Cliente</h1>
    <a href=\"{{ path('cliente_index') }}\"><< Voltar para a lista</a>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ cliente.id }}</td>
            </tr>
            <tr>
                <th>Nome</th>
                <td>{{ cliente.nome }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ cliente.email }}</td>
            </tr>
            <tr>
                <th>Telefone</th>
                <td>{{ cliente.telefone }}</td>
            </tr>
            <tr>
                <th>Documento</th>
                <td>{{ cliente.documento }}</td>
            </tr>
            <tr>
                <th>Datacadastro</th>
                <td>{% if cliente.dataCadastro %}{{ cliente.dataCadastro|date('d/m/Y H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('cliente_edit', { 'id': cliente.id }) }}\" class=\"btn btn-primary float-left\">Editar</a>
    {{ form_start(delete_form) }}
        <input type=\"submit\" value=\"Deletar\" class=\"btn btn-danger\">
    {{ form_end(delete_form) }}
{% endblock %}
", "cliente/show.html.twig", "/home/aluno/matheus-php2/sysvet/app/Resources/views/cliente/show.html.twig");
    }
}
