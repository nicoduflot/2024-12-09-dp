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

/* core/themes/claro/templates/form/input.html.twig */
class __TwigTemplate_b39255a4d5baced142d2f040aa414f98 extends Template
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
        // line 14
        $___internal_parse_0_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 15
            if (($context["autocomplete_message"] ?? null)) {
                // line 16
                yield "  <div class=\"claro-autocomplete\">
    <input";
                // line 17
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
                yield "/>
    <div class=\"claro-autocomplete__message hidden\" data-drupal-selector=\"autocomplete-message\">";
                // line 18
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["autocomplete_message"] ?? null), "html", null, true);
                yield "</div>
  </div>
  ";
                // line 20
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true);
                yield "
";
            } else {
                // line 22
                yield "  <input";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
                yield "/>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true);
                yield "
";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 14
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_0_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["autocomplete_message", "attributes", "children"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/claro/templates/form/input.html.twig";
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
        return array (  75 => 14,  65 => 22,  60 => 20,  55 => 18,  51 => 17,  48 => 16,  46 => 15,  44 => 14,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme override for an 'input' #type form element.
 *
 * Available variables:
 * - attributes: A list of HTML attributes for the input element.
 * - children: Optional additional rendered elements.
 *
 * @see template_preprocess_input()
 * @see claro_preprocess_input()
 */
#}
{% apply spaceless %}
{% if autocomplete_message %}
  <div class=\"claro-autocomplete\">
    <input{{ attributes }}/>
    <div class=\"claro-autocomplete__message hidden\" data-drupal-selector=\"autocomplete-message\">{{ autocomplete_message }}</div>
  </div>
  {{ children }}
{% else %}
  <input{{ attributes }}/>{{ children }}
{% endif %}
{% endapply %}
", "core/themes/claro/templates/form/input.html.twig", "D:\\wamp64\\www\\2024-12-09-dp\\core\\themes\\claro\\templates\\form\\input.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 14, "if" => 15);
        static $filters = array("escape" => 17, "spaceless" => 14);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'if'],
                ['escape', 'spaceless'],
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
