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

/* core/modules/system/templates/admin-block.html.twig */
class __TwigTemplate_cc4fbba79e0bf2bb6ec48e9122f79f96 extends Template
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
        // line 19
        $context["classes"] = ["panel"];
        // line 23
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 23), 23, $this->source), "html", null, true);
        yield ">
  ";
        // line 24
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["block"] ?? null), "title", [], "any", false, false, true, 24)) {
            // line 25
            yield "    <h3 class=\"panel__title\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["block"] ?? null), "title", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            yield "</h3>
  ";
        }
        // line 27
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["block"] ?? null), "content", [], "any", false, false, true, 27)) {
            // line 28
            yield "    <div class=\"panel__content\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["block"] ?? null), "content", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            yield "</div>
  ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 29
($context["block"] ?? null), "description", [], "any", false, false, true, 29)) {
            // line 30
            yield "    <div class=\"panel__description\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["block"] ?? null), "description", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            yield "</div>
  ";
        }
        // line 32
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "block"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/modules/system/templates/admin-block.html.twig";
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
        return array (  75 => 32,  69 => 30,  67 => 29,  62 => 28,  59 => 27,  53 => 25,  51 => 24,  46 => 23,  44 => 19,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/modules/system/templates/admin-block.html.twig", "/var/www/html/web/core/modules/system/templates/admin-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 19, "if" => 24);
        static $filters = array("escape" => 23);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
