<?php

/* bootstrap_4_layout.html.twig */
class __TwigTemplate_45bc32ce4ba2931b21dead330f0f60dfa91b06b74b77ad8f863b628cd7196a94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_4_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'money_widget' => array($this, 'block_money_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'widget_attributes' => array($this, 'block_widget_attributes'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'form_label' => array($this, 'block_form_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8582b2ae5fb26825b41d069b49b060ba81e316ca25e80adb339a817d235e202a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8582b2ae5fb26825b41d069b49b060ba81e316ca25e80adb339a817d235e202a->enter($__internal_8582b2ae5fb26825b41d069b49b060ba81e316ca25e80adb339a817d235e202a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        $__internal_abe2d9807943c752317bba515b32d509cfc20ba21082fc202015210e3852512c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abe2d9807943c752317bba515b32d509cfc20ba21082fc202015210e3852512c->enter($__internal_abe2d9807943c752317bba515b32d509cfc20ba21082fc202015210e3852512c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('money_widget', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('date_widget', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('time_widget', $context, $blocks);
        // line 50
        echo "
";
        // line 51
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 107
        echo "
";
        // line 108
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 117
        echo "
";
        // line 118
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 129
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 136
        $this->displayBlock('button_widget', $context, $blocks);
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 155
        echo "
";
        // line 156
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 170
        echo "
";
        // line 171
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 182
        echo "
";
        // line 184
        echo "
";
        // line 185
        $this->displayBlock('form_label', $context, $blocks);
        // line 209
        echo "
";
        // line 210
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 247
        echo "
";
        // line 249
        echo "
";
        // line 250
        $this->displayBlock('form_row', $context, $blocks);
        // line 259
        echo "
";
        // line 261
        echo "
";
        // line 262
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_8582b2ae5fb26825b41d069b49b060ba81e316ca25e80adb339a817d235e202a->leave($__internal_8582b2ae5fb26825b41d069b49b060ba81e316ca25e80adb339a817d235e202a_prof);

        
        $__internal_abe2d9807943c752317bba515b32d509cfc20ba21082fc202015210e3852512c->leave($__internal_abe2d9807943c752317bba515b32d509cfc20ba21082fc202015210e3852512c_prof);

    }

    // line 5
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_3eb54377beb60b351c9b162e5432b8d5096ff38e9401af4f1fb2675f25e9d3e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eb54377beb60b351c9b162e5432b8d5096ff38e9401af4f1fb2675f25e9d3e6->enter($__internal_3eb54377beb60b351c9b162e5432b8d5096ff38e9401af4f1fb2675f25e9d3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_b8abf4558cd562d1fe50167a6ede865a55de59fa8f664619cf4ea2775263a0fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8abf4558cd562d1fe50167a6ede865a55de59fa8f664619cf4ea2775263a0fc->enter($__internal_b8abf4558cd562d1fe50167a6ede865a55de59fa8f664619cf4ea2775263a0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 6
        $context["prepend"] =  !(is_string($__internal_e45c81899cda55db1324553bdee2966240e1aff520299e265b639607ed799702 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_9cfa4c26b7dc30b6095103f89aad473f7b27073abcfd4f7ff88a057fe5ccb5b1 = "{{") && ('' === $__internal_9cfa4c26b7dc30b6095103f89aad473f7b27073abcfd4f7ff88a057fe5ccb5b1 || 0 === strpos($__internal_e45c81899cda55db1324553bdee2966240e1aff520299e265b639607ed799702, $__internal_9cfa4c26b7dc30b6095103f89aad473f7b27073abcfd4f7ff88a057fe5ccb5b1)));
        // line 7
        $context["append"] =  !(is_string($__internal_b5ecd7dd920d3ea2d6d640030d65ace0902415d448d8724dbf6512a5093c6b5d = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_794fba168c4e7d188d35b787572683446188b6b63e6c769e5566cb71a2172a18 = "}}") && ('' === $__internal_794fba168c4e7d188d35b787572683446188b6b63e6c769e5566cb71a2172a18 || $__internal_794fba168c4e7d188d35b787572683446188b6b63e6c769e5566cb71a2172a18 === substr($__internal_b5ecd7dd920d3ea2d6d640030d65ace0902415d448d8724dbf6512a5093c6b5d, -strlen($__internal_794fba168c4e7d188d35b787572683446188b6b63e6c769e5566cb71a2172a18))));
        // line 8
        if ((($context["prepend"] ?? $this->getContext($context, "prepend")) || ($context["append"] ?? $this->getContext($context, "append")))) {
            // line 9
            echo "<div class=\"input-group";
            echo twig_escape_filter($this->env, ((array_key_exists("group_class", $context)) ? (_twig_default_filter(($context["group_class"] ?? $this->getContext($context, "group_class")), "")) : ("")), "html", null, true);
            echo "\">";
            // line 10
            if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
                // line 11
                echo "<div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">";
                // line 12
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
                </div>";
            }
            // line 15
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 16
            if (($context["append"] ?? $this->getContext($context, "append"))) {
                // line 17
                echo "<div class=\"input-group-append\">
                    <span class=\"input-group-text\">";
                // line 18
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
                </div>";
            }
            // line 21
            echo "</div>";
        } else {
            // line 23
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_b8abf4558cd562d1fe50167a6ede865a55de59fa8f664619cf4ea2775263a0fc->leave($__internal_b8abf4558cd562d1fe50167a6ede865a55de59fa8f664619cf4ea2775263a0fc_prof);

        
        $__internal_3eb54377beb60b351c9b162e5432b8d5096ff38e9401af4f1fb2675f25e9d3e6->leave($__internal_3eb54377beb60b351c9b162e5432b8d5096ff38e9401af4f1fb2675f25e9d3e6_prof);

    }

    // line 27
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_b078ea35f64976621590eb0985f86a20fa713099092b28c47639117e6cdfc3ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b078ea35f64976621590eb0985f86a20fa713099092b28c47639117e6cdfc3ec->enter($__internal_b078ea35f64976621590eb0985f86a20fa713099092b28c47639117e6cdfc3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_52822cc27c1b1b348382b05967c78ce244daf03c89856a4ee65446077b4bad1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52822cc27c1b1b348382b05967c78ce244daf03c89856a4ee65446077b4bad1c->enter($__internal_52822cc27c1b1b348382b05967c78ce244daf03c89856a4ee65446077b4bad1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 28
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 29
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 30
            $context["valid"] = true;
        }
        // line 32
        $this->displayParentBlock("datetime_widget", $context, $blocks);
        
        $__internal_52822cc27c1b1b348382b05967c78ce244daf03c89856a4ee65446077b4bad1c->leave($__internal_52822cc27c1b1b348382b05967c78ce244daf03c89856a4ee65446077b4bad1c_prof);

        
        $__internal_b078ea35f64976621590eb0985f86a20fa713099092b28c47639117e6cdfc3ec->leave($__internal_b078ea35f64976621590eb0985f86a20fa713099092b28c47639117e6cdfc3ec_prof);

    }

    // line 35
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_12e94573b4b3961ba21a16fcb89558fc3fecaabf0d7613f7f7b4a2562582b004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12e94573b4b3961ba21a16fcb89558fc3fecaabf0d7613f7f7b4a2562582b004->enter($__internal_12e94573b4b3961ba21a16fcb89558fc3fecaabf0d7613f7f7b4a2562582b004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_f32c091535bf4bb61c8e0af6b9830485bf56593cdac4bccc2dea42cd11b4be63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f32c091535bf4bb61c8e0af6b9830485bf56593cdac4bccc2dea42cd11b4be63->enter($__internal_f32c091535bf4bb61c8e0af6b9830485bf56593cdac4bccc2dea42cd11b4be63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 36
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 37
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 38
            $context["valid"] = true;
        }
        // line 40
        $this->displayParentBlock("date_widget", $context, $blocks);
        
        $__internal_f32c091535bf4bb61c8e0af6b9830485bf56593cdac4bccc2dea42cd11b4be63->leave($__internal_f32c091535bf4bb61c8e0af6b9830485bf56593cdac4bccc2dea42cd11b4be63_prof);

        
        $__internal_12e94573b4b3961ba21a16fcb89558fc3fecaabf0d7613f7f7b4a2562582b004->leave($__internal_12e94573b4b3961ba21a16fcb89558fc3fecaabf0d7613f7f7b4a2562582b004_prof);

    }

    // line 43
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_a416227cead4a8ea5e85bbc4bcd1d7f10aa551ce4cd5a96b92be20cdff6f8ed3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a416227cead4a8ea5e85bbc4bcd1d7f10aa551ce4cd5a96b92be20cdff6f8ed3->enter($__internal_a416227cead4a8ea5e85bbc4bcd1d7f10aa551ce4cd5a96b92be20cdff6f8ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_0d9c4ca972c066707ce872bcf11245d48905ba619fab06c059b98a5baee3efd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d9c4ca972c066707ce872bcf11245d48905ba619fab06c059b98a5baee3efd0->enter($__internal_0d9c4ca972c066707ce872bcf11245d48905ba619fab06c059b98a5baee3efd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 44
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 45
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 46
            $context["valid"] = true;
        }
        // line 48
        $this->displayParentBlock("time_widget", $context, $blocks);
        
        $__internal_0d9c4ca972c066707ce872bcf11245d48905ba619fab06c059b98a5baee3efd0->leave($__internal_0d9c4ca972c066707ce872bcf11245d48905ba619fab06c059b98a5baee3efd0_prof);

        
        $__internal_a416227cead4a8ea5e85bbc4bcd1d7f10aa551ce4cd5a96b92be20cdff6f8ed3->leave($__internal_a416227cead4a8ea5e85bbc4bcd1d7f10aa551ce4cd5a96b92be20cdff6f8ed3_prof);

    }

    // line 51
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_3f1671b3c198fb0e061c33501b60dd55e5e2d5d14255c2383055d8e5dbb3350c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f1671b3c198fb0e061c33501b60dd55e5e2d5d14255c2383055d8e5dbb3350c->enter($__internal_3f1671b3c198fb0e061c33501b60dd55e5e2d5d14255c2383055d8e5dbb3350c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_2ee65f95d041ad50f677d85f9926e3a0e15a0476d09b77ba8a06e1ed27847f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee65f95d041ad50f677d85f9926e3a0e15a0476d09b77ba8a06e1ed27847f80->enter($__internal_2ee65f95d041ad50f677d85f9926e3a0e15a0476d09b77ba8a06e1ed27847f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 52
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 53
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 54
            $context["valid"] = true;
        }
        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 60
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 61
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                // line 62
                echo "<div class=\"col-auto\">
                ";
                // line 63
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "
                ";
                // line 64
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "
            </div>";
            }
            // line 67
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                // line 68
                echo "<div class=\"col-auto\">
                ";
                // line 69
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "
                ";
                // line 70
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "
            </div>";
            }
            // line 73
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                // line 74
                echo "<div class=\"col-auto\">
                ";
                // line 75
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "
                ";
                // line 76
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "
            </div>";
            }
            // line 79
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                // line 80
                echo "<div class=\"col-auto\">
                ";
                // line 81
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "
                ";
                // line 82
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "
            </div>";
            }
            // line 85
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                // line 86
                echo "<div class=\"col-auto\">
                ";
                // line 87
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "
                ";
                // line 88
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "
            </div>";
            }
            // line 91
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                // line 92
                echo "<div class=\"col-auto\">
                ";
                // line 93
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "
                ";
                // line 94
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "
            </div>";
            }
            // line 97
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 98
                echo "<div class=\"col-auto\">
                ";
                // line 99
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "
                ";
                // line 100
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "
            </div>";
            }
            // line 103
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 104
            echo "</div>";
        }
        
        $__internal_2ee65f95d041ad50f677d85f9926e3a0e15a0476d09b77ba8a06e1ed27847f80->leave($__internal_2ee65f95d041ad50f677d85f9926e3a0e15a0476d09b77ba8a06e1ed27847f80_prof);

        
        $__internal_3f1671b3c198fb0e061c33501b60dd55e5e2d5d14255c2383055d8e5dbb3350c->leave($__internal_3f1671b3c198fb0e061c33501b60dd55e5e2d5d14255c2383055d8e5dbb3350c_prof);

    }

    // line 108
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_883c7d0fae9449c1aa610b891c058ffa3b0cdefca9cab58971d08690af88c926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_883c7d0fae9449c1aa610b891c058ffa3b0cdefca9cab58971d08690af88c926->enter($__internal_883c7d0fae9449c1aa610b891c058ffa3b0cdefca9cab58971d08690af88c926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_a1a04fbdc0dfbb64cde0ab7da64f3239720cb8b5e748bd303cc44bde73e4a751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1a04fbdc0dfbb64cde0ab7da64f3239720cb8b5e748bd303cc44bde73e4a751->enter($__internal_a1a04fbdc0dfbb64cde0ab7da64f3239720cb8b5e748bd303cc44bde73e4a751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 109
        echo "<div class=\"input-group";
        echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
        echo "\">
        ";
        // line 110
        $context["valid"] = true;
        // line 111
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 112
        echo "<div class=\"input-group-append\">
            <span class=\"input-group-text\">%</span>
        </div>
    </div>";
        
        $__internal_a1a04fbdc0dfbb64cde0ab7da64f3239720cb8b5e748bd303cc44bde73e4a751->leave($__internal_a1a04fbdc0dfbb64cde0ab7da64f3239720cb8b5e748bd303cc44bde73e4a751_prof);

        
        $__internal_883c7d0fae9449c1aa610b891c058ffa3b0cdefca9cab58971d08690af88c926->leave($__internal_883c7d0fae9449c1aa610b891c058ffa3b0cdefca9cab58971d08690af88c926_prof);

    }

    // line 118
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_07d0cd8dccf21d4bf7452dd3ef4b81e5235d782df85aef4e9822b35567835f24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07d0cd8dccf21d4bf7452dd3ef4b81e5235d782df85aef4e9822b35567835f24->enter($__internal_07d0cd8dccf21d4bf7452dd3ef4b81e5235d782df85aef4e9822b35567835f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_2493f933288c1e0ee563c37600edf70b43f2b8a1e23f5ceea69eae8827bcf23a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2493f933288c1e0ee563c37600edf70b43f2b8a1e23f5ceea69eae8827bcf23a->enter($__internal_2493f933288c1e0ee563c37600edf70b43f2b8a1e23f5ceea69eae8827bcf23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 119
        if (( !array_key_exists("type", $context) || (($context["type"] ?? $this->getContext($context, "type")) != "hidden"))) {
            // line 120
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control") . (((((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "")) : ("")) == "file")) ? ("-file") : (""))))));
        }
        // line 122
        if ((array_key_exists("type", $context) && ((($context["type"] ?? $this->getContext($context, "type")) == "range") || (($context["type"] ?? $this->getContext($context, "type")) == "color")))) {
            // line 123
            echo "        ";
            // line 124
            $context["required"] = false;
        }
        // line 126
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_2493f933288c1e0ee563c37600edf70b43f2b8a1e23f5ceea69eae8827bcf23a->leave($__internal_2493f933288c1e0ee563c37600edf70b43f2b8a1e23f5ceea69eae8827bcf23a_prof);

        
        $__internal_07d0cd8dccf21d4bf7452dd3ef4b81e5235d782df85aef4e9822b35567835f24->leave($__internal_07d0cd8dccf21d4bf7452dd3ef4b81e5235d782df85aef4e9822b35567835f24_prof);

    }

    // line 129
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_90b29694676302677cf5dc8bd1199cd6eb85186fedc7b47c5153538dc407b48d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90b29694676302677cf5dc8bd1199cd6eb85186fedc7b47c5153538dc407b48d->enter($__internal_90b29694676302677cf5dc8bd1199cd6eb85186fedc7b47c5153538dc407b48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_6cb4f4f89d495508e1e7af824cbac1288eb2706820703592725c9ad94bf31621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb4f4f89d495508e1e7af824cbac1288eb2706820703592725c9ad94bf31621->enter($__internal_6cb4f4f89d495508e1e7af824cbac1288eb2706820703592725c9ad94bf31621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 130
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            // line 131
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " is-invalid"))));
            // line 132
            echo "    ";
        }
        // line 133
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        
        $__internal_6cb4f4f89d495508e1e7af824cbac1288eb2706820703592725c9ad94bf31621->leave($__internal_6cb4f4f89d495508e1e7af824cbac1288eb2706820703592725c9ad94bf31621_prof);

        
        $__internal_90b29694676302677cf5dc8bd1199cd6eb85186fedc7b47c5153538dc407b48d->leave($__internal_90b29694676302677cf5dc8bd1199cd6eb85186fedc7b47c5153538dc407b48d_prof);

    }

    // line 136
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_ee9b89cf807cfb4e09b1c528df8843b847f1c17e499eab49991b826b050da47b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee9b89cf807cfb4e09b1c528df8843b847f1c17e499eab49991b826b050da47b->enter($__internal_ee9b89cf807cfb4e09b1c528df8843b847f1c17e499eab49991b826b050da47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_e9391d683c2df1ef616f6acc99873088fea3a10e42f89ff57eeba933cf66297f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9391d683c2df1ef616f6acc99873088fea3a10e42f89ff57eeba933cf66297f->enter($__internal_e9391d683c2df1ef616f6acc99873088fea3a10e42f89ff57eeba933cf66297f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 137
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-secondary")) : ("btn-secondary")) . " btn"))));
        // line 138
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_e9391d683c2df1ef616f6acc99873088fea3a10e42f89ff57eeba933cf66297f->leave($__internal_e9391d683c2df1ef616f6acc99873088fea3a10e42f89ff57eeba933cf66297f_prof);

        
        $__internal_ee9b89cf807cfb4e09b1c528df8843b847f1c17e499eab49991b826b050da47b->leave($__internal_ee9b89cf807cfb4e09b1c528df8843b847f1c17e499eab49991b826b050da47b_prof);

    }

    // line 141
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_0d00713986a472e2fb7661c6e9017f20ed360cf858dba4cdb0bfbdf9674d2064 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d00713986a472e2fb7661c6e9017f20ed360cf858dba4cdb0bfbdf9674d2064->enter($__internal_0d00713986a472e2fb7661c6e9017f20ed360cf858dba4cdb0bfbdf9674d2064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_699384105baf12251cc34e2b1c62d460f6cba61653c08e27cc19343442e6fb2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_699384105baf12251cc34e2b1c62d460f6cba61653c08e27cc19343442e6fb2f->enter($__internal_699384105baf12251cc34e2b1c62d460f6cba61653c08e27cc19343442e6fb2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 142
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 143
        if (twig_in_filter("checkbox-custom", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 144
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " custom-control-input"))));
            // line 145
            echo "<div class=\"custom-control custom-checkbox";
            echo ((twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) ? (" custom-control-inline") : (""));
            echo "\">";
            // line 146
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 147
            echo "</div>";
        } else {
            // line 149
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
            // line 150
            echo "<div class=\"form-check";
            echo ((twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) ? (" form-check-inline") : (""));
            echo "\">";
            // line 151
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 152
            echo "</div>";
        }
        
        $__internal_699384105baf12251cc34e2b1c62d460f6cba61653c08e27cc19343442e6fb2f->leave($__internal_699384105baf12251cc34e2b1c62d460f6cba61653c08e27cc19343442e6fb2f_prof);

        
        $__internal_0d00713986a472e2fb7661c6e9017f20ed360cf858dba4cdb0bfbdf9674d2064->leave($__internal_0d00713986a472e2fb7661c6e9017f20ed360cf858dba4cdb0bfbdf9674d2064_prof);

    }

    // line 156
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_fbdccaa32a6c24a199bd7109b7f7662c003ee28fc787afe0a7421fdb6848ae83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbdccaa32a6c24a199bd7109b7f7662c003ee28fc787afe0a7421fdb6848ae83->enter($__internal_fbdccaa32a6c24a199bd7109b7f7662c003ee28fc787afe0a7421fdb6848ae83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_61d5522333d7f230561986ea760cad699381040db7522d28ad37774c6023c837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61d5522333d7f230561986ea760cad699381040db7522d28ad37774c6023c837->enter($__internal_61d5522333d7f230561986ea760cad699381040db7522d28ad37774c6023c837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 157
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 158
        if (twig_in_filter("radio-custom", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 159
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " custom-control-input"))));
            // line 160
            echo "<div class=\"custom-control custom-radio";
            echo ((twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) ? (" custom-control-inline") : (""));
            echo "\">";
            // line 161
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 162
            echo "</div>";
        } else {
            // line 164
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
            // line 165
            echo "<div class=\"form-check";
            echo ((twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) ? (" form-check-inline") : (""));
            echo "\">";
            // line 166
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 167
            echo "</div>";
        }
        
        $__internal_61d5522333d7f230561986ea760cad699381040db7522d28ad37774c6023c837->leave($__internal_61d5522333d7f230561986ea760cad699381040db7522d28ad37774c6023c837_prof);

        
        $__internal_fbdccaa32a6c24a199bd7109b7f7662c003ee28fc787afe0a7421fdb6848ae83->leave($__internal_fbdccaa32a6c24a199bd7109b7f7662c003ee28fc787afe0a7421fdb6848ae83_prof);

    }

    // line 171
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_25584d5ea67940fc93a4252ec90d7d7d4aa79e3c098bfde9c35c21a9b6cbeae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25584d5ea67940fc93a4252ec90d7d7d4aa79e3c098bfde9c35c21a9b6cbeae3->enter($__internal_25584d5ea67940fc93a4252ec90d7d7d4aa79e3c098bfde9c35c21a9b6cbeae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_c138df21454d95d1bd1d2d4e434cb8dd10151f41e7b118a7eea5692bd8994773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c138df21454d95d1bd1d2d4e434cb8dd10151f41e7b118a7eea5692bd8994773->enter($__internal_c138df21454d95d1bd1d2d4e434cb8dd10151f41e7b118a7eea5692bd8994773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 172
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 174
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(            // line 175
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>             // line 176
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")), "valid" =>             // line 177
($context["valid"] ?? $this->getContext($context, "valid"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "</div>";
        
        $__internal_c138df21454d95d1bd1d2d4e434cb8dd10151f41e7b118a7eea5692bd8994773->leave($__internal_c138df21454d95d1bd1d2d4e434cb8dd10151f41e7b118a7eea5692bd8994773_prof);

        
        $__internal_25584d5ea67940fc93a4252ec90d7d7d4aa79e3c098bfde9c35c21a9b6cbeae3->leave($__internal_25584d5ea67940fc93a4252ec90d7d7d4aa79e3c098bfde9c35c21a9b6cbeae3_prof);

    }

    // line 185
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_b8599df2cde142f48f93bb8f7fbb4b35bab7da013859139e6cf2c1c4663323c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8599df2cde142f48f93bb8f7fbb4b35bab7da013859139e6cf2c1c4663323c8->enter($__internal_b8599df2cde142f48f93bb8f7fbb4b35bab7da013859139e6cf2c1c4663323c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_cdcba45c9d3a34cb5f339c5ca0ac41683cd48abfda00a27ff55ec1aff9049373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdcba45c9d3a34cb5f339c5ca0ac41683cd48abfda00a27ff55ec1aff9049373->enter($__internal_cdcba45c9d3a34cb5f339c5ca0ac41683cd48abfda00a27ff55ec1aff9049373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 186
        if ( !(($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 187
            if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
                // line 188
                $context["element"] = "legend";
                // line 189
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            } else {
                // line 191
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id")), "class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-control-label"))));
            }
            // line 193
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 194
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 196
            if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
                // line 197
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 198
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 199
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 200
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 203
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 206
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "label")) : ("label")), "html", null, true);
            if (($context["label_attr"] ?? $this->getContext($context, "label_attr"))) {
                $__internal_e1555edf9511b5aecd2bd465bb5bf683a8d5af73a3088f53f6acd6bc2be2070a = array("attr" => ($context["label_attr"] ?? $this->getContext($context, "label_attr")));
                if (!is_array($__internal_e1555edf9511b5aecd2bd465bb5bf683a8d5af73a3088f53f6acd6bc2be2070a)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_e1555edf9511b5aecd2bd465bb5bf683a8d5af73a3088f53f6acd6bc2be2070a);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
        $__internal_cdcba45c9d3a34cb5f339c5ca0ac41683cd48abfda00a27ff55ec1aff9049373->leave($__internal_cdcba45c9d3a34cb5f339c5ca0ac41683cd48abfda00a27ff55ec1aff9049373_prof);

        
        $__internal_b8599df2cde142f48f93bb8f7fbb4b35bab7da013859139e6cf2c1c4663323c8->leave($__internal_b8599df2cde142f48f93bb8f7fbb4b35bab7da013859139e6cf2c1c4663323c8_prof);

    }

    // line 210
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_38e5a9d258301f3c2e8adc9eaa2b46568cb08afbd78aca044b80169f63f5478a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38e5a9d258301f3c2e8adc9eaa2b46568cb08afbd78aca044b80169f63f5478a->enter($__internal_38e5a9d258301f3c2e8adc9eaa2b46568cb08afbd78aca044b80169f63f5478a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_c3d8e609f8e5f8827677434d7cbc3770f6a4961a39da3d7bb9392712578cf74a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d8e609f8e5f8827677434d7cbc3770f6a4961a39da3d7bb9392712578cf74a->enter($__internal_c3d8e609f8e5f8827677434d7cbc3770f6a4961a39da3d7bb9392712578cf74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 212
        if (array_key_exists("widget", $context)) {
            // line 213
            $context["is_parent_custom"] = (array_key_exists("parent_label_class", $context) && (twig_in_filter("checkbox-custom", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))) || twig_in_filter("radio-custom", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))));
            // line 214
            echo "        ";
            $context["is_custom"] = ($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true) && (twig_in_filter("checkbox-custom", $this->getAttribute(($context["label_attr"] ?? $this->getContext($context, "label_attr")), "class", array())) || twig_in_filter("radio-custom", $this->getAttribute(($context["label_attr"] ?? $this->getContext($context, "label_attr")), "class", array()))));
            // line 215
            if ((($context["is_parent_custom"] ?? $this->getContext($context, "is_parent_custom")) || ($context["is_custom"] ?? $this->getContext($context, "is_custom")))) {
                // line 216
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " custom-control-label"))));
            } else {
                // line 218
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-check-label"))));
            }
            // line 220
            if ( !($context["compound"] ?? $this->getContext($context, "compound"))) {
                // line 221
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
            }
            // line 223
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 224
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 226
            if (array_key_exists("parent_label_class", $context)) {
                // line 227
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))), array("checkbox-inline" => "", "radio-inline" => "", "checkbox-custom" => "", "radio-custom" => "")))));
            }
            // line 229
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 230
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 231
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 232
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 233
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 236
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 240
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo "
        <label";
            // line 241
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 242
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 243
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 244
            echo "</label>";
        }
        
        $__internal_c3d8e609f8e5f8827677434d7cbc3770f6a4961a39da3d7bb9392712578cf74a->leave($__internal_c3d8e609f8e5f8827677434d7cbc3770f6a4961a39da3d7bb9392712578cf74a_prof);

        
        $__internal_38e5a9d258301f3c2e8adc9eaa2b46568cb08afbd78aca044b80169f63f5478a->leave($__internal_38e5a9d258301f3c2e8adc9eaa2b46568cb08afbd78aca044b80169f63f5478a_prof);

    }

    // line 250
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_54c2075e8c22c68dd0aefc86aa2e58470f9cca2224826b83fe004efe6f452765 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54c2075e8c22c68dd0aefc86aa2e58470f9cca2224826b83fe004efe6f452765->enter($__internal_54c2075e8c22c68dd0aefc86aa2e58470f9cca2224826b83fe004efe6f452765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_9f01b1f11840159a4262a5dfdb9ae4b2871ca8c1cad10afaab3963e05c51ef1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f01b1f11840159a4262a5dfdb9ae4b2871ca8c1cad10afaab3963e05c51ef1b->enter($__internal_9f01b1f11840159a4262a5dfdb9ae4b2871ca8c1cad10afaab3963e05c51ef1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 251
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
            // line 252
            $context["element"] = "fieldset";
        }
        // line 254
        echo "<";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo " class=\"form-group\">";
        // line 255
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 256
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 257
        echo "</";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo ">";
        
        $__internal_9f01b1f11840159a4262a5dfdb9ae4b2871ca8c1cad10afaab3963e05c51ef1b->leave($__internal_9f01b1f11840159a4262a5dfdb9ae4b2871ca8c1cad10afaab3963e05c51ef1b_prof);

        
        $__internal_54c2075e8c22c68dd0aefc86aa2e58470f9cca2224826b83fe004efe6f452765->leave($__internal_54c2075e8c22c68dd0aefc86aa2e58470f9cca2224826b83fe004efe6f452765_prof);

    }

    // line 262
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_836ecdbe9033d28f8551d73218620902df3a994104649c3bb509a89db38ce37d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_836ecdbe9033d28f8551d73218620902df3a994104649c3bb509a89db38ce37d->enter($__internal_836ecdbe9033d28f8551d73218620902df3a994104649c3bb509a89db38ce37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_2fbd76f7494f1e8d76121e893333770e0de9a7db4424b66c8bc281397b199d9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fbd76f7494f1e8d76121e893333770e0de9a7db4424b66c8bc281397b199d9f->enter($__internal_2fbd76f7494f1e8d76121e893333770e0de9a7db4424b66c8bc281397b199d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 263
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 264
            echo "<div class=\"";
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "invalid-feedback d-block";
            } else {
                echo "alert alert-danger";
            }
            echo "\">
            <ul class=\"list-unstyled mb-0\">";
            // line 266
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 267
                echo "<li><span class=\"initialism form-error-icon badge badge-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Error", array(), "validators"), "html", null, true);
                echo "</span> <span class=\"form-error-message\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</span></li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 269
            echo "</ul>
        </div>";
        }
        
        $__internal_2fbd76f7494f1e8d76121e893333770e0de9a7db4424b66c8bc281397b199d9f->leave($__internal_2fbd76f7494f1e8d76121e893333770e0de9a7db4424b66c8bc281397b199d9f_prof);

        
        $__internal_836ecdbe9033d28f8551d73218620902df3a994104649c3bb509a89db38ce37d->leave($__internal_836ecdbe9033d28f8551d73218620902df3a994104649c3bb509a89db38ce37d_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  872 => 269,  862 => 267,  858 => 266,  849 => 264,  847 => 263,  838 => 262,  826 => 257,  824 => 256,  822 => 255,  818 => 254,  815 => 252,  813 => 251,  804 => 250,  793 => 244,  791 => 243,  789 => 242,  775 => 241,  771 => 240,  767 => 236,  764 => 233,  763 => 232,  762 => 231,  760 => 230,  758 => 229,  755 => 227,  753 => 226,  750 => 224,  748 => 223,  745 => 221,  743 => 220,  740 => 218,  737 => 216,  735 => 215,  732 => 214,  730 => 213,  728 => 212,  719 => 210,  691 => 206,  687 => 203,  684 => 200,  683 => 199,  682 => 198,  680 => 197,  678 => 196,  675 => 194,  673 => 193,  670 => 191,  667 => 189,  665 => 188,  663 => 187,  661 => 186,  652 => 185,  642 => 180,  636 => 177,  635 => 176,  634 => 175,  633 => 174,  629 => 173,  625 => 172,  616 => 171,  605 => 167,  603 => 166,  599 => 165,  597 => 164,  594 => 162,  592 => 161,  588 => 160,  586 => 159,  584 => 158,  582 => 157,  573 => 156,  562 => 152,  560 => 151,  556 => 150,  554 => 149,  551 => 147,  549 => 146,  545 => 145,  543 => 144,  541 => 143,  539 => 142,  530 => 141,  520 => 138,  518 => 137,  509 => 136,  499 => 133,  496 => 132,  493 => 131,  491 => 130,  482 => 129,  472 => 126,  469 => 124,  467 => 123,  465 => 122,  462 => 120,  460 => 119,  451 => 118,  438 => 112,  436 => 111,  434 => 110,  429 => 109,  420 => 108,  409 => 104,  405 => 103,  400 => 100,  396 => 99,  393 => 98,  391 => 97,  386 => 94,  382 => 93,  379 => 92,  377 => 91,  372 => 88,  368 => 87,  365 => 86,  363 => 85,  358 => 82,  354 => 81,  351 => 80,  349 => 79,  344 => 76,  340 => 75,  337 => 74,  335 => 73,  330 => 70,  326 => 69,  323 => 68,  321 => 67,  316 => 64,  312 => 63,  309 => 62,  307 => 61,  303 => 60,  301 => 59,  298 => 57,  296 => 56,  293 => 54,  291 => 53,  289 => 52,  280 => 51,  270 => 48,  267 => 46,  265 => 45,  263 => 44,  254 => 43,  244 => 40,  241 => 38,  239 => 37,  237 => 36,  228 => 35,  218 => 32,  215 => 30,  213 => 29,  211 => 28,  202 => 27,  191 => 23,  188 => 21,  183 => 18,  180 => 17,  178 => 16,  176 => 15,  171 => 12,  168 => 11,  166 => 10,  162 => 9,  160 => 8,  158 => 7,  156 => 6,  147 => 5,  137 => 262,  134 => 261,  131 => 259,  129 => 250,  126 => 249,  123 => 247,  121 => 210,  118 => 209,  116 => 185,  113 => 184,  110 => 182,  108 => 171,  105 => 170,  103 => 156,  100 => 155,  98 => 141,  95 => 140,  93 => 136,  91 => 129,  89 => 118,  86 => 117,  84 => 108,  81 => 107,  79 => 51,  76 => 50,  74 => 43,  71 => 42,  69 => 35,  66 => 34,  64 => 27,  61 => 26,  59 => 5,  56 => 4,  53 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block money_widget -%}
    {%- set prepend = not (money_pattern starts with '{{') -%}
    {%- set append = not (money_pattern ends with '}}') -%}
    {%- if prepend or append -%}
        <div class=\"input-group{{ group_class|default('') }}\">
            {%- if prepend -%}
                <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
                </div>
            {%- endif -%}
            {{- block('form_widget_simple') -}}
            {%- if append -%}
                <div class=\"input-group-append\">
                    <span class=\"input-group-text\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
                </div>
            {%- endif -%}
        </div>
    {%- else -%}
        {{- block('form_widget_simple') -}}
    {%- endif -%}
{%- endblock money_widget %}

{% block datetime_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock time_widget %}

{% block dateinterval_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {%- if with_years -%}
            <div class=\"col-auto\">
                {{ form_label(form.years) }}
                {{ form_widget(form.years) }}
            </div>
            {%- endif -%}
            {%- if with_months -%}
            <div class=\"col-auto\">
                {{ form_label(form.months) }}
                {{ form_widget(form.months) }}
            </div>
            {%- endif -%}
            {%- if with_weeks -%}
            <div class=\"col-auto\">
                {{ form_label(form.weeks) }}
                {{ form_widget(form.weeks) }}
            </div>
            {%- endif -%}
            {%- if with_days -%}
            <div class=\"col-auto\">
                {{ form_label(form.days) }}
                {{ form_widget(form.days) }}
            </div>
            {%- endif -%}
            {%- if with_hours -%}
            <div class=\"col-auto\">
                {{ form_label(form.hours) }}
                {{ form_widget(form.hours) }}
            </div>
            {%- endif -%}
            {%- if with_minutes -%}
            <div class=\"col-auto\">
                {{ form_label(form.minutes) }}
                {{ form_widget(form.minutes) }}
            </div>
            {%- endif -%}
            {%- if with_seconds -%}
            <div class=\"col-auto\">
                {{ form_label(form.seconds) }}
                {{ form_widget(form.seconds) }}
            </div>
            {%- endif -%}
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget %}

{% block percent_widget -%}
    <div class=\"input-group{{ not valid ? ' form-control is-invalid' }}\">
        {% set valid = true %}
        {{- block('form_widget_simple') -}}
        <div class=\"input-group-append\">
            <span class=\"input-group-text\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type != 'hidden' %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control' ~ (type|default('') == 'file' ? '-file' : ''))|trim}) -%}
    {% endif %}
    {%- if type is defined and (type == 'range' or type == 'color') %}
        {# Attribute \"required\" is not supported #}
        {%- set required = false -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{%- block widget_attributes -%}
    {%- if not valid %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' is-invalid')|trim}) %}
    {% endif -%}
    {{ parent() }}
{%- endblock widget_attributes -%}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-secondary') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- if 'checkbox-custom' in parent_label_class -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' custom-control-input')|trim}) -%}
        <div class=\"custom-control custom-checkbox{{ 'checkbox-inline' in parent_label_class ? ' custom-control-inline' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
        <div class=\"form-check{{ 'checkbox-inline' in parent_label_class ? ' form-check-inline' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- if 'radio-custom' in parent_label_class -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' custom-control-input')|trim}) -%}
        <div class=\"custom-control custom-radio{{ 'radio-inline' in parent_label_class ? ' custom-control-inline' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
        <div class=\"form-check{{ 'radio-inline' in parent_label_class ? ' form-check-inline' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{% block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
                valid: valid,
            }) -}}
        {% endfor -%}
    </div>
{%- endblock choice_widget_expanded %}

{# Labels #}

{% block form_label -%}
    {% if label is not same as(false) -%}
        {%- if compound is defined and compound -%}
            {%- set element = 'legend' -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- else -%}
            {%- set label_attr = label_attr|merge({for: id, class: (label_attr.class|default('') ~ ' form-control-label')|trim}) -%}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <{{ element|default('label') }}{% if label_attr %}{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}{% endif %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}{{- form_errors(form) -}}</{{ element|default('label') }}>
    {%- endif -%}
{%- endblock form_label %}

{% block checkbox_radio_label -%}
    {#- Do not display the label if widget is not defined in order to prevent double label rendering -#}
    {%- if widget is defined -%}
        {% set is_parent_custom = parent_label_class is defined and ('checkbox-custom' in parent_label_class or 'radio-custom' in parent_label_class) %}
        {% set is_custom = label_attr.class is defined and ('checkbox-custom' in label_attr.class or 'radio-custom' in label_attr.class) %}
        {%- if is_parent_custom or is_custom -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' custom-control-label')|trim}) -%}
        {%- else %}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-check-label')|trim}) -%}
        {%- endif %}
        {%- if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|replace({'checkbox-inline': '', 'radio-inline': '', 'checkbox-custom': '', 'radio-custom': ''})|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {%- set label = name|humanize -%}
            {%- endif -%}
        {%- endif -%}

        {{ widget|raw }}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
            {{- form_errors(form) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'fieldset' -%}
    {%- endif -%}
    <{{ element|default('div') }} class=\"form-group\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
    </{{ element|default('div') }}>
{%- endblock form_row %}

{# Errors #}

{% block form_errors -%}
    {%- if errors|length > 0 -%}
        <div class=\"{% if form is not rootform %}invalid-feedback d-block{% else %}alert alert-danger{% endif %}\">
            <ul class=\"list-unstyled mb-0\">
                {%- for error in errors -%}
                    <li><span class=\"initialism form-error-icon badge badge-danger\">{{ 'Error'|trans({}, 'validators') }}</span> <span class=\"form-error-message\">{{ error.message }}</span></li>
                {%- endfor -%}
            </ul>
        </div>
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_4_layout.html.twig", "/home/aluno/matheus-php2/sysvet/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_4_layout.html.twig");
    }
}
