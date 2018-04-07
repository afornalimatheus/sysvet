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
        $__internal_9a5c410b5d6bd38a6678a5abb467ebcd46a338db96d4eb6e298e076357b3c0e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a5c410b5d6bd38a6678a5abb467ebcd46a338db96d4eb6e298e076357b3c0e4->enter($__internal_9a5c410b5d6bd38a6678a5abb467ebcd46a338db96d4eb6e298e076357b3c0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agendamento/index.html.twig"));

        $__internal_b30025135ba86b476e9dc610826a16d60ba3fbf094430310c5049a7f2d615ceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b30025135ba86b476e9dc610826a16d60ba3fbf094430310c5049a7f2d615ceb->enter($__internal_b30025135ba86b476e9dc610826a16d60ba3fbf094430310c5049a7f2d615ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agendamento/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a5c410b5d6bd38a6678a5abb467ebcd46a338db96d4eb6e298e076357b3c0e4->leave($__internal_9a5c410b5d6bd38a6678a5abb467ebcd46a338db96d4eb6e298e076357b3c0e4_prof);

        
        $__internal_b30025135ba86b476e9dc610826a16d60ba3fbf094430310c5049a7f2d615ceb->leave($__internal_b30025135ba86b476e9dc610826a16d60ba3fbf094430310c5049a7f2d615ceb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_26f7f66570c0e7e6f0a8bacb8b1ef3ebfd893a36d1f435b30608b6e8b0a88767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26f7f66570c0e7e6f0a8bacb8b1ef3ebfd893a36d1f435b30608b6e8b0a88767->enter($__internal_26f7f66570c0e7e6f0a8bacb8b1ef3ebfd893a36d1f435b30608b6e8b0a88767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_26c280ae090f939fc9cc9c7d81de2477625c403a8f39e855dfd97f75daf59259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26c280ae090f939fc9cc9c7d81de2477625c403a8f39e855dfd97f75daf59259->enter($__internal_26c280ae090f939fc9cc9c7d81de2477625c403a8f39e855dfd97f75daf59259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <th>Responsável</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["agendamentos"] ?? $this->getContext($context, "agendamentos")));
        foreach ($context['_seq'] as $context["_key"] => $context["agendamento"]) {
            // line 59
            echo "                <tr>
                    <td><a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agendamento_show", array("id" => $this->getAttribute($context["agendamento"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["agendamento"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 61
            if ($this->getAttribute($context["agendamento"], "horario", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["agendamento"], "horario", array()), "d/m/Y H:i"), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["agendamento"], "cliente", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["agendamento"], "servico", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["agendamento"], "usuario", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agendamento_show", array("id" => $this->getAttribute($context["agendamento"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info\">Exibir</a>
                        <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agendamento_edit", array("id" => $this->getAttribute($context["agendamento"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Editar</a>

                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agendamento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        </tbody>
    </table>

";
        
        $__internal_26c280ae090f939fc9cc9c7d81de2477625c403a8f39e855dfd97f75daf59259->leave($__internal_26c280ae090f939fc9cc9c7d81de2477625c403a8f39e855dfd97f75daf59259_prof);

        
        $__internal_26f7f66570c0e7e6f0a8bacb8b1ef3ebfd893a36d1f435b30608b6e8b0a88767->leave($__internal_26f7f66570c0e7e6f0a8bacb8b1ef3ebfd893a36d1f435b30608b6e8b0a88767_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c2ae6ceeea9f44851332e446f397e31cc505ab2798801eda83b0c153dfe308bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2ae6ceeea9f44851332e446f397e31cc505ab2798801eda83b0c153dfe308bc->enter($__internal_c2ae6ceeea9f44851332e446f397e31cc505ab2798801eda83b0c153dfe308bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_298d3734df9c613af09fcf06f42c64e09899eba7a91ed5e7733f548fa5b40491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_298d3734df9c613af09fcf06f42c64e09899eba7a91ed5e7733f548fa5b40491->enter($__internal_298d3734df9c613af09fcf06f42c64e09899eba7a91ed5e7733f548fa5b40491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "        <link href=\"/css/bootstrap-datepicker.css\" rel=\"stylesheet\" type=\"text/css\"/>
    ";
        
        $__internal_298d3734df9c613af09fcf06f42c64e09899eba7a91ed5e7733f548fa5b40491->leave($__internal_298d3734df9c613af09fcf06f42c64e09899eba7a91ed5e7733f548fa5b40491_prof);

        
        $__internal_c2ae6ceeea9f44851332e446f397e31cc505ab2798801eda83b0c153dfe308bc->leave($__internal_c2ae6ceeea9f44851332e446f397e31cc505ab2798801eda83b0c153dfe308bc_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_08b260b111963d162aefc80831cb723c89c923c4b5e9c09e7cf25c1b24dd2355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08b260b111963d162aefc80831cb723c89c923c4b5e9c09e7cf25c1b24dd2355->enter($__internal_08b260b111963d162aefc80831cb723c89c923c4b5e9c09e7cf25c1b24dd2355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bc48182e46a86cd5982b49da1e9852dc5952555cf3527c09a3c9b9114d9c5828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc48182e46a86cd5982b49da1e9852dc5952555cf3527c09a3c9b9114d9c5828->enter($__internal_bc48182e46a86cd5982b49da1e9852dc5952555cf3527c09a3c9b9114d9c5828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_bc48182e46a86cd5982b49da1e9852dc5952555cf3527c09a3c9b9114d9c5828->leave($__internal_bc48182e46a86cd5982b49da1e9852dc5952555cf3527c09a3c9b9114d9c5828_prof);

        
        $__internal_08b260b111963d162aefc80831cb723c89c923c4b5e9c09e7cf25c1b24dd2355->leave($__internal_08b260b111963d162aefc80831cb723c89c923c4b5e9c09e7cf25c1b24dd2355_prof);

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
        return array (  192 => 9,  183 => 8,  172 => 5,  163 => 4,  150 => 72,  139 => 67,  135 => 66,  130 => 64,  126 => 63,  122 => 62,  116 => 61,  110 => 60,  107 => 59,  103 => 58,  84 => 42,  62 => 23,  59 => 22,  57 => 8,  54 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
                <th>Responsável</th>
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
                    <td>{{ agendamento.usuario }}</td>
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
