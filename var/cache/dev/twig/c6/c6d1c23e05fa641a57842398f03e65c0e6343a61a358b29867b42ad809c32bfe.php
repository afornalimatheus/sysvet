<?php

/* agendamento/new.html.twig */
class __TwigTemplate_6f5de114faf1f0cc1711c7887d1dc8c46af4f8fb3162d1907f0107350eb0ba2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "agendamento/new.html.twig", 1);
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
        $__internal_6ee3916d230816fea73cd4b1cc0a4adc977b73c9564e73945b638ef4393dc011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ee3916d230816fea73cd4b1cc0a4adc977b73c9564e73945b638ef4393dc011->enter($__internal_6ee3916d230816fea73cd4b1cc0a4adc977b73c9564e73945b638ef4393dc011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agendamento/new.html.twig"));

        $__internal_be33ffb47017887f50599453e8fd15d2ff2877c9b8c34f1ffda6a651f8f493e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be33ffb47017887f50599453e8fd15d2ff2877c9b8c34f1ffda6a651f8f493e9->enter($__internal_be33ffb47017887f50599453e8fd15d2ff2877c9b8c34f1ffda6a651f8f493e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agendamento/new.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "bootstrap_4_horizontal_layout.html.twig"), true);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ee3916d230816fea73cd4b1cc0a4adc977b73c9564e73945b638ef4393dc011->leave($__internal_6ee3916d230816fea73cd4b1cc0a4adc977b73c9564e73945b638ef4393dc011_prof);

        
        $__internal_be33ffb47017887f50599453e8fd15d2ff2877c9b8c34f1ffda6a651f8f493e9->leave($__internal_be33ffb47017887f50599453e8fd15d2ff2877c9b8c34f1ffda6a651f8f493e9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_20c16c55c798c03f59923cd81c2c005369071459087adebfbcdd5fda78ffd1e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20c16c55c798c03f59923cd81c2c005369071459087adebfbcdd5fda78ffd1e1->enter($__internal_20c16c55c798c03f59923cd81c2c005369071459087adebfbcdd5fda78ffd1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_effe8848f5d344a1b89a19b18402ee662cca99b2dbf401592fc6a00a53119990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_effe8848f5d344a1b89a19b18402ee662cca99b2dbf401592fc6a00a53119990->enter($__internal_effe8848f5d344a1b89a19b18402ee662cca99b2dbf401592fc6a00a53119990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Criar agendamento</h1>

    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Agendar\" class=\"btn btn-primary\"/>
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_effe8848f5d344a1b89a19b18402ee662cca99b2dbf401592fc6a00a53119990->leave($__internal_effe8848f5d344a1b89a19b18402ee662cca99b2dbf401592fc6a00a53119990_prof);

        
        $__internal_20c16c55c798c03f59923cd81c2c005369071459087adebfbcdd5fda78ffd1e1->leave($__internal_20c16c55c798c03f59923cd81c2c005369071459087adebfbcdd5fda78ffd1e1_prof);

    }

    public function getTemplateName()
    {
        return "agendamento/new.html.twig";
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
    <h1>Criar agendamento</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Agendar\" class=\"btn btn-primary\"/>
    {{ form_end(form) }}
{% endblock %}
", "agendamento/new.html.twig", "/home/aluno/matheus-php2/sysvet/app/Resources/views/agendamento/new.html.twig");
    }
}
