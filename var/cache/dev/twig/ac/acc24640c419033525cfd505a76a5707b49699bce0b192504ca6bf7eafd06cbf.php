<?php

/* default/contato.html.twig */
class __TwigTemplate_dc364afb982090d5fd2feb673a0901c5e2c1495ca2f5eb87f6a111ce040ecaaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/contato.html.twig", 1);
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
        $__internal_1bb7cdebaabaa36477209ef793e57fa84c543a1adc97f1a95c0fa8025080948e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bb7cdebaabaa36477209ef793e57fa84c543a1adc97f1a95c0fa8025080948e->enter($__internal_1bb7cdebaabaa36477209ef793e57fa84c543a1adc97f1a95c0fa8025080948e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/contato.html.twig"));

        $__internal_89271f141a0fc8c476c129c277dc7fc36e9f835b2bf6088474ed629f4b605dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89271f141a0fc8c476c129c277dc7fc36e9f835b2bf6088474ed629f4b605dac->enter($__internal_89271f141a0fc8c476c129c277dc7fc36e9f835b2bf6088474ed629f4b605dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/contato.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bb7cdebaabaa36477209ef793e57fa84c543a1adc97f1a95c0fa8025080948e->leave($__internal_1bb7cdebaabaa36477209ef793e57fa84c543a1adc97f1a95c0fa8025080948e_prof);

        
        $__internal_89271f141a0fc8c476c129c277dc7fc36e9f835b2bf6088474ed629f4b605dac->leave($__internal_89271f141a0fc8c476c129c277dc7fc36e9f835b2bf6088474ed629f4b605dac_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_925c0260dd03b7072637ddbc4d282c3c0399cfc3fe0f635ed457fa2f8e4cf9d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_925c0260dd03b7072637ddbc4d282c3c0399cfc3fe0f635ed457fa2f8e4cf9d8->enter($__internal_925c0260dd03b7072637ddbc4d282c3c0399cfc3fe0f635ed457fa2f8e4cf9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a54b96a655c5d9885c7656bd1431d6b105012aa9ca2b92e338ac6d0f097e5994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a54b96a655c5d9885c7656bd1431d6b105012aa9ca2b92e338ac6d0f097e5994->enter($__internal_a54b96a655c5d9885c7656bd1431d6b105012aa9ca2b92e338ac6d0f097e5994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
               <h1>Contato</h1>
               
               <div>
                   Olá ";
        // line 10
        echo twig_escape_filter($this->env, ($context["nome"] ?? $this->getContext($context, "nome")), "html", null, true);
        echo "!
               </div>
            </div>
        </div>
    </div>
";
        
        $__internal_a54b96a655c5d9885c7656bd1431d6b105012aa9ca2b92e338ac6d0f097e5994->leave($__internal_a54b96a655c5d9885c7656bd1431d6b105012aa9ca2b92e338ac6d0f097e5994_prof);

        
        $__internal_925c0260dd03b7072637ddbc4d282c3c0399cfc3fe0f635ed457fa2f8e4cf9d8->leave($__internal_925c0260dd03b7072637ddbc4d282c3c0399cfc3fe0f635ed457fa2f8e4cf9d8_prof);

    }

    public function getTemplateName()
    {
        return "default/contato.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
               <h1>Contato</h1>
               
               <div>
                   Olá {{ nome }}!
               </div>
            </div>
        </div>
    </div>
{% endblock %}

", "default/contato.html.twig", "/home/aluno/matheus-php2/sysvet/app/Resources/views/default/contato.html.twig");
    }
}
