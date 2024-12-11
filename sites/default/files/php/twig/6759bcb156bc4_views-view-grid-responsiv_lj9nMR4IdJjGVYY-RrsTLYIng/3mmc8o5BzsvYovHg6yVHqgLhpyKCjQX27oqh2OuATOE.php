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

/* core/modules/views/templates/views-view-grid-responsive.html.twig */
class __TwigTemplate_ee03ef71d416ecb200e26cd89e653e84 extends Template
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
        // line 27
        yield "
";
        // line 28
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("views/views.responsive-grid"), "html", null, true);
        yield "

";
        // line 31
        $context["classes"] = ["views-view-responsive-grid", ("views-view-responsive-grid--" . CoreExtension::getAttribute($this->env, $this->source,         // line 33
($context["options"] ?? null), "alignment", [], "any", false, false, true, 33))];
        // line 36
        yield "
";
        // line 37
        $context["responsive_grid_styles"] = [(("--views-responsive-grid--column-count:" . CoreExtension::getAttribute($this->env, $this->source,         // line 38
($context["options"] ?? null), "columns", [], "any", false, false, true, 38)) . ";"), (("--views-responsive-grid--cell-min-width:" . CoreExtension::getAttribute($this->env, $this->source,         // line 39
($context["options"] ?? null), "cell_min_width", [], "any", false, false, true, 39)) . "px;"), (("--views-responsive-grid--layout-gap:" . CoreExtension::getAttribute($this->env, $this->source,         // line 40
($context["options"] ?? null), "grid_gutter", [], "any", false, false, true, 40)) . "px;")];
        // line 43
        yield "
";
        // line 44
        if (($context["title"] ?? null)) {
            // line 45
            yield "  <h3>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield "</h3>
";
        }
        // line 47
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 47), "setAttribute", ["style", Twig\Extension\CoreExtension::join(($context["responsive_grid_styles"] ?? null))], "method", false, false, true, 47), "html", null, true);
        yield ">
  ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 49
            yield "    <div class=\"views-view-responsive-grid__item\">
      <div class=\"views-view-responsive-grid__item-inner\">";
            // line 51
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 51), "html", null, true);
            // line 52
            yield "</div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["options", "title", "attributes", "items"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/modules/views/templates/views-view-grid-responsive.html.twig";
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
        return array (  96 => 55,  88 => 52,  86 => 51,  83 => 49,  79 => 48,  74 => 47,  68 => 45,  66 => 44,  63 => 43,  61 => 40,  60 => 39,  59 => 38,  58 => 37,  55 => 36,  53 => 33,  52 => 31,  47 => 28,  44 => 27,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for views to display rows in a responsive grid.
 *
 * Available variables:
 * - attributes: HTML attributes for the wrapping element.
 * - title: The title of this group of rows.
 * - view: The view object.
 * - rows: The rows contained in this view.
 * - options: The view plugin style options.
 *   - alignment: a string set to either 'horizontal' or 'vertical'.
 *   - columns: A number representing the max number of columns.
 *   - cell_min_width: A number representing the minimum width of the grid cell.
 *   - grid_gutter: A number representing the space between the grid cells.
 * - items: A list of grid items.
 *   - attributes: HTML attributes for each row or column.
 *   - content: A list of columns or rows. Each row or column contains:
 *     - attributes: HTML attributes for each row or column.
 *     - content: The row or column contents.
 *
 * @see template_preprocess_views_view_grid_responsive()
 *
 * @ingroup themeable
 */
#}

{{ attach_library('views/views.responsive-grid') }}

{%
  set classes = [
    'views-view-responsive-grid',
    'views-view-responsive-grid--' ~ options.alignment,
  ]
%}

{% set responsive_grid_styles = [
    '--views-responsive-grid--column-count:' ~ options.columns ~ ';',
    '--views-responsive-grid--cell-min-width:' ~ options.cell_min_width ~ 'px;',
    '--views-responsive-grid--layout-gap:' ~ options.grid_gutter ~ 'px;',
  ]
%}

{% if title %}
  <h3>{{ title }}</h3>
{% endif %}
<div{{ attributes.addClass(classes).setAttribute('style', responsive_grid_styles|join()) }}>
  {% for item in items %}
    <div class=\"views-view-responsive-grid__item\">
      <div class=\"views-view-responsive-grid__item-inner\">
        {{- item.content -}}
      </div>
    </div>
  {% endfor %}
</div>
", "core/modules/views/templates/views-view-grid-responsive.html.twig", "D:\\wamp64\\www\\2024-12-09-dp\\core\\modules\\views\\templates\\views-view-grid-responsive.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 31, "if" => 44, "for" => 48);
        static $filters = array("escape" => 28, "join" => 47);
        static $functions = array("attach_library" => 28);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'join'],
                ['attach_library'],
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
