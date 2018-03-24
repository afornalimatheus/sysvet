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
        $__internal_c0fa72cd8951b8d37507455472c11571ba3a5248df7c2b9c256bb714e6fd58b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0fa72cd8951b8d37507455472c11571ba3a5248df7c2b9c256bb714e6fd58b6->enter($__internal_c0fa72cd8951b8d37507455472c11571ba3a5248df7c2b9c256bb714e6fd58b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_dbf5f9b726994e95c92ad0cd5b425fedb3812438e92ac401999b4c892408c871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbf5f9b726994e95c92ad0cd5b425fedb3812438e92ac401999b4c892408c871->enter($__internal_dbf5f9b726994e95c92ad0cd5b425fedb3812438e92ac401999b4c892408c871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0fa72cd8951b8d37507455472c11571ba3a5248df7c2b9c256bb714e6fd58b6->leave($__internal_c0fa72cd8951b8d37507455472c11571ba3a5248df7c2b9c256bb714e6fd58b6_prof);

        
        $__internal_dbf5f9b726994e95c92ad0cd5b425fedb3812438e92ac401999b4c892408c871->leave($__internal_dbf5f9b726994e95c92ad0cd5b425fedb3812438e92ac401999b4c892408c871_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_09384ba70c265d4a97c4e0b47b30b3a1babf462caabdf23163ef7318d5460a28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09384ba70c265d4a97c4e0b47b30b3a1babf462caabdf23163ef7318d5460a28->enter($__internal_09384ba70c265d4a97c4e0b47b30b3a1babf462caabdf23163ef7318d5460a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8147dc4e4c712f7dfab3236a84c7902cf698a7ae512970ba9f6e7a58d05e87d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8147dc4e4c712f7dfab3236a84c7902cf698a7ae512970ba9f6e7a58d05e87d4->enter($__internal_8147dc4e4c712f7dfab3236a84c7902cf698a7ae512970ba9f6e7a58d05e87d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8147dc4e4c712f7dfab3236a84c7902cf698a7ae512970ba9f6e7a58d05e87d4->leave($__internal_8147dc4e4c712f7dfab3236a84c7902cf698a7ae512970ba9f6e7a58d05e87d4_prof);

        
        $__internal_09384ba70c265d4a97c4e0b47b30b3a1babf462caabdf23163ef7318d5460a28->leave($__internal_09384ba70c265d4a97c4e0b47b30b3a1babf462caabdf23163ef7318d5460a28_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_93c3300227b2f65042156321abc2eb7dfaef7f2403ae1352cfdcf7c51e8e80b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93c3300227b2f65042156321abc2eb7dfaef7f2403ae1352cfdcf7c51e8e80b1->enter($__internal_93c3300227b2f65042156321abc2eb7dfaef7f2403ae1352cfdcf7c51e8e80b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_26319b17af3177a71449da5cc8025ae6e8835935ff4e69f5fa7a5863f9179843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26319b17af3177a71449da5cc8025ae6e8835935ff4e69f5fa7a5863f9179843->enter($__internal_26319b17af3177a71449da5cc8025ae6e8835935ff4e69f5fa7a5863f9179843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_26319b17af3177a71449da5cc8025ae6e8835935ff4e69f5fa7a5863f9179843->leave($__internal_26319b17af3177a71449da5cc8025ae6e8835935ff4e69f5fa7a5863f9179843_prof);

        
        $__internal_93c3300227b2f65042156321abc2eb7dfaef7f2403ae1352cfdcf7c51e8e80b1->leave($__internal_93c3300227b2f65042156321abc2eb7dfaef7f2403ae1352cfdcf7c51e8e80b1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7f53185eeab9c02fe818301bd8c9c34fcc19d3202f84ecc341072d58a1e12d14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f53185eeab9c02fe818301bd8c9c34fcc19d3202f84ecc341072d58a1e12d14->enter($__internal_7f53185eeab9c02fe818301bd8c9c34fcc19d3202f84ecc341072d58a1e12d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c045de0c2da42a424906a2852e7f8a5556eee5a250b8c28890b92fa3f019e731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c045de0c2da42a424906a2852e7f8a5556eee5a250b8c28890b92fa3f019e731->enter($__internal_c045de0c2da42a424906a2852e7f8a5556eee5a250b8c28890b92fa3f019e731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c045de0c2da42a424906a2852e7f8a5556eee5a250b8c28890b92fa3f019e731->leave($__internal_c045de0c2da42a424906a2852e7f8a5556eee5a250b8c28890b92fa3f019e731_prof);

        
        $__internal_7f53185eeab9c02fe818301bd8c9c34fcc19d3202f84ecc341072d58a1e12d14->leave($__internal_7f53185eeab9c02fe818301bd8c9c34fcc19d3202f84ecc341072d58a1e12d14_prof);

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
