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

/* themes/contrib/bartik/templates/classy/content-edit/filter-tips.html.twig */
class __TwigTemplate_8d87c734f4a388efb2d495c93c079d58 extends Template
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
        if (($context["multiple"] ?? null)) {
            // line 20
            yield "  <h2>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Text Formats"));
            yield "</h2>
";
        }
        // line 22
        yield "
";
        // line 23
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["tips"] ?? null))) {
            // line 24
            yield "  ";
            if (($context["multiple"] ?? null)) {
                // line 25
                yield "    <div class=\"compose-tips\">
  ";
            }
            // line 27
            yield "
  ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["tips"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["tip"]) {
                // line 29
                yield "    ";
                if (($context["multiple"] ?? null)) {
                    // line 30
                    yield "      ";
                    // line 31
                    $context["tip_classes"] = ["filter-type", ("filter-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(                    // line 33
$context["name"], 33, $this->source)))];
                    // line 36
                    yield "      <div";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tip"], "attributes", [], "any", false, false, true, 36), "addClass", [($context["tip_classes"] ?? null)], "method", false, false, true, 36), 36, $this->source), "html", null, true);
                    yield ">
      <h3>";
                    // line 37
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["tip"], "name", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                    yield "</h3>
    ";
                }
                // line 39
                yield "
    ";
                // line 40
                if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["tip"], "list", [], "any", false, false, true, 40))) {
                    // line 41
                    yield "      <ul class=\"tips\">
      ";
                    // line 42
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["tip"], "list", [], "any", false, false, true, 42));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 43
                        yield "        ";
                        // line 44
                        $context["item_classes"] = [((                        // line 45
($context["long"] ?? null)) ? (("filter-" . Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 45), 45, $this->source), ["/" => "-"]))) : (""))];
                        // line 48
                        yield "        <li";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 48), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 48), 48, $this->source), "html", null, true);
                        yield ">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "tip", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                        yield "</li>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 50
                    yield "      </ul>
    ";
                }
                // line 52
                yield "
    ";
                // line 53
                if (($context["multiple"] ?? null)) {
                    // line 54
                    yield "      </div>
    ";
                }
                // line 56
                yield "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['name'], $context['tip'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            yield "
  ";
            // line 58
            if (($context["multiple"] ?? null)) {
                // line 59
                yield "    </div>
  ";
            }
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["multiple", "tips", "long"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/bartik/templates/classy/content-edit/filter-tips.html.twig";
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
        return array (  141 => 59,  139 => 58,  136 => 57,  130 => 56,  126 => 54,  124 => 53,  121 => 52,  117 => 50,  106 => 48,  104 => 45,  103 => 44,  101 => 43,  97 => 42,  94 => 41,  92 => 40,  89 => 39,  84 => 37,  79 => 36,  77 => 33,  76 => 31,  74 => 30,  71 => 29,  67 => 28,  64 => 27,  60 => 25,  57 => 24,  55 => 23,  52 => 22,  46 => 20,  44 => 19,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/bartik/templates/classy/content-edit/filter-tips.html.twig", "/var/www/html/web/themes/contrib/bartik/templates/classy/content-edit/filter-tips.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19, "for" => 28, "set" => 31);
        static $filters = array("t" => 20, "length" => 23, "clean_class" => 33, "escape" => 36, "replace" => 45);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['t', 'length', 'clean_class', 'escape', 'replace'],
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
