<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* form_div_layout.html.twig */
class __TwigTemplate_f0dd4b0b0a83a6b74029f3a283bf3bdc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'form_widget' => [$this, 'block_form_widget'],
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'form_widget_compound' => [$this, 'block_form_widget_compound'],
            'collection_widget' => [$this, 'block_collection_widget'],
            'textarea_widget' => [$this, 'block_textarea_widget'],
            'choice_widget' => [$this, 'block_choice_widget'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
            'choice_widget_options' => [$this, 'block_choice_widget_options'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
            'radio_widget' => [$this, 'block_radio_widget'],
            'datetime_widget' => [$this, 'block_datetime_widget'],
            'date_widget' => [$this, 'block_date_widget'],
            'time_widget' => [$this, 'block_time_widget'],
            'dateinterval_widget' => [$this, 'block_dateinterval_widget'],
            'number_widget' => [$this, 'block_number_widget'],
            'integer_widget' => [$this, 'block_integer_widget'],
            'money_widget' => [$this, 'block_money_widget'],
            'url_widget' => [$this, 'block_url_widget'],
            'search_widget' => [$this, 'block_search_widget'],
            'percent_widget' => [$this, 'block_percent_widget'],
            'password_widget' => [$this, 'block_password_widget'],
            'hidden_widget' => [$this, 'block_hidden_widget'],
            'email_widget' => [$this, 'block_email_widget'],
            'range_widget' => [$this, 'block_range_widget'],
            'button_widget' => [$this, 'block_button_widget'],
            'submit_widget' => [$this, 'block_submit_widget'],
            'reset_widget' => [$this, 'block_reset_widget'],
            'tel_widget' => [$this, 'block_tel_widget'],
            'color_widget' => [$this, 'block_color_widget'],
            'week_widget' => [$this, 'block_week_widget'],
            'form_label' => [$this, 'block_form_label'],
            'form_label_content' => [$this, 'block_form_label_content'],
            'button_label' => [$this, 'block_button_label'],
            'form_help' => [$this, 'block_form_help'],
            'form_help_content' => [$this, 'block_form_help_content'],
            'repeated_row' => [$this, 'block_repeated_row'],
            'form_row' => [$this, 'block_form_row'],
            'button_row' => [$this, 'block_button_row'],
            'hidden_row' => [$this, 'block_hidden_row'],
            'form' => [$this, 'block_form'],
            'form_start' => [$this, 'block_form_start'],
            'form_end' => [$this, 'block_form_end'],
            'form_errors' => [$this, 'block_form_errors'],
            'form_rest' => [$this, 'block_form_rest'],
            'form_rows' => [$this, 'block_form_rows'],
            'widget_attributes' => [$this, 'block_widget_attributes'],
            'widget_container_attributes' => [$this, 'block_widget_container_attributes'],
            'button_attributes' => [$this, 'block_button_attributes'],
            'attributes' => [$this, 'block_attributes'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 20
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 30
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 37
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 41
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 49
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 58
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 80
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 93
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 97
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 101
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 114
        $this->displayBlock('date_widget', $context, $blocks);
        // line 128
        $this->displayBlock('time_widget', $context, $blocks);
        // line 139
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 174
        $this->displayBlock('number_widget', $context, $blocks);
        // line 180
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 185
        $this->displayBlock('money_widget', $context, $blocks);
        // line 189
        $this->displayBlock('url_widget', $context, $blocks);
        // line 194
        $this->displayBlock('search_widget', $context, $blocks);
        // line 199
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 204
        $this->displayBlock('password_widget', $context, $blocks);
        // line 209
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 214
        $this->displayBlock('email_widget', $context, $blocks);
        // line 219
        $this->displayBlock('range_widget', $context, $blocks);
        // line 224
        $this->displayBlock('button_widget', $context, $blocks);
        // line 252
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 257
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 262
        $this->displayBlock('tel_widget', $context, $blocks);
        // line 267
        $this->displayBlock('color_widget', $context, $blocks);
        // line 272
        $this->displayBlock('week_widget', $context, $blocks);
        // line 285
        $this->displayBlock('form_label', $context, $blocks);
        // line 299
        $this->displayBlock('form_label_content', $context, $blocks);
        // line 325
        $this->displayBlock('button_label', $context, $blocks);
        // line 328
        echo "
";
        // line 329
        $this->displayBlock('form_help', $context, $blocks);
        // line 337
        echo "
";
        // line 338
        $this->displayBlock('form_help_content', $context, $blocks);
        // line 353
        echo "
";
        // line 356
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 364
        $this->displayBlock('form_row', $context, $blocks);
        // line 377
        $this->displayBlock('button_row', $context, $blocks);
        // line 383
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 389
        $this->displayBlock('form', $context, $blocks);
        // line 395
        $this->displayBlock('form_start', $context, $blocks);
        // line 409
        $this->displayBlock('form_end', $context, $blocks);
        // line 416
        $this->displayBlock('form_errors', $context, $blocks);
        // line 426
        $this->displayBlock('form_rest', $context, $blocks);
        // line 447
        echo "
";
        // line 450
        $this->displayBlock('form_rows', $context, $blocks);
        // line 456
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 463
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 468
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 473
        $this->displayBlock('attributes', $context, $blocks);
    }

    // line 3
    public function block_form_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        if (($context["compound"] ?? null)) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 13
        if (((($context["type"] ?? null) == "range") || (($context["type"] ?? null) == "color"))) {
            // line 15
            $context["required"] = false;
        }
        // line 17
        echo "<input type=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
        }
        echo "/>";
    }

    // line 20
    public function block_form_widget_compound($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 22
        if (Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        }
        // line 25
        $this->displayBlock("form_rows", $context, $blocks);
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        // line 27
        echo "</div>";
    }

    // line 30
    public function block_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        if ((array_key_exists("prototype", $context) &&  !twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "rendered", [], "any", false, false, false, 31))) {
            // line 32
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row')]);
        }
        // line 34
        $this->displayBlock("form_widget", $context, $blocks);
    }

    // line 37
    public function block_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "</textarea>";
    }

    // line 41
    public function block_choice_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        if (($context["expanded"] ?? null)) {
            // line 43
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 45
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
    }

    // line 49
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["translation_domain" => ($context["choice_translation_domain"] ?? null)]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "</div>";
    }

    // line 58
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        if (((((($context["required"] ?? null) && (null === ($context["placeholder"] ?? null))) &&  !($context["placeholder_in_choices"] ?? null)) &&  !($context["multiple"] ?? null)) && ( !twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "size", [], "any", true, true, false, 59) || (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "size", [], "any", false, false, false, 59) <= 1)))) {
            // line 60
            $context["required"] = false;
        }
        // line 62
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? null)) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 63
        if ( !(null === ($context["placeholder"] ?? null))) {
            // line 64
            echo "<option value=\"\"";
            if (((array_key_exists("placeholder_attr", $context)) ? (_twig_default_filter(($context["placeholder_attr"] ?? null), [])) : ([]))) {
                $__internal_compile_0 = $context;
                $__internal_compile_1 = ["attr" => ($context["placeholder_attr"] ?? null)];
                if (!twig_test_iterable($__internal_compile_1)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 64, $this->getSourceContext());
                }
                $__internal_compile_1 = twig_to_array($__internal_compile_1);
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
                $this->displayBlock("attributes", $context, $blocks);
                $context = $__internal_compile_0;
            }
            if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            (((($context["placeholder"] ?? null) != "")) ? (print (twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["placeholder"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["placeholder"] ?? null), [], ($context["translation_domain"] ?? null)))), "html", null, true))) : (print ("")));
            echo "</option>";
        }
        // line 66
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? null)) > 0)) {
            // line 67
            $context["options"] = ($context["preferred_choices"] ?? null);
            // line 68
            echo "            ";
            $context["render_preferred_choices"] = true;
            // line 69
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 70
            if (((twig_length_filter($this->env, ($context["choices"] ?? null)) > 0) &&  !(null === ($context["separator"] ?? null)))) {
                // line 71
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? null), "html", null, true);
                echo "</option>";
            }
        }
        // line 74
        $context["options"] = ($context["choices"] ?? null);
        // line 75
        $context["render_preferred_choices"] = false;
        // line 76
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 77
        echo "</select>";
    }

    // line 80
    public function block_choice_widget_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 82
            if (twig_test_iterable($context["choice"])) {
                // line 83
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? null) === false)) ? ($context["group_label"]) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["group_label"], [], ($context["choice_translation_domain"] ?? null)))), "html", null, true);
                echo "\">
                ";
                // line 84
                $context["options"] = $context["choice"];
                // line 85
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 86
                echo "</optgroup>";
            } else {
                // line 88
                echo "<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 88), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 88)) {
                    $__internal_compile_2 = $context;
                    $__internal_compile_3 = ["attr" => twig_get_attribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 88)];
                    if (!twig_test_iterable($__internal_compile_3)) {
                        throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 88, $this->getSourceContext());
                    }
                    $__internal_compile_3 = twig_to_array($__internal_compile_3);
                    $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_3));
                    $this->displayBlock("attributes", $context, $blocks);
                    $context = $__internal_compile_2;
                }
                if (( !((array_key_exists("render_preferred_choices", $context)) ? (_twig_default_filter(($context["render_preferred_choices"] ?? null), false)) : (false)) && Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null)))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? null) === false)) ? (twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 88)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 88), twig_get_attribute($this->env, $this->source, $context["choice"], "labelTranslationParameters", [], "any", false, false, false, 88), ($context["choice_translation_domain"] ?? null)))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 93
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 94
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " />";
    }

    // line 97
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " />";
    }

    // line 101
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 102
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 103
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 105
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 106
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 106), 'errors');
            // line 107
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 107), 'errors');
            // line 108
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 108), 'widget');
            // line 109
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 109), 'widget');
            // line 110
            echo "</div>";
        }
    }

    // line 114
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 115
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 116
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 118
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 119
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 120
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 120), 'widget'), "{{ month }}" =>             // line 121
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 121), 'widget'), "{{ day }}" =>             // line 122
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 122), 'widget')]);
            // line 124
            echo "</div>";
        }
    }

    // line 128
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 129
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 130
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 132
            $context["vars"] = (((($context["widget"] ?? null) == "text")) ? (["attr" => ["size" => 1]]) : ([]));
            // line 133
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 134
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, false, 134), 'widget', ($context["vars"] ?? null));
            if (($context["with_minutes"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, false, 134), 'widget', ($context["vars"] ?? null));
            }
            if (($context["with_seconds"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, false, 134), 'widget', ($context["vars"] ?? null));
            }
            // line 135
            echo "        </div>";
        }
    }

    // line 139
    public function block_dateinterval_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 140
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 141
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 143
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 144
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            // line 145
            echo "<table class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? null), "")) : ("")), "html", null, true);
            echo "\" role=\"presentation\">
                <thead>
                    <tr>";
            // line 148
            if (($context["with_years"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, false, 148), 'label');
                echo "</th>";
            }
            // line 149
            if (($context["with_months"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, false, 149), 'label');
                echo "</th>";
            }
            // line 150
            if (($context["with_weeks"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, false, 150), 'label');
                echo "</th>";
            }
            // line 151
            if (($context["with_days"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, false, 151), 'label');
                echo "</th>";
            }
            // line 152
            if (($context["with_hours"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, false, 152), 'label');
                echo "</th>";
            }
            // line 153
            if (($context["with_minutes"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, false, 153), 'label');
                echo "</th>";
            }
            // line 154
            if (($context["with_seconds"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, false, 154), 'label');
                echo "</th>";
            }
            // line 155
            echo "</tr>
                </thead>
                <tbody>
                    <tr>";
            // line 159
            if (($context["with_years"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, false, 159), 'widget');
                echo "</td>";
            }
            // line 160
            if (($context["with_months"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, false, 160), 'widget');
                echo "</td>";
            }
            // line 161
            if (($context["with_weeks"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, false, 161), 'widget');
                echo "</td>";
            }
            // line 162
            if (($context["with_days"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, false, 162), 'widget');
                echo "</td>";
            }
            // line 163
            if (($context["with_hours"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, false, 163), 'widget');
                echo "</td>";
            }
            // line 164
            if (($context["with_minutes"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, false, 164), 'widget');
                echo "</td>";
            }
            // line 165
            if (($context["with_seconds"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, false, 165), 'widget');
                echo "</td>";
            }
            // line 166
            echo "</tr>
                </tbody>
            </table>";
            // line 169
            if (($context["with_invert"] ?? null)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "invert", [], "any", false, false, false, 169), 'widget');
            }
            // line 170
            echo "</div>";
        }
    }

    // line 174
    public function block_number_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 176
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 177
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 180
    public function block_integer_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 181
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "number")) : ("number"));
        // line 182
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 185
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 186
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null),         $this->renderBlock("form_widget_simple", $context, $blocks));
    }

    // line 189
    public function block_url_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 190
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "url")) : ("url"));
        // line 191
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 194
    public function block_search_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 195
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "search")) : ("search"));
        // line 196
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 199
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 200
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 201
        $this->displayBlock("form_widget_simple", $context, $blocks);
        if (($context["symbol"] ?? null)) {
            echo " ";
            echo twig_escape_filter($this->env, ((array_key_exists("symbol", $context)) ? (_twig_default_filter(($context["symbol"] ?? null), "%")) : ("%")), "html", null, true);
        }
    }

    // line 204
    public function block_password_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 205
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "password")) : ("password"));
        // line 206
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 209
    public function block_hidden_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 210
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "hidden")) : ("hidden"));
        // line 211
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 214
    public function block_email_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 215
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "email")) : ("email"));
        // line 216
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 219
    public function block_range_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 220
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "range")) : ("range"));
        // line 221
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 224
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 225
        if (twig_test_empty(($context["label"] ?? null))) {
            // line 226
            if ( !twig_test_empty(($context["label_format"] ?? null))) {
                // line 227
                $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                 // line 228
($context["name"] ?? null), "%id%" =>                 // line 229
($context["id"] ?? null)]);
            } elseif ( !(            // line 231
($context["label"] ?? null) === false)) {
                // line 232
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
            }
        }
        // line 235
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        // line 236
        if ((($context["translation_domain"] ?? null) === false)) {
            // line 237
            if ((($context["label_html"] ?? null) === false)) {
                // line 238
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            } else {
                // line 240
                echo ($context["label"] ?? null);
            }
        } else {
            // line 243
            if ((($context["label_html"] ?? null) === false)) {
                // line 244
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
            } else {
                // line 246
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
            }
        }
        // line 249
        echo "</button>";
    }

    // line 252
    public function block_submit_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 253
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "submit")) : ("submit"));
        // line 254
        $this->displayBlock("button_widget", $context, $blocks);
    }

    // line 257
    public function block_reset_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 258
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "reset")) : ("reset"));
        // line 259
        $this->displayBlock("button_widget", $context, $blocks);
    }

    // line 262
    public function block_tel_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 263
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "tel")) : ("tel"));
        // line 264
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 267
    public function block_color_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 268
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "color")) : ("color"));
        // line 269
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 272
    public function block_week_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 273
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 274
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 276
            $context["vars"] = (((($context["widget"] ?? null) == "text")) ? (["attr" => ["size" => 1]]) : ([]));
            // line 277
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 278
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 278), 'widget', ($context["vars"] ?? null));
            echo "-";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "week", [], "any", false, false, false, 278), 'widget', ($context["vars"] ?? null));
            echo "
        </div>";
        }
    }

    // line 285
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 286
        if ( !(($context["label"] ?? null) === false)) {
            // line 287
            if ( !($context["compound"] ?? null)) {
                // line 288
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
            }
            // line 290
            if (($context["required"] ?? null)) {
                // line 291
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 291)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 291), "")) : ("")) . " required"))]);
            }
            // line 293
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            if (($context["label_attr"] ?? null)) {
                $__internal_compile_4 = $context;
                $__internal_compile_5 = ["attr" => ($context["label_attr"] ?? null)];
                if (!twig_test_iterable($__internal_compile_5)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 293, $this->getSourceContext());
                }
                $__internal_compile_5 = twig_to_array($__internal_compile_5);
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_5));
                $this->displayBlock("attributes", $context, $blocks);
                $context = $__internal_compile_4;
            }
            echo ">";
            // line 294
            $this->displayBlock("form_label_content", $context, $blocks);
            // line 295
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            echo ">";
        }
    }

    // line 299
    public function block_form_label_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 300
        if (twig_test_empty(($context["label"] ?? null))) {
            // line 301
            if ( !twig_test_empty(($context["label_format"] ?? null))) {
                // line 302
                $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                 // line 303
($context["name"] ?? null), "%id%" =>                 // line 304
($context["id"] ?? null)]);
            } else {
                // line 307
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
            }
        }
        // line 310
        if ((($context["translation_domain"] ?? null) === false)) {
            // line 311
            if ((($context["label_html"] ?? null) === false)) {
                // line 312
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            } else {
                // line 314
                echo ($context["label"] ?? null);
            }
        } else {
            // line 317
            if ((($context["label_html"] ?? null) === false)) {
                // line 318
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
            } else {
                // line 320
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
            }
        }
    }

    // line 325
    public function block_button_label($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 329
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 330
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 331
            $context["help_attr"] = twig_array_merge(($context["help_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 331)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, false, 331), "")) : ("")) . " help-text"))]);
            // line 332
            echo "<div id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "_help\"";
            $__internal_compile_6 = $context;
            $__internal_compile_7 = ["attr" => ($context["help_attr"] ?? null)];
            if (!twig_test_iterable($__internal_compile_7)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 332, $this->getSourceContext());
            }
            $__internal_compile_7 = twig_to_array($__internal_compile_7);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_7));
            $this->displayBlock("attributes", $context, $blocks);
            $context = $__internal_compile_6;
            echo ">";
            // line 333
            $this->displayBlock("form_help_content", $context, $blocks);
            // line 334
            echo "</div>";
        }
    }

    // line 338
    public function block_form_help_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 339
        if ((($context["translation_domain"] ?? null) === false)) {
            // line 340
            if ((($context["help_html"] ?? null) === false)) {
                // line 341
                echo twig_escape_filter($this->env, ($context["help"] ?? null), "html", null, true);
            } else {
                // line 343
                echo ($context["help"] ?? null);
            }
        } else {
            // line 346
            if ((($context["help_html"] ?? null) === false)) {
                // line 347
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["help"] ?? null), ($context["help_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
            } else {
                // line 349
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["help"] ?? null), ($context["help_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
            }
        }
    }

    // line 356
    public function block_repeated_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 361
        $this->displayBlock("form_rows", $context, $blocks);
    }

    // line 364
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 365
        $context["widget_attr"] = [];
        // line 366
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 367
            $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
        }
        // line 369
        echo "<div";
        $__internal_compile_8 = $context;
        $__internal_compile_9 = ["attr" => ($context["row_attr"] ?? null)];
        if (!twig_test_iterable($__internal_compile_9)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 369, $this->getSourceContext());
        }
        $__internal_compile_9 = twig_to_array($__internal_compile_9);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_9));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_8;
        echo ">";
        // line 370
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 371
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 372
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 373
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 374
        echo "</div>";
    }

    // line 377
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 378
        echo "<div";
        $__internal_compile_10 = $context;
        $__internal_compile_11 = ["attr" => ($context["row_attr"] ?? null)];
        if (!twig_test_iterable($__internal_compile_11)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 378, $this->getSourceContext());
        }
        $__internal_compile_11 = twig_to_array($__internal_compile_11);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_11));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_10;
        echo ">";
        // line 379
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 380
        echo "</div>";
    }

    // line 383
    public function block_hidden_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 384
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
    }

    // line 389
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 390
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        // line 391
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 392
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
    }

    // line 395
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 396
        twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "setMethodRendered", [], "method", false, false, false, 396);
        // line 397
        $context["method"] = twig_upper_filter($this->env, ($context["method"] ?? null));
        // line 398
        if (twig_in_filter(($context["method"] ?? null), [0 => "GET", 1 => "POST"])) {
            // line 399
            $context["form_method"] = ($context["method"] ?? null);
        } else {
            // line 401
            $context["form_method"] = "POST";
        }
        // line 403
        echo "<form";
        if ((($context["name"] ?? null) != "")) {
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"";
        }
        echo " method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["form_method"] ?? null)), "html", null, true);
        echo "\"";
        if ((($context["action"] ?? null) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
            echo "\"";
        }
        $this->displayBlock("attributes", $context, $blocks);
        if (($context["multipart"] ?? null)) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 404
        if ((($context["form_method"] ?? null) != ($context["method"] ?? null))) {
            // line 405
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
            echo "\" />";
        }
    }

    // line 409
    public function block_form_end($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 410
        if (( !array_key_exists("render_rest", $context) || ($context["render_rest"] ?? null))) {
            // line 411
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        }
        // line 413
        echo "</form>";
    }

    // line 416
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 417
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 418
            echo "<ul>";
            // line 419
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 420
                echo "<li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 420), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 422
            echo "</ul>";
        }
    }

    // line 426
    public function block_form_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 427
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 428
            if ( !twig_get_attribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 428)) {
                // line 429
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 433
        if (( !twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "methodRendered", [], "any", false, false, false, 433) && Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null)))) {
            // line 434
            twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "setMethodRendered", [], "method", false, false, false, 434);
            // line 435
            $context["method"] = twig_upper_filter($this->env, ($context["method"] ?? null));
            // line 436
            if (twig_in_filter(($context["method"] ?? null), [0 => "GET", 1 => "POST"])) {
                // line 437
                $context["form_method"] = ($context["method"] ?? null);
            } else {
                // line 439
                $context["form_method"] = "POST";
            }
            // line 442
            if ((($context["form_method"] ?? null) != ($context["method"] ?? null))) {
                // line 443
                echo "<input type=\"hidden\" name=\"_method\" value=\"";
                echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
                echo "\" />";
            }
        }
    }

    // line 450
    public function block_form_rows($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 451
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__child__) use ($context, $macros) { $context["child"] = $__child__; return  !twig_get_attribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 451); }));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 452
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 456
    public function block_widget_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 457
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\"";
        // line 458
        if (($context["disabled"] ?? null)) {
            echo " disabled=\"disabled\"";
        }
        // line 459
        if (($context["required"] ?? null)) {
            echo " required=\"required\"";
        }
        // line 460
        $this->displayBlock("attributes", $context, $blocks);
    }

    // line 463
    public function block_widget_container_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 464
        if ( !twig_test_empty(($context["id"] ?? null))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 465
        $this->displayBlock("attributes", $context, $blocks);
    }

    // line 468
    public function block_button_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 469
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\"";
        if (($context["disabled"] ?? null)) {
            echo " disabled=\"disabled\"";
        }
        // line 470
        $this->displayBlock("attributes", $context, $blocks);
    }

    // line 473
    public function block_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 474
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 475
            echo " ";
            // line 476
            if (twig_in_filter($context["attrname"], [0 => "placeholder", 1 => "title"])) {
                // line 477
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((($context["translation_domain"] ?? null) === false) || (null === $context["attrvalue"]))) ? ($context["attrvalue"]) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["attrvalue"], ($context["attr_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)))), "html", null, true);
                echo "\"";
            } elseif ((            // line 478
$context["attrvalue"] === true)) {
                // line 479
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 480
$context["attrvalue"] === false)) {
                // line 481
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1358 => 481,  1356 => 480,  1351 => 479,  1349 => 478,  1344 => 477,  1342 => 476,  1340 => 475,  1336 => 474,  1332 => 473,  1328 => 470,  1319 => 469,  1315 => 468,  1311 => 465,  1305 => 464,  1301 => 463,  1297 => 460,  1293 => 459,  1289 => 458,  1283 => 457,  1279 => 456,  1271 => 452,  1267 => 451,  1263 => 450,  1255 => 443,  1253 => 442,  1250 => 439,  1247 => 437,  1245 => 436,  1243 => 435,  1241 => 434,  1239 => 433,  1232 => 429,  1230 => 428,  1226 => 427,  1222 => 426,  1217 => 422,  1209 => 420,  1205 => 419,  1203 => 418,  1201 => 417,  1197 => 416,  1193 => 413,  1190 => 411,  1188 => 410,  1184 => 409,  1177 => 405,  1175 => 404,  1155 => 403,  1152 => 401,  1149 => 399,  1147 => 398,  1145 => 397,  1143 => 396,  1139 => 395,  1135 => 392,  1133 => 391,  1131 => 390,  1127 => 389,  1123 => 384,  1119 => 383,  1115 => 380,  1113 => 379,  1101 => 378,  1097 => 377,  1093 => 374,  1091 => 373,  1089 => 372,  1087 => 371,  1085 => 370,  1073 => 369,  1070 => 367,  1068 => 366,  1066 => 365,  1062 => 364,  1058 => 361,  1054 => 356,  1048 => 349,  1045 => 347,  1043 => 346,  1039 => 343,  1036 => 341,  1034 => 340,  1032 => 339,  1028 => 338,  1023 => 334,  1021 => 333,  1007 => 332,  1005 => 331,  1003 => 330,  999 => 329,  993 => 325,  987 => 320,  984 => 318,  982 => 317,  978 => 314,  975 => 312,  973 => 311,  971 => 310,  967 => 307,  964 => 304,  963 => 303,  962 => 302,  960 => 301,  958 => 300,  954 => 299,  947 => 295,  945 => 294,  930 => 293,  927 => 291,  925 => 290,  922 => 288,  920 => 287,  918 => 286,  914 => 285,  905 => 278,  900 => 277,  898 => 276,  895 => 274,  893 => 273,  889 => 272,  885 => 269,  883 => 268,  879 => 267,  875 => 264,  873 => 263,  869 => 262,  865 => 259,  863 => 258,  859 => 257,  855 => 254,  853 => 253,  849 => 252,  845 => 249,  841 => 246,  838 => 244,  836 => 243,  832 => 240,  829 => 238,  827 => 237,  825 => 236,  819 => 235,  815 => 232,  813 => 231,  811 => 229,  810 => 228,  809 => 227,  807 => 226,  805 => 225,  801 => 224,  797 => 221,  795 => 220,  791 => 219,  787 => 216,  785 => 215,  781 => 214,  777 => 211,  775 => 210,  771 => 209,  767 => 206,  765 => 205,  761 => 204,  753 => 201,  751 => 200,  747 => 199,  743 => 196,  741 => 195,  737 => 194,  733 => 191,  731 => 190,  727 => 189,  723 => 186,  719 => 185,  715 => 182,  713 => 181,  709 => 180,  705 => 177,  703 => 176,  699 => 174,  694 => 170,  690 => 169,  686 => 166,  680 => 165,  674 => 164,  668 => 163,  662 => 162,  656 => 161,  650 => 160,  644 => 159,  639 => 155,  633 => 154,  627 => 153,  621 => 152,  615 => 151,  609 => 150,  603 => 149,  597 => 148,  591 => 145,  589 => 144,  585 => 143,  582 => 141,  580 => 140,  576 => 139,  571 => 135,  561 => 134,  556 => 133,  554 => 132,  551 => 130,  549 => 129,  545 => 128,  540 => 124,  538 => 122,  537 => 121,  536 => 120,  535 => 119,  531 => 118,  528 => 116,  526 => 115,  522 => 114,  517 => 110,  515 => 109,  513 => 108,  511 => 107,  509 => 106,  505 => 105,  502 => 103,  500 => 102,  496 => 101,  482 => 98,  478 => 97,  464 => 94,  460 => 93,  424 => 88,  421 => 86,  419 => 85,  417 => 84,  412 => 83,  410 => 82,  393 => 81,  389 => 80,  385 => 77,  383 => 76,  381 => 75,  379 => 74,  373 => 71,  371 => 70,  369 => 69,  366 => 68,  364 => 67,  362 => 66,  342 => 64,  340 => 63,  333 => 62,  330 => 60,  328 => 59,  324 => 58,  320 => 55,  314 => 53,  312 => 52,  308 => 51,  304 => 50,  300 => 49,  295 => 45,  292 => 43,  290 => 42,  286 => 41,  278 => 38,  274 => 37,  270 => 34,  267 => 32,  265 => 31,  261 => 30,  257 => 27,  255 => 26,  253 => 25,  250 => 23,  248 => 22,  244 => 21,  240 => 20,  226 => 17,  223 => 15,  221 => 13,  219 => 12,  215 => 11,  210 => 7,  207 => 5,  205 => 4,  201 => 3,  197 => 473,  195 => 468,  193 => 463,  191 => 456,  189 => 450,  186 => 447,  184 => 426,  182 => 416,  180 => 409,  178 => 395,  176 => 389,  174 => 383,  172 => 377,  170 => 364,  168 => 356,  165 => 353,  163 => 338,  160 => 337,  158 => 329,  155 => 328,  153 => 325,  151 => 299,  149 => 285,  147 => 272,  145 => 267,  143 => 262,  141 => 257,  139 => 252,  137 => 224,  135 => 219,  133 => 214,  131 => 209,  129 => 204,  127 => 199,  125 => 194,  123 => 189,  121 => 185,  119 => 180,  117 => 174,  115 => 139,  113 => 128,  111 => 114,  109 => 101,  107 => 97,  105 => 93,  103 => 80,  101 => 58,  99 => 49,  97 => 41,  95 => 37,  93 => 30,  91 => 20,  89 => 11,  87 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "form_div_layout.html.twig", "X:\\Programmes\\xampp\\htdocs\\chakhguereevdev\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\form_div_layout.html.twig");
    }
}
