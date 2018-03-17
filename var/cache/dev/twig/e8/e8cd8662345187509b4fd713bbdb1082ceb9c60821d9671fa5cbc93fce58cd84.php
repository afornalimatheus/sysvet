<?php

/* cliente/edit.html.twig */
class __TwigTemplate_e1d66ecb67318d4a7f7b087b03d512545574ea700eda272caca524eecc3850d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cliente/edit.html.twig", 1);
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
        $__internal_c2e401a013edc688d1806c6f4b465725c1de0e1fd89f7c16542f4a23164e0af5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2e401a013edc688d1806c6f4b465725c1de0e1fd89f7c16542f4a23164e0af5->enter($__internal_c2e401a013edc688d1806c6f4b465725c1de0e1fd89f7c16542f4a23164e0af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/edit.html.twig"));

        $__internal_5760a30ed4ec8c21962e6f4b8ef8176ef1831f9e1ab89d4f6991e6c664743315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5760a30ed4ec8c21962e6f4b8ef8176ef1831f9e1ab89d4f6991e6c664743315->enter($__internal_5760a30ed4ec8c21962e6f4b8ef8176ef1831f9e1ab89d4f6991e6c664743315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/edit.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => "bootstrap_4_horizontal_layout.html.twig"), true);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2e401a013edc688d1806c6f4b465725c1de0e1fd89f7c16542f4a23164e0af5->leave($__internal_c2e401a013edc688d1806c6f4b465725c1de0e1fd89f7c16542f4a23164e0af5_prof);

        
        $__internal_5760a30ed4ec8c21962e6f4b8ef8176ef1831f9e1ab89d4f6991e6c664743315->leave($__internal_5760a30ed4ec8c21962e6f4b8ef8176ef1831f9e1ab89d4f6991e6c664743315_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0cfed374ab380d4d25fb685983d7b0510f17b52c26f29ba29e6722bc433a516a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cfed374ab380d4d25fb685983d7b0510f17b52c26f29ba29e6722bc433a516a->enter($__internal_0cfed374ab380d4d25fb685983d7b0510f17b52c26f29ba29e6722bc433a516a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_327332b82b633f570f397b4ce797610b9f7e706549cb7674206f3bfb031ac368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_327332b82b633f570f397b4ce797610b9f7e706549cb7674206f3bfb031ac368->enter($__internal_327332b82b633f570f397b4ce797610b9f7e706549cb7674206f3bfb031ac368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Cliente edit</h1>

    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Salvar\" class=\"btn btn-success float-left\" />
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger\">
    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
";
        
        $__internal_327332b82b633f570f397b4ce797610b9f7e706549cb7674206f3bfb031ac368->leave($__internal_327332b82b633f570f397b4ce797610b9f7e706549cb7674206f3bfb031ac368_prof);

        
        $__internal_0cfed374ab380d4d25fb685983d7b0510f17b52c26f29ba29e6722bc433a516a->leave($__internal_0cfed374ab380d4d25fb685983d7b0510f17b52c26f29ba29e6722bc433a516a_prof);

    }

    public function getTemplateName()
    {
        return "cliente/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 15,  70 => 13,  65 => 11,  60 => 9,  56 => 8,  52 => 6,  43 => 5,  33 => 1,  31 => 3,  11 => 1,);
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

{% form_theme edit_form 'bootstrap_4_horizontal_layout.html.twig' %}

{% block body %}
    <h1>Cliente edit</h1>

    {{ form_start(edit_form) }}
    {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Salvar\" class=\"btn btn-success float-left\" />
    {{ form_end(edit_form) }}

    {{ form_start(delete_form) }}
        <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger\">
    {{ form_end(delete_form) }}
{% endblock %}
", "cliente/edit.html.twig", "/home/aluno/matheus-php2/sysvet/app/Resources/views/cliente/edit.html.twig");
    }
}
