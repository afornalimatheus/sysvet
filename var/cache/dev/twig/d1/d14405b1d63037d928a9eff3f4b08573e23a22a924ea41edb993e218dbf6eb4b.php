<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f03c55ddad3579f13f81ea89d4db9be0dfa09fb32b11c96a94693bde757992ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_0aba218d449a3978e8ed94aa052598a0a50620fbef05930e94f3cce005f55b70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aba218d449a3978e8ed94aa052598a0a50620fbef05930e94f3cce005f55b70->enter($__internal_0aba218d449a3978e8ed94aa052598a0a50620fbef05930e94f3cce005f55b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_aae1d00acaae5beb92b4d92a68bfeefbccd63d995a224b3b63bd7826bc690787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae1d00acaae5beb92b4d92a68bfeefbccd63d995a224b3b63bd7826bc690787->enter($__internal_aae1d00acaae5beb92b4d92a68bfeefbccd63d995a224b3b63bd7826bc690787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0aba218d449a3978e8ed94aa052598a0a50620fbef05930e94f3cce005f55b70->leave($__internal_0aba218d449a3978e8ed94aa052598a0a50620fbef05930e94f3cce005f55b70_prof);

        
        $__internal_aae1d00acaae5beb92b4d92a68bfeefbccd63d995a224b3b63bd7826bc690787->leave($__internal_aae1d00acaae5beb92b4d92a68bfeefbccd63d995a224b3b63bd7826bc690787_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_83d0f5a52f51f653b232ef2a7a064580d9ea0f890a4e4e3c27511d9d90555057 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83d0f5a52f51f653b232ef2a7a064580d9ea0f890a4e4e3c27511d9d90555057->enter($__internal_83d0f5a52f51f653b232ef2a7a064580d9ea0f890a4e4e3c27511d9d90555057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_eff3e864fc7dbbfc9c874ed16df152290137022761c1e6daed1516511ce15685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eff3e864fc7dbbfc9c874ed16df152290137022761c1e6daed1516511ce15685->enter($__internal_eff3e864fc7dbbfc9c874ed16df152290137022761c1e6daed1516511ce15685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_eff3e864fc7dbbfc9c874ed16df152290137022761c1e6daed1516511ce15685->leave($__internal_eff3e864fc7dbbfc9c874ed16df152290137022761c1e6daed1516511ce15685_prof);

        
        $__internal_83d0f5a52f51f653b232ef2a7a064580d9ea0f890a4e4e3c27511d9d90555057->leave($__internal_83d0f5a52f51f653b232ef2a7a064580d9ea0f890a4e4e3c27511d9d90555057_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e95f923a2d36cfc265e19075573a56e31fe1d89f5bf5e00981234d33aea191cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e95f923a2d36cfc265e19075573a56e31fe1d89f5bf5e00981234d33aea191cf->enter($__internal_e95f923a2d36cfc265e19075573a56e31fe1d89f5bf5e00981234d33aea191cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bb93faef79cba75d7cda83e7435479a80f8cb8ee42fbfbe645b420d1e32c7682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb93faef79cba75d7cda83e7435479a80f8cb8ee42fbfbe645b420d1e32c7682->enter($__internal_bb93faef79cba75d7cda83e7435479a80f8cb8ee42fbfbe645b420d1e32c7682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bb93faef79cba75d7cda83e7435479a80f8cb8ee42fbfbe645b420d1e32c7682->leave($__internal_bb93faef79cba75d7cda83e7435479a80f8cb8ee42fbfbe645b420d1e32c7682_prof);

        
        $__internal_e95f923a2d36cfc265e19075573a56e31fe1d89f5bf5e00981234d33aea191cf->leave($__internal_e95f923a2d36cfc265e19075573a56e31fe1d89f5bf5e00981234d33aea191cf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5afae5407e76f18217163f8507856e5d81bed079c59d3b9ddbcd5746cf94e48e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5afae5407e76f18217163f8507856e5d81bed079c59d3b9ddbcd5746cf94e48e->enter($__internal_5afae5407e76f18217163f8507856e5d81bed079c59d3b9ddbcd5746cf94e48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_78cd6757d7acedc4b3e33b1a63728ea669cd20b18d866ca07bbac37663a8280b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78cd6757d7acedc4b3e33b1a63728ea669cd20b18d866ca07bbac37663a8280b->enter($__internal_78cd6757d7acedc4b3e33b1a63728ea669cd20b18d866ca07bbac37663a8280b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_78cd6757d7acedc4b3e33b1a63728ea669cd20b18d866ca07bbac37663a8280b->leave($__internal_78cd6757d7acedc4b3e33b1a63728ea669cd20b18d866ca07bbac37663a8280b_prof);

        
        $__internal_5afae5407e76f18217163f8507856e5d81bed079c59d3b9ddbcd5746cf94e48e->leave($__internal_5afae5407e76f18217163f8507856e5d81bed079c59d3b9ddbcd5746cf94e48e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/aluno/matheus-php2/sysvet/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
