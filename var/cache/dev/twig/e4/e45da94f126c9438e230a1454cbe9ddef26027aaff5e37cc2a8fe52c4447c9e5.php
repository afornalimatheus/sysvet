<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_2447dff499eb1e5fcecdd3fa14eaf8f46dd5eebe2fddf9a6a3c784e9a89474c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61d63066665d0c7125f2d9a4c973943f478da8db4a50b744d8a5dea69f35d774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61d63066665d0c7125f2d9a4c973943f478da8db4a50b744d8a5dea69f35d774->enter($__internal_61d63066665d0c7125f2d9a4c973943f478da8db4a50b744d8a5dea69f35d774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_73a387c0687658d1204ffb25bbc2981d5de5298f158b4c01c228ed3e524e44b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73a387c0687658d1204ffb25bbc2981d5de5298f158b4c01c228ed3e524e44b2->enter($__internal_73a387c0687658d1204ffb25bbc2981d5de5298f158b4c01c228ed3e524e44b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61d63066665d0c7125f2d9a4c973943f478da8db4a50b744d8a5dea69f35d774->leave($__internal_61d63066665d0c7125f2d9a4c973943f478da8db4a50b744d8a5dea69f35d774_prof);

        
        $__internal_73a387c0687658d1204ffb25bbc2981d5de5298f158b4c01c228ed3e524e44b2->leave($__internal_73a387c0687658d1204ffb25bbc2981d5de5298f158b4c01c228ed3e524e44b2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_86ead55f256b90c8fb196b12c09dbc2fb55a93d51c4bb765c140aefae0869013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86ead55f256b90c8fb196b12c09dbc2fb55a93d51c4bb765c140aefae0869013->enter($__internal_86ead55f256b90c8fb196b12c09dbc2fb55a93d51c4bb765c140aefae0869013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_042698af9dc3e298fb5e1068669765a3490df8d380cf296ce13f7f43d23ca59d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_042698af9dc3e298fb5e1068669765a3490df8d380cf296ce13f7f43d23ca59d->enter($__internal_042698af9dc3e298fb5e1068669765a3490df8d380cf296ce13f7f43d23ca59d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_042698af9dc3e298fb5e1068669765a3490df8d380cf296ce13f7f43d23ca59d->leave($__internal_042698af9dc3e298fb5e1068669765a3490df8d380cf296ce13f7f43d23ca59d_prof);

        
        $__internal_86ead55f256b90c8fb196b12c09dbc2fb55a93d51c4bb765c140aefae0869013->leave($__internal_86ead55f256b90c8fb196b12c09dbc2fb55a93d51c4bb765c140aefae0869013_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eac456042e57ae4caaa366a108c56d21f94d6dd051ae0a709a9cf1ab4595e34b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eac456042e57ae4caaa366a108c56d21f94d6dd051ae0a709a9cf1ab4595e34b->enter($__internal_eac456042e57ae4caaa366a108c56d21f94d6dd051ae0a709a9cf1ab4595e34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5732e15dac2a7f430f9ac6f1676ac69f0e75fb47e084a6996e252dab55606ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5732e15dac2a7f430f9ac6f1676ac69f0e75fb47e084a6996e252dab55606ed7->enter($__internal_5732e15dac2a7f430f9ac6f1676ac69f0e75fb47e084a6996e252dab55606ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5732e15dac2a7f430f9ac6f1676ac69f0e75fb47e084a6996e252dab55606ed7->leave($__internal_5732e15dac2a7f430f9ac6f1676ac69f0e75fb47e084a6996e252dab55606ed7_prof);

        
        $__internal_eac456042e57ae4caaa366a108c56d21f94d6dd051ae0a709a9cf1ab4595e34b->leave($__internal_eac456042e57ae4caaa366a108c56d21f94d6dd051ae0a709a9cf1ab4595e34b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dc475368b4edeba7aef4ea19f267d43ba9c66b6eb55d8c24d7bdad10a06b16f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc475368b4edeba7aef4ea19f267d43ba9c66b6eb55d8c24d7bdad10a06b16f9->enter($__internal_dc475368b4edeba7aef4ea19f267d43ba9c66b6eb55d8c24d7bdad10a06b16f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e851d67a3000959d0048b2a45cc6280e80cfb8d16be61e8076aeb21388c4c070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e851d67a3000959d0048b2a45cc6280e80cfb8d16be61e8076aeb21388c4c070->enter($__internal_e851d67a3000959d0048b2a45cc6280e80cfb8d16be61e8076aeb21388c4c070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e851d67a3000959d0048b2a45cc6280e80cfb8d16be61e8076aeb21388c4c070->leave($__internal_e851d67a3000959d0048b2a45cc6280e80cfb8d16be61e8076aeb21388c4c070_prof);

        
        $__internal_dc475368b4edeba7aef4ea19f267d43ba9c66b6eb55d8c24d7bdad10a06b16f9->leave($__internal_dc475368b4edeba7aef4ea19f267d43ba9c66b6eb55d8c24d7bdad10a06b16f9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/aluno/matheus-php2/sysvet/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
