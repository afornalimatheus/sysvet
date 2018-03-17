<?php

/* servico/show.html.twig */
class __TwigTemplate_e4ec0bcfe83ca4998cc28c4cbdf51f8f6e5b561eea939c704c88b9e61dcc86cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "servico/show.html.twig", 1);
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
        $__internal_e300c531ec49681819f2d295249ec6c431bf883b0abbec2914611719f1b64ed4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e300c531ec49681819f2d295249ec6c431bf883b0abbec2914611719f1b64ed4->enter($__internal_e300c531ec49681819f2d295249ec6c431bf883b0abbec2914611719f1b64ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "servico/show.html.twig"));

        $__internal_63667f42e4d0d24dd7c640e41382d66f875928052ade424afd5dba73226fe467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63667f42e4d0d24dd7c640e41382d66f875928052ade424afd5dba73226fe467->enter($__internal_63667f42e4d0d24dd7c640e41382d66f875928052ade424afd5dba73226fe467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "servico/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e300c531ec49681819f2d295249ec6c431bf883b0abbec2914611719f1b64ed4->leave($__internal_e300c531ec49681819f2d295249ec6c431bf883b0abbec2914611719f1b64ed4_prof);

        
        $__internal_63667f42e4d0d24dd7c640e41382d66f875928052ade424afd5dba73226fe467->leave($__internal_63667f42e4d0d24dd7c640e41382d66f875928052ade424afd5dba73226fe467_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c947f179ba0244f1a5f0c9bf59b66f896db7684935b9d297cd92244e306de7ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c947f179ba0244f1a5f0c9bf59b66f896db7684935b9d297cd92244e306de7ba->enter($__internal_c947f179ba0244f1a5f0c9bf59b66f896db7684935b9d297cd92244e306de7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eaa4f3e0cf71c84bc5a003f2b68b6779b054a0462745e965ddfcbed86ca86eb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaa4f3e0cf71c84bc5a003f2b68b6779b054a0462745e965ddfcbed86ca86eb9->enter($__internal_eaa4f3e0cf71c84bc5a003f2b68b6779b054a0462745e965ddfcbed86ca86eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Servico</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["servico"] ?? $this->getContext($context, "servico")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nome</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["servico"] ?? $this->getContext($context, "servico")), "nome", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descricao</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["servico"] ?? $this->getContext($context, "servico")), "descricao", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Preco</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["servico"] ?? $this->getContext($context, "servico")), "preco", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("servico_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("servico_edit", array("id" => $this->getAttribute(($context["servico"] ?? $this->getContext($context, "servico")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_eaa4f3e0cf71c84bc5a003f2b68b6779b054a0462745e965ddfcbed86ca86eb9->leave($__internal_eaa4f3e0cf71c84bc5a003f2b68b6779b054a0462745e965ddfcbed86ca86eb9_prof);

        
        $__internal_c947f179ba0244f1a5f0c9bf59b66f896db7684935b9d297cd92244e306de7ba->leave($__internal_c947f179ba0244f1a5f0c9bf59b66f896db7684935b9d297cd92244e306de7ba_prof);

    }

    public function getTemplateName()
    {
        return "servico/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  100 => 35,  94 => 32,  88 => 29,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Servico</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ servico.id }}</td>
            </tr>
            <tr>
                <th>Nome</th>
                <td>{{ servico.nome }}</td>
            </tr>
            <tr>
                <th>Descricao</th>
                <td>{{ servico.descricao }}</td>
            </tr>
            <tr>
                <th>Preco</th>
                <td>{{ servico.preco }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('servico_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('servico_edit', { 'id': servico.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}", "servico/show.html.twig", "/home/aluno/matheus-php2/sysvet/app/Resources/views/servico/show.html.twig");
    }
}
