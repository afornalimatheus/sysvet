<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_c6050198902f51836ce41e2cd763b8f30a40d3a670a7c089f848e402ab24e8a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a9c08e0c6d2226deb8fa1d24288b6255e6fc1f60fa6515fdfeb4c6419625e6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a9c08e0c6d2226deb8fa1d24288b6255e6fc1f60fa6515fdfeb4c6419625e6c->enter($__internal_5a9c08e0c6d2226deb8fa1d24288b6255e6fc1f60fa6515fdfeb4c6419625e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8f7f9010cfa92950ab687ea50047990e9e9e847e04a95ce7987c30f714cc0f8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f7f9010cfa92950ab687ea50047990e9e9e847e04a95ce7987c30f714cc0f8e->enter($__internal_8f7f9010cfa92950ab687ea50047990e9e9e847e04a95ce7987c30f714cc0f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a9c08e0c6d2226deb8fa1d24288b6255e6fc1f60fa6515fdfeb4c6419625e6c->leave($__internal_5a9c08e0c6d2226deb8fa1d24288b6255e6fc1f60fa6515fdfeb4c6419625e6c_prof);

        
        $__internal_8f7f9010cfa92950ab687ea50047990e9e9e847e04a95ce7987c30f714cc0f8e->leave($__internal_8f7f9010cfa92950ab687ea50047990e9e9e847e04a95ce7987c30f714cc0f8e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9a198adea2688fa8f57f4259dda117621f4b9b0b7734b6657e505938c283f980 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a198adea2688fa8f57f4259dda117621f4b9b0b7734b6657e505938c283f980->enter($__internal_9a198adea2688fa8f57f4259dda117621f4b9b0b7734b6657e505938c283f980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1af835cca5b2320c699096c495aa3f824445d530caa53294839e7680e67a535d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1af835cca5b2320c699096c495aa3f824445d530caa53294839e7680e67a535d->enter($__internal_1af835cca5b2320c699096c495aa3f824445d530caa53294839e7680e67a535d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_1af835cca5b2320c699096c495aa3f824445d530caa53294839e7680e67a535d->leave($__internal_1af835cca5b2320c699096c495aa3f824445d530caa53294839e7680e67a535d_prof);

        
        $__internal_9a198adea2688fa8f57f4259dda117621f4b9b0b7734b6657e505938c283f980->leave($__internal_9a198adea2688fa8f57f4259dda117621f4b9b0b7734b6657e505938c283f980_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/aluno/matheus-php2/sysvet/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
