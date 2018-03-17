<?php

/* cliente/new.html.twig */
class __TwigTemplate_7f4e107253c7aede195061a4b6230616bfcb9c1f5939099407b4d8b3f02a1ea2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cliente/new.html.twig", 1);
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
        $__internal_3c86777955316abf42f68416d8040e7cfebbdd65035af33e2fdf98bbce5dec2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c86777955316abf42f68416d8040e7cfebbdd65035af33e2fdf98bbce5dec2d->enter($__internal_3c86777955316abf42f68416d8040e7cfebbdd65035af33e2fdf98bbce5dec2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/new.html.twig"));

        $__internal_e20c858088b1abfe6d304f461ff6d6b7a5d1617f2e234e384ea3a0873a589baa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e20c858088b1abfe6d304f461ff6d6b7a5d1617f2e234e384ea3a0873a589baa->enter($__internal_e20c858088b1abfe6d304f461ff6d6b7a5d1617f2e234e384ea3a0873a589baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/new.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "bootstrap_4_horizontal_layout.html.twig"), true);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c86777955316abf42f68416d8040e7cfebbdd65035af33e2fdf98bbce5dec2d->leave($__internal_3c86777955316abf42f68416d8040e7cfebbdd65035af33e2fdf98bbce5dec2d_prof);

        
        $__internal_e20c858088b1abfe6d304f461ff6d6b7a5d1617f2e234e384ea3a0873a589baa->leave($__internal_e20c858088b1abfe6d304f461ff6d6b7a5d1617f2e234e384ea3a0873a589baa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c843b68ceb4a017f79b6604b25bb722e7a0df8bd503431f45dc93ed47547a681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c843b68ceb4a017f79b6604b25bb722e7a0df8bd503431f45dc93ed47547a681->enter($__internal_c843b68ceb4a017f79b6604b25bb722e7a0df8bd503431f45dc93ed47547a681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b18084f87456c81c78467e31993583c845079b652dce153088d69045ffe2bf93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b18084f87456c81c78467e31993583c845079b652dce153088d69045ffe2bf93->enter($__internal_b18084f87456c81c78467e31993583c845079b652dce153088d69045ffe2bf93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Novo cliente</h1>

    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Criar\" class=\"btn btn-success\" />
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_b18084f87456c81c78467e31993583c845079b652dce153088d69045ffe2bf93->leave($__internal_b18084f87456c81c78467e31993583c845079b652dce153088d69045ffe2bf93_prof);

        
        $__internal_c843b68ceb4a017f79b6604b25bb722e7a0df8bd503431f45dc93ed47547a681->leave($__internal_c843b68ceb4a017f79b6604b25bb722e7a0df8bd503431f45dc93ed47547a681_prof);

    }

    public function getTemplateName()
    {
        return "cliente/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  60 => 9,  56 => 8,  52 => 6,  43 => 5,  33 => 1,  31 => 3,  11 => 1,);
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

{% form_theme form 'bootstrap_4_horizontal_layout.html.twig' %}

{% block body %}
    <h1>Novo cliente</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Criar\" class=\"btn btn-success\" />
    {{ form_end(form) }}
{% endblock %}
", "cliente/new.html.twig", "/home/aluno/matheus-php2/sysvet/app/Resources/views/cliente/new.html.twig");
    }
}
