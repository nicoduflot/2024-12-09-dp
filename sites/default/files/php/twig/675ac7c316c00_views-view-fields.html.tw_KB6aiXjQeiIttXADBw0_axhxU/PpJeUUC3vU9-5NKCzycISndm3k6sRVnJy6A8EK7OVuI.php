<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* core/themes/stable9/templates/views/views-view-fields.html.twig */
class __TwigTemplate_c735706a183c811c394e3251e028b1e4 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 33
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "separator", [], "any", false, false, true, 33), "html", null, true);
            // line 34
            if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "wrapper_element", [], "any", false, false, true, 34)) {
                // line 35
                yield "<";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "wrapper_element", [], "any", false, false, true, 35), "html", null, true);
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "wrapper_attributes", [], "any", false, false, true, 35), "html", null, true);
                yield ">";
            }
            // line 37
            if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, true, 37)) {
                // line 38
                if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label_element", [], "any", false, false, true, 38)) {
                    // line 39
                    yield "<";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label_element", [], "any", false, false, true, 39), "html", null, true);
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label_attributes", [], "any", false, false, true, 39), "html", null, true);
                    yield ">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, true, 39), "html", null, true);
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label_suffix", [], "any", false, false, true, 39), "html", null, true);
                    yield "</";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label_element", [], "any", false, false, true, 39), "html", null, true);
                    yield ">";
                } else {
                    // line 41
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, true, 41), "html", null, true);
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label_suffix", [], "any", false, false, true, 41), "html", null, true);
                }
            }
            // line 44
            if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "element_type", [], "any", false, false, true, 44)) {
                // line 45
                yield "<";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "element_type", [], "any", false, false, true, 45), "html", null, true);
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "element_attributes", [], "any", false, false, true, 45), "html", null, true);
                yield ">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, true, 45), "html", null, true);
                yield "</";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "element_type", [], "any", false, false, true, 45), "html", null, true);
                yield ">";
            } else {
                // line 47
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, true, 47), "html", null, true);
            }
            // line 49
            if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "wrapper_element", [], "any", false, false, true, 49)) {
                // line 50
                yield "</";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "wrapper_element", [], "any", false, false, true, 50), "html", null, true);
                yield ">";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["fields"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/stable9/templates/views/views-view-fields.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  95 => 50,  93 => 49,  90 => 47,  80 => 45,  78 => 44,  73 => 41,  62 => 39,  60 => 38,  58 => 37,  52 => 35,  50 => 34,  48 => 33,  44 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme override to display all the fields in a row.
 *
 * Available variables:
 * - view: The view in use.
 * - fields: A list of fields, each one contains:
 *   - content: The output of the field.
 *   - raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - class: The safe class ID to use.
 *   - handler: The Views field handler controlling this field.
 *   - inline: Whether or not the field should be inline.
 *   - wrapper_element: An HTML element for a wrapper.
 *   - wrapper_attributes: List of attributes for wrapper element.
 *   - separator: An optional separator that may appear before a field.
 *   - label: The field's label text.
 *   - label_element: An HTML element for a label wrapper.
 *   - label_attributes: List of attributes for label wrapper.
 *   - label_suffix: Colon after the label.
 *   - element_type: An HTML element for the field content.
 *   - element_attributes: List of attributes for HTML element for field content.
 *   - has_label_colon: A boolean indicating whether to display a colon after
 *     the label.
 *   - element_type: An HTML element for the field content.
 *   - element_attributes: List of attributes for HTML element for field content.
 * - row: The raw result from the query, with all data it fetched.
 *
 * @see template_preprocess_views_view_fields()
 */
#}
{% for field in fields -%}
  {{ field.separator }}
  {%- if field.wrapper_element -%}
    <{{ field.wrapper_element }}{{ field.wrapper_attributes }}>
  {%- endif %}
  {%- if field.label -%}
    {%- if field.label_element -%}
      <{{ field.label_element }}{{ field.label_attributes }}>{{ field.label }}{{ field.label_suffix }}</{{ field.label_element }}>
    {%- else -%}
      {{ field.label }}{{ field.label_suffix }}
    {%- endif %}
  {%- endif %}
  {%- if field.element_type -%}
    <{{ field.element_type }}{{ field.element_attributes }}>{{ field.content }}</{{ field.element_type }}>
  {%- else -%}
    {{ field.content }}
  {%- endif %}
  {%- if field.wrapper_element -%}
    </{{ field.wrapper_element }}>
  {%- endif %}
{%- endfor %}
", "core/themes/stable9/templates/views/views-view-fields.html.twig", "D:\\wamp64\\www\\2024-12-09-dp\\core\\themes\\stable9\\templates\\views\\views-view-fields.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 32, "if" => 34);
        static $filters = array("escape" => 33);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
