<?php

/* agendamento/index.html.twig */
class __TwigTemplate_c23040a14ed0ac5d7ecefc4859b815632850b17aba811607b3fb25ab3aa70c21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "agendamento/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eab70c3d225610698865492b6326664e2c025037ba0a2a5b3e748d038e971c12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eab70c3d225610698865492b6326664e2c025037ba0a2a5b3e748d038e971c12->enter($__internal_eab70c3d225610698865492b6326664e2c025037ba0a2a5b3e748d038e971c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agendamento/index.html.twig"));

        $__internal_86cce368373f1a287a7ad9a2af5df7679756acf67189e73d6a22e3324073d5e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86cce368373f1a287a7ad9a2af5df7679756acf67189e73d6a22e3324073d5e1->enter($__internal_86cce368373f1a287a7ad9a2af5df7679756acf67189e73d6a22e3324073d5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agendamento/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eab70c3d225610698865492b6326664e2c025037ba0a2a5b3e748d038e971c12->leave($__internal_eab70c3d225610698865492b6326664e2c025037ba0a2a5b3e748d038e971c12_prof);

        
        $__internal_86cce368373f1a287a7ad9a2af5df7679756acf67189e73d6a22e3324073d5e1->leave($__internal_86cce368373f1a287a7ad9a2af5df7679756acf67189e73d6a22e3324073d5e1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3885c55e02407a16940ac869695d191736349cba56145b6258af9cec62c56fda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3885c55e02407a16940ac869695d191736349cba56145b6258af9cec62c56fda->enter($__internal_3885c55e02407a16940ac869695d191736349cba56145b6258af9cec62c56fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_307e6ad864a949ef215a490f9895523c2bf744e1388a6828f786af0bac043ed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_307e6ad864a949ef215a490f9895523c2bf744e1388a6828f786af0bac043ed3->enter($__internal_307e6ad864a949ef215a490f9895523c2bf744e1388a6828f786af0bac043ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "
    ";
        // line 8
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "
    <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agendamento_new");
        echo "\" class=\"btn btn-primary float-right\">Criar novo agendamento</a>
    <h1>Agendamentos</h1>

    <div class=\"card\">
        <div class=\"card-header\">Filtar por</div>
        <div class=\"card-body\">
            <div class=\"dropdown\">
                <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Status
                </button>
                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                    <a class=\"dropdown-item\" href=\"?status=NOVO\">Novo</a>
                    <a class=\"dropdown-item\" href=\"?status=CONFIRMADO\">Confirmado</a>
                    <a class=\"dropdown-item\" href=\"?status=CANCELADO\">Cancelado</a>
                    <a class=\"dropdown-item\" href=\"?status=REALIZADO\">Realizado</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <input type=\"text\" id=\"datasel\" class=\"form-control\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["data"] ?? $this->getContext($context, "data")), "d/m/Y"), "html", null, true);
        echo "\" />
        </div>
    </div>

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
            ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["agendamentos"] ?? $this->getContext($context, "agendamentos")));
        foreach ($context['_seq'] as $context["_key"] => $context["agendamento"]) {
            // line 58
            echo "                <tr>
                    <td><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agendamento_show", array("id" => $this->getAttribute($context["agendamento"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["agendamento"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 60
            if ($this->getAttribute($context["agendamento"], "horario", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["agendamento"], "horario", array()), "d/m/Y H:i"), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["agendamento"], "cliente", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["agendamento"], "servico", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agendamento_show", array("id" => $this->getAttribute($context["agendamento"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info\">Exibir</a>
                        <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agendamento_edit", array("id" => $this->getAttribute($context["agendamento"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Editar</a>

                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agendamento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        </tbody>
    </table>

";
        
        $__internal_307e6ad864a949ef215a490f9895523c2bf744e1388a6828f786af0bac043ed3->leave($__internal_307e6ad864a949ef215a490f9895523c2bf744e1388a6828f786af0bac043ed3_prof);

        
        $__internal_3885c55e02407a16940ac869695d191736349cba56145b6258af9cec62c56fda->leave($__internal_3885c55e02407a16940ac869695d191736349cba56145b6258af9cec62c56fda_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_21abe6f44db1c03b803cbfb949da91c6f9772532eea1ea69836222703e225e97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21abe6f44db1c03b803cbfb949da91c6f9772532eea1ea69836222703e225e97->enter($__internal_21abe6f44db1c03b803cbfb949da91c6f9772532eea1ea69836222703e225e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7961131bab9bdde41d446b43d71914bf1f8bb3a0bd6823f142daccf37a6848da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7961131bab9bdde41d446b43d71914bf1f8bb3a0bd6823f142daccf37a6848da->enter($__internal_7961131bab9bdde41d446b43d71914bf1f8bb3a0bd6823f142daccf37a6848da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "        <link href=\"/css/bootstrap-datepicker.css\" rel=\"stylesheet\" type=\"text/css\"/>
    ";
        
        $__internal_7961131bab9bdde41d446b43d71914bf1f8bb3a0bd6823f142daccf37a6848da->leave($__internal_7961131bab9bdde41d446b43d71914bf1f8bb3a0bd6823f142daccf37a6848da_prof);

        
        $__internal_21abe6f44db1c03b803cbfb949da91c6f9772532eea1ea69836222703e225e97->leave($__internal_21abe6f44db1c03b803cbfb949da91c6f9772532eea1ea69836222703e225e97_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a74e3c8a3fb1f39cd5301a8068d2040e52e3c1ded89a90343d323f287bcf3a88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a74e3c8a3fb1f39cd5301a8068d2040e52e3c1ded89a90343d323f287bcf3a88->enter($__internal_a74e3c8a3fb1f39cd5301a8068d2040e52e3c1ded89a90343d323f287bcf3a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0aeba74ceac42c9f594b55dcd87993780fb6300d20fab21ad920698c9c596ce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aeba74ceac42c9f594b55dcd87993780fb6300d20fab21ad920698c9c596ce9->enter($__internal_0aeba74ceac42c9f594b55dcd87993780fb6300d20fab21ad920698c9c596ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo "        <script src=\"/js/bootstrap-datepicker.js\" type=\"text/javascript\"></script>
        <script src=\"/locales/bootstrap-datepicker.pt-BR.min.js\" type=\"text/javascript\"></script>
        <script type=\"text/javascript\">
            \$('#datasel').datepicker({
                format: \"dd/mm/yyyy\",
                language: \"pt-BR\",
                todayBtn: true,
                clearBtn: true
            }).on('changeDate', function(e){
                location.href = '?data=' + \$(this).val();
            });
        </script>
    ";
        
        $__internal_0aeba74ceac42c9f594b55dcd87993780fb6300d20fab21ad920698c9c596ce9->leave($__internal_0aeba74ceac42c9f594b55dcd87993780fb6300d20fab21ad920698c9c596ce9_prof);

        
        $__internal_a74e3c8a3fb1f39cd5301a8068d2040e52e3c1ded89a90343d323f287bcf3a88->leave($__internal_a74e3c8a3fb1f39cd5301a8068d2040e52e3c1ded89a90343d323f287bcf3a88_prof);

    }

    public function getTemplateName()
    {
        return "agendamento/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 9,  178 => 8,  167 => 5,  158 => 4,  145 => 70,  134 => 65,  130 => 64,  125 => 62,  121 => 61,  115 => 60,  109 => 59,  106 => 58,  102 => 57,  84 => 42,  62 => 23,  59 => 22,  57 => 8,  54 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
    {% block stylesheets %}
        <link href=\"/css/bootstrap-datepicker.css\" rel=\"stylesheet\" type=\"text/css\"/>
    {% endblock %}

    {% block javascripts %}
        <script src=\"/js/bootstrap-datepicker.js\" type=\"text/javascript\"></script>
        <script src=\"/locales/bootstrap-datepicker.pt-BR.min.js\" type=\"text/javascript\"></script>
        <script type=\"text/javascript\">
            \$('#datasel').datepicker({
                format: \"dd/mm/yyyy\",
                language: \"pt-BR\",
                todayBtn: true,
                clearBtn: true
            }).on('changeDate', function(e){
                location.href = '?data=' + \$(this).val();
            });
        </script>
    {% endblock %}

    <a href=\"{{ path('agendamento_new') }}\" class=\"btn btn-primary float-right\">Criar novo agendamento</a>
    <h1>Agendamentos</h1>

    <div class=\"card\">
        <div class=\"card-header\">Filtar por</div>
        <div class=\"card-body\">
            <div class=\"dropdown\">
                <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Status
                </button>
                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                    <a class=\"dropdown-item\" href=\"?status=NOVO\">Novo</a>
                    <a class=\"dropdown-item\" href=\"?status=CONFIRMADO\">Confirmado</a>
                    <a class=\"dropdown-item\" href=\"?status=CANCELADO\">Cancelado</a>
                    <a class=\"dropdown-item\" href=\"?status=REALIZADO\">Realizado</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <input type=\"text\" id=\"datasel\" class=\"form-control\" value=\"{{ data|date('d/m/Y') }}\" />
        </div>
    </div>

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
            {% for agendamento in agendamentos %}
                <tr>
                    <td><a href=\"{{ path('agendamento_show', { 'id': agendamento.id }) }}\">{{ agendamento.id }}</a></td>
                    <td>{% if agendamento.horario %}{{ agendamento.horario|date('d/m/Y H:i') }}{% endif %}</td>
                    <td>{{ agendamento.cliente }}</td>
                    <td>{{ agendamento.servico }}</td>
                    <td>
                        <a href=\"{{ path('agendamento_show', { 'id': agendamento.id }) }}\" class=\"btn btn-info\">Exibir</a>
                        <a href=\"{{ path('agendamento_edit', { 'id': agendamento.id }) }}\" class=\"btn btn-primary\">Editar</a>

                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

{% endblock %}
", "agendamento/index.html.twig", "/home/aluno/matheus-php2/sysvet/app/Resources/views/agendamento/index.html.twig");
    }
}
