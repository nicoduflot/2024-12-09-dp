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

/* themes/lotr/templates/navigation/menu--main.html.twig */
class __TwigTemplate_5c3424989e13da14f05230cc268bd2d6 extends Template
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
        // line 21
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 22
        yield "
";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 27, $context, $this->getSourceContext()));
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_level"]);        yield from [];
    }

    // line 28
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 29
            yield "<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
  ";
            // line 30
            $macros["menus"] = $this;
            // line 31
            yield "  ";
            if (($context["items"] ?? null)) {
                // line 32
                yield "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 33
                    yield "      <ul";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["navbar-nav", "me-auto", "mb-2", "mb-lg-0"], "method", false, false, true, 33), "html", null, true);
                    yield ">
    ";
                } else {
                    // line 35
                    yield "      <ul class=\"dropdown-menu\">
    ";
                }
                // line 37
                yield "
    ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 39
                    yield "      ";
                    // line 40
                    $context["classes"] = ["menu-item", ((CoreExtension::getAttribute($this->env, $this->source,                     // line 42
$context["item"], "is_expanded", [], "any", false, false, true, 42)) ? ("menu-item--expanded") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 43
$context["item"], "is_collapsed", [], "any", false, false, true, 43)) ? ("menu-item--collapsed") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 44
$context["item"], "in_active_trail", [], "any", false, false, true, 44)) ? ("menu-item--active-trail") : (""))];
                    // line 47
                    yield "      ";
                    // line 55
                    yield "      ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 55)) {
                        // line 56
                        yield "        <li class=\"nav-item dropdown\">
          ";
                        // line 57
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 57), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 57), ["class" => ["nav-link", "dropdown-toggle"], "data-bs-toggle" => "dropdown", "aria-expanded" => "false"]), "html", null, true);
                        yield "
          ";
                        // line 58
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 58), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 58, $context, $this->getSourceContext()));
                        yield "
        </li>
      ";
                    } else {
                        // line 61
                        yield "        <li class=\"nav-item\">
          ";
                        // line 62
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 62), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 62), ["class" => ["nav-link"]]), "html", null, true);
                        yield "
        </li>
      ";
                    }
                    // line 65
                    yield "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                yield "    </ul>
  ";
            }
            // line 68
            yield "</div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/lotr/templates/navigation/menu--main.html.twig";
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
        return array (  143 => 68,  139 => 66,  133 => 65,  127 => 62,  124 => 61,  118 => 58,  114 => 57,  111 => 56,  108 => 55,  106 => 47,  104 => 44,  103 => 43,  102 => 42,  101 => 40,  99 => 39,  95 => 38,  92 => 37,  88 => 35,  82 => 33,  79 => 32,  76 => 31,  74 => 30,  71 => 29,  57 => 28,  49 => 27,  46 => 22,  44 => 21,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/lotr/templates/navigation/menu--main.html.twig", "D:\\wamp64\\www\\2024-12-09-dp\\themes\\lotr\\templates\\navigation\\menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 21, "macro" => 28, "if" => 31, "for" => 38, "set" => 40);
        static $filters = array("escape" => 33);
        static $functions = array("link" => 57);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape'],
                ['link'],
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
