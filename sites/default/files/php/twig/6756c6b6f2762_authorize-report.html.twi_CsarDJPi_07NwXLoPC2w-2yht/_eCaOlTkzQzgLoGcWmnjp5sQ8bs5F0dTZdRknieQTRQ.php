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

/* core/modules/system/templates/authorize-report.html.twig */
class __TwigTemplate_135035d1de8fca1ca794210f9dc0ee99 extends Template
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
        // line 17
        if (($context["messages"] ?? null)) {
            // line 18
            yield "  <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["authorize-results"], "method", false, false, true, 18), "html", null, true);
            yield ">
    ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["messages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["message_group"]) {
                // line 20
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["message_group"], "html", null, true);
                yield "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message_group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            yield "  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["messages", "attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/modules/system/templates/authorize-report.html.twig";
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
        return array (  64 => 22,  55 => 20,  51 => 19,  46 => 18,  44 => 17,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/modules/system/templates/authorize-report.html.twig", "D:\\wamp64\\www\\2024-12-09-dp\\core\\modules\\system\\templates\\authorize-report.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 17, "for" => 19);
        static $filters = array("escape" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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
