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
        $__internal_27299385eb0d4833bf73b5cd2cb4d1000a577019f156e1c0465bab7da2037792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27299385eb0d4833bf73b5cd2cb4d1000a577019f156e1c0465bab7da2037792->enter($__internal_27299385eb0d4833bf73b5cd2cb4d1000a577019f156e1c0465bab7da2037792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_78b16ae6c0d07bcfe393c4984c7ab0c5660e55732d4a235a99b73765015c9d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78b16ae6c0d07bcfe393c4984c7ab0c5660e55732d4a235a99b73765015c9d80->enter($__internal_78b16ae6c0d07bcfe393c4984c7ab0c5660e55732d4a235a99b73765015c9d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27299385eb0d4833bf73b5cd2cb4d1000a577019f156e1c0465bab7da2037792->leave($__internal_27299385eb0d4833bf73b5cd2cb4d1000a577019f156e1c0465bab7da2037792_prof);

        
        $__internal_78b16ae6c0d07bcfe393c4984c7ab0c5660e55732d4a235a99b73765015c9d80->leave($__internal_78b16ae6c0d07bcfe393c4984c7ab0c5660e55732d4a235a99b73765015c9d80_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2e11f47e4f6c68f57d7af0325087b47711421f7a762e2420b7eb2dae1588cd01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e11f47e4f6c68f57d7af0325087b47711421f7a762e2420b7eb2dae1588cd01->enter($__internal_2e11f47e4f6c68f57d7af0325087b47711421f7a762e2420b7eb2dae1588cd01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e57b58ae4fea31bd399ad5584838062d8d257430211b960b9ad03f5c43fe2170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e57b58ae4fea31bd399ad5584838062d8d257430211b960b9ad03f5c43fe2170->enter($__internal_e57b58ae4fea31bd399ad5584838062d8d257430211b960b9ad03f5c43fe2170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e57b58ae4fea31bd399ad5584838062d8d257430211b960b9ad03f5c43fe2170->leave($__internal_e57b58ae4fea31bd399ad5584838062d8d257430211b960b9ad03f5c43fe2170_prof);

        
        $__internal_2e11f47e4f6c68f57d7af0325087b47711421f7a762e2420b7eb2dae1588cd01->leave($__internal_2e11f47e4f6c68f57d7af0325087b47711421f7a762e2420b7eb2dae1588cd01_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ae3f364e0aa561c208f595f2e0c5137042cac33dd105e34014d73384e6a1d36a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae3f364e0aa561c208f595f2e0c5137042cac33dd105e34014d73384e6a1d36a->enter($__internal_ae3f364e0aa561c208f595f2e0c5137042cac33dd105e34014d73384e6a1d36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3303555a99fad21ec2861cbe2e866b8bcf426fd7800bd96e57146a2f95d004e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3303555a99fad21ec2861cbe2e866b8bcf426fd7800bd96e57146a2f95d004e0->enter($__internal_3303555a99fad21ec2861cbe2e866b8bcf426fd7800bd96e57146a2f95d004e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3303555a99fad21ec2861cbe2e866b8bcf426fd7800bd96e57146a2f95d004e0->leave($__internal_3303555a99fad21ec2861cbe2e866b8bcf426fd7800bd96e57146a2f95d004e0_prof);

        
        $__internal_ae3f364e0aa561c208f595f2e0c5137042cac33dd105e34014d73384e6a1d36a->leave($__internal_ae3f364e0aa561c208f595f2e0c5137042cac33dd105e34014d73384e6a1d36a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8e506eb1d572ecb9601b718af42701ae32f0594dbc1d1d5b074e486cabaf7f06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e506eb1d572ecb9601b718af42701ae32f0594dbc1d1d5b074e486cabaf7f06->enter($__internal_8e506eb1d572ecb9601b718af42701ae32f0594dbc1d1d5b074e486cabaf7f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_32fc03ce4929bc1549c7723a5ae4f7d1f90a3b9db7d66535ada3d03277911ecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32fc03ce4929bc1549c7723a5ae4f7d1f90a3b9db7d66535ada3d03277911ecb->enter($__internal_32fc03ce4929bc1549c7723a5ae4f7d1f90a3b9db7d66535ada3d03277911ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_32fc03ce4929bc1549c7723a5ae4f7d1f90a3b9db7d66535ada3d03277911ecb->leave($__internal_32fc03ce4929bc1549c7723a5ae4f7d1f90a3b9db7d66535ada3d03277911ecb_prof);

        
        $__internal_8e506eb1d572ecb9601b718af42701ae32f0594dbc1d1d5b074e486cabaf7f06->leave($__internal_8e506eb1d572ecb9601b718af42701ae32f0594dbc1d1d5b074e486cabaf7f06_prof);

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
