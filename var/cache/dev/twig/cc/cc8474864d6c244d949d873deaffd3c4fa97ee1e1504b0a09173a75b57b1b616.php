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
        $__internal_24c2c7881d94608e229e65570c3f015872c4424434ed4c5dde77a10f4acf22bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24c2c7881d94608e229e65570c3f015872c4424434ed4c5dde77a10f4acf22bf->enter($__internal_24c2c7881d94608e229e65570c3f015872c4424434ed4c5dde77a10f4acf22bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/painel.html.twig"));

        $__internal_a8ff03bd9cc29ad6cfd469e325086efb4570d02457c892f734c89211bb9748e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ff03bd9cc29ad6cfd469e325086efb4570d02457c892f734c89211bb9748e0->enter($__internal_a8ff03bd9cc29ad6cfd469e325086efb4570d02457c892f734c89211bb9748e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/painel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24c2c7881d94608e229e65570c3f015872c4424434ed4c5dde77a10f4acf22bf->leave($__internal_24c2c7881d94608e229e65570c3f015872c4424434ed4c5dde77a10f4acf22bf_prof);

        
        $__internal_a8ff03bd9cc29ad6cfd469e325086efb4570d02457c892f734c89211bb9748e0->leave($__internal_a8ff03bd9cc29ad6cfd469e325086efb4570d02457c892f734c89211bb9748e0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_995375076445cd7061f410e0a1282acaae2bb163bdc7529164133eebee0f84ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_995375076445cd7061f410e0a1282acaae2bb163bdc7529164133eebee0f84ba->enter($__internal_995375076445cd7061f410e0a1282acaae2bb163bdc7529164133eebee0f84ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8da7b3f22c855a7d88f9d4e3f126a494201f7e52f729faa77e1505114437e5c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da7b3f22c855a7d88f9d4e3f126a494201f7e52f729faa77e1505114437e5c4->enter($__internal_8da7b3f22c855a7d88f9d4e3f126a494201f7e52f729faa77e1505114437e5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>
        Página Home
    </h1>
";
        
        $__internal_8da7b3f22c855a7d88f9d4e3f126a494201f7e52f729faa77e1505114437e5c4->leave($__internal_8da7b3f22c855a7d88f9d4e3f126a494201f7e52f729faa77e1505114437e5c4_prof);

        
        $__internal_995375076445cd7061f410e0a1282acaae2bb163bdc7529164133eebee0f84ba->leave($__internal_995375076445cd7061f410e0a1282acaae2bb163bdc7529164133eebee0f84ba_prof);

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
