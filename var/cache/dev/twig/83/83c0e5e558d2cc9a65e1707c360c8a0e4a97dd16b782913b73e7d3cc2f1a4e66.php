<?php

/* agendamento/show.html.twig */
class __TwigTemplate_e99aa0851cc93025d45cc5a461a50b00f293dd511ee61e7d48e425d3f5467b4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "agendamento/show.html.twig", 1);
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
        $__internal_52826dded0861807aee48db4b5a90a8d86aac5ac451d9270d28e9bf2c41ccf2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52826dded0861807aee48db4b5a90a8d86aac5ac451d9270d28e9bf2c41ccf2f->enter($__internal_52826dded0861807aee48db4b5a90a8d86aac5ac451d9270d28e9bf2c41ccf2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agendamento/show.html.twig"));

        $__internal_dd2c30088a5df2a210e11a04bd449ad3f40dc3dafc5d2c242ee3d885f023f179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd2c30088a5df2a210e11a04bd449ad3f40dc3dafc5d2c242ee3d885f023f179->enter($__internal_dd2c30088a5df2a210e11a04bd449ad3f40dc3dafc5d2c242ee3d885f023f179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agendamento/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52826dded0861807aee48db4b5a90a8d86aac5ac451d9270d28e9bf2c41ccf2f->leave($__internal_52826dded0861807aee48db4b5a90a8d86aac5ac451d9270d28e9bf2c41ccf2f_prof);

        
        $__internal_dd2c30088a5df2a210e11a04bd449ad3f40dc3dafc5d2c242ee3d885f023f179->leave($__internal_dd2c30088a5df2a210e11a04bd449ad3f40dc3dafc5d2c242ee3d885f023f179_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7055ace88ee53c1802e33b0c39ab3786491658e920a934f4f60dde771fdb802 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7055ace88ee53c1802e33b0c39ab3786491658e920a934f4f60dde771fdb802->enter($__internal_a7055ace88ee53c1802e33b0c39ab3786491658e920a934f4f60dde771fdb802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ca2c9faa6ee1a9f6a276995a1fe8fe4a9ecfd0b2e79b746eb9eee8215839cc5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca2c9faa6ee1a9f6a276995a1fe8fe4a9ecfd0b2e79b746eb9eee8215839cc5e->enter($__internal_ca2c9faa6ee1a9f6a276995a1fe8fe4a9ecfd0b2e79b746eb9eee8215839cc5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Agendamento</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>OS</th>
                <th>Horário</th>
                <th>Cliente</th>
                <th>Serviço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["agendamento"] ?? $this->getContext($context, "agendamento")), "id", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 19
        if ($this->getAttribute(($context["agendamento"] ?? $this->getContext($context, "agendamento")), "horario", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["agendamento"] ?? $this->getContext($context, "agendamento")), "horario", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["agendamento"] ?? $this->getContext($context, "agendamento")), "cliente", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["agendamento"] ?? $this->getContext($context, "agendamento")), "servico", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agendamento_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agendamento_edit", array("id" => $this->getAttribute(($context["agendamento"] ?? $this->getContext($context, "agendamento")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <input type=\"submit\" value=\"Delete\">
            ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_ca2c9faa6ee1a9f6a276995a1fe8fe4a9ecfd0b2e79b746eb9eee8215839cc5e->leave($__internal_ca2c9faa6ee1a9f6a276995a1fe8fe4a9ecfd0b2e79b746eb9eee8215839cc5e_prof);

        
        $__internal_a7055ace88ee53c1802e33b0c39ab3786491658e920a934f4f60dde771fdb802->leave($__internal_a7055ace88ee53c1802e33b0c39ab3786491658e920a934f4f60dde771fdb802_prof);

    }

    public function getTemplateName()
    {
        return "agendamento/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 36,  101 => 34,  95 => 31,  89 => 28,  79 => 21,  75 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Agendamento</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>OS</th>
                <th>Horário</th>
                <th>Cliente</th>
                <th>Serviço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ agendamento.id }}</td>
                <td>{% if agendamento.horario %}{{ agendamento.horario|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ agendamento.cliente}}</td>
                <td>{{ agendamento.servico}}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('agendamento_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('agendamento_edit', { 'id': agendamento.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
            <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "agendamento/show.html.twig", "/home/aluno/matheus-php2/sysvet/app/Resources/views/agendamento/show.html.twig");
    }
}
