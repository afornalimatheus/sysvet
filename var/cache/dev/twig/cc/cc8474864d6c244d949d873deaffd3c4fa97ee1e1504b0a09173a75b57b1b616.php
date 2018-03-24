<?php

/* default/painel.html.twig */
class __TwigTemplate_af889413274b71d290f408f7d1ef071e88dd39319065ea2bef6b34f45deec567 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/painel.html.twig", 1);
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
        $__internal_4785d1860cfd9a4f548793453cb0653f2dc1374484c6bd26a998a3ff89a1e3ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4785d1860cfd9a4f548793453cb0653f2dc1374484c6bd26a998a3ff89a1e3ab->enter($__internal_4785d1860cfd9a4f548793453cb0653f2dc1374484c6bd26a998a3ff89a1e3ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/painel.html.twig"));

        $__internal_4109a8849a2b8dc1e96ece171ff1d7b35bc849526b78d25c4cabe2933619480d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4109a8849a2b8dc1e96ece171ff1d7b35bc849526b78d25c4cabe2933619480d->enter($__internal_4109a8849a2b8dc1e96ece171ff1d7b35bc849526b78d25c4cabe2933619480d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/painel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4785d1860cfd9a4f548793453cb0653f2dc1374484c6bd26a998a3ff89a1e3ab->leave($__internal_4785d1860cfd9a4f548793453cb0653f2dc1374484c6bd26a998a3ff89a1e3ab_prof);

        
        $__internal_4109a8849a2b8dc1e96ece171ff1d7b35bc849526b78d25c4cabe2933619480d->leave($__internal_4109a8849a2b8dc1e96ece171ff1d7b35bc849526b78d25c4cabe2933619480d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_92b80f46783ffdb1631ed5e9f12a8cf70b6ba5434a1eaba97a5925eb24d9f125 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92b80f46783ffdb1631ed5e9f12a8cf70b6ba5434a1eaba97a5925eb24d9f125->enter($__internal_92b80f46783ffdb1631ed5e9f12a8cf70b6ba5434a1eaba97a5925eb24d9f125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_df829bebc663c38de51c36d22865043554fb8bb08b50dd7853c97e81b39c5200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df829bebc663c38de51c36d22865043554fb8bb08b50dd7853c97e81b39c5200->enter($__internal_df829bebc663c38de51c36d22865043554fb8bb08b50dd7853c97e81b39c5200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>
        Página Home
    </h1>
";
        
        $__internal_df829bebc663c38de51c36d22865043554fb8bb08b50dd7853c97e81b39c5200->leave($__internal_df829bebc663c38de51c36d22865043554fb8bb08b50dd7853c97e81b39c5200_prof);

        
        $__internal_92b80f46783ffdb1631ed5e9f12a8cf70b6ba5434a1eaba97a5925eb24d9f125->leave($__internal_92b80f46783ffdb1631ed5e9f12a8cf70b6ba5434a1eaba97a5925eb24d9f125_prof);

    }

    public function getTemplateName()
    {
        return "default/painel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>
        Página Home
    </h1>
{% endblock %}", "default/painel.html.twig", "/home/aluno/matheus-php2/sysvet/app/Resources/views/default/painel.html.twig");
    }
}
