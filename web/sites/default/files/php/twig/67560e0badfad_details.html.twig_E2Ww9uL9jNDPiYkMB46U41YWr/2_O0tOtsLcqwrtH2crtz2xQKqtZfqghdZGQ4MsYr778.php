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

/* core/themes/claro/templates/details.html.twig */
class __TwigTemplate_cbcfc257bee7dec668ab24fe9b4d2d0d extends Template
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
        // line 23
        $context["classes"] = ["claro-details", ((        // line 25
($context["accordion"] ?? null)) ? ("claro-details--accordion") : ("")), ((        // line 26
($context["accordion_item"] ?? null)) ? ("claro-details--accordion-item") : ("")), (((($__internal_compile_0 =         // line 27
($context["element"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess && in_array($__internal_compile_0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_0["#module_package_listing"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#module_package_listing", [], "array", false, false, true, 27))) ? ("claro-details--package-listing") : (""))];
        // line 31
        $context["content_wrapper_classes"] = ["claro-details__wrapper", "details-wrapper", ((        // line 34
($context["accordion"] ?? null)) ? ("claro-details__wrapper--accordion") : ("")), ((        // line 35
($context["accordion_item"] ?? null)) ? ("claro-details__wrapper--accordion-item") : ("")), (((($__internal_compile_1 =         // line 36
($context["element"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess && in_array($__internal_compile_1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_1["#module_package_listing"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#module_package_listing", [], "array", false, false, true, 36))) ? ("claro-details__wrapper--package-listing") : (""))];
        // line 40
        $context["inner_wrapper_classes"] = ["claro-details__content", ((        // line 42
($context["accordion"] ?? null)) ? ("claro-details__content--accordion") : ("")), ((        // line 43
($context["accordion_item"] ?? null)) ? ("claro-details__content--accordion-item") : ("")), (((($__internal_compile_2 =         // line 44
($context["element"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess && in_array($__internal_compile_2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_2["#module_package_listing"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#module_package_listing", [], "array", false, false, true, 44))) ? ("claro-details__content--package-listing") : (""))];
        // line 47
        yield "<details";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 47), "html", null, true);
        yield ">";
        // line 48
        if (($context["title"] ?? null)) {
            // line 50
            $context["summary_classes"] = ["claro-details__summary", ((            // line 52
($context["required"] ?? null)) ? ("js-form-required") : ("")), ((            // line 53
($context["required"] ?? null)) ? ("form-required") : ("")), ((            // line 54
($context["accordion"] ?? null)) ? ("claro-details__summary--accordion") : ("")), ((            // line 55
($context["accordion_item"] ?? null)) ? ("claro-details__summary--accordion-item") : ("")), (((($__internal_compile_3 =             // line 56
($context["element"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess && in_array($__internal_compile_3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_3["#module_package_listing"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#module_package_listing", [], "array", false, false, true, 56))) ? ("claro-details__summary--package-listing") : (""))];
            // line 60
            yield "    <summary";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["summary_attributes"] ?? null), "addClass", [($context["summary_classes"] ?? null)], "method", false, false, true, 60), "html", null, true);
            yield ">";
            // line 61
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            // line 62
            if (($context["required"] ?? null)) {
                // line 63
                yield "<span class=\"required-mark\"></span>";
            }
            // line 65
            yield "</summary>";
        }
        // line 67
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [($context["content_wrapper_classes"] ?? null)], "method", false, false, true, 67), "html", null, true);
        yield ">
    ";
        // line 68
        if ((($context["accordion"] ?? null) || ($context["accordion_item"] ?? null))) {
            // line 69
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["class" => ($context["inner_wrapper_classes"] ?? null)]), "html", null, true);
            yield ">
    ";
        }
        // line 71
        yield "
      ";
        // line 72
        if (($context["errors"] ?? null)) {
            // line 73
            yield "        <div class=\"form-item form-item__error-message\">
          ";
            // line 74
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 77
        if (($context["description"] ?? null)) {
            // line 78
            yield "<div class=\"claro-details__description";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["disabled"] ?? null)) ? (" is-disabled") : ("")));
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["description"] ?? null), "html", null, true);
            yield "</div>";
        }
        // line 80
        if (($context["children"] ?? null)) {
            // line 81
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true);
        }
        // line 83
        if (($context["value"] ?? null)) {
            // line 84
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["value"] ?? null), "html", null, true);
        }
        // line 87
        if ((($context["accordion"] ?? null) || ($context["accordion_item"] ?? null))) {
            // line 88
            yield "    </div>
    ";
        }
        // line 90
        yield "  </div>
</details>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["accordion", "accordion_item", "element", "attributes", "title", "required", "summary_attributes", "content_attributes", "errors", "description", "disabled", "children", "value"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/claro/templates/details.html.twig";
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
        return array (  138 => 90,  134 => 88,  132 => 87,  129 => 84,  127 => 83,  124 => 81,  122 => 80,  115 => 78,  113 => 77,  107 => 74,  104 => 73,  102 => 72,  99 => 71,  93 => 69,  91 => 68,  86 => 67,  83 => 65,  80 => 63,  78 => 62,  76 => 61,  72 => 60,  70 => 56,  69 => 55,  68 => 54,  67 => 53,  66 => 52,  65 => 50,  63 => 48,  59 => 47,  57 => 44,  56 => 43,  55 => 42,  54 => 40,  52 => 36,  51 => 35,  50 => 34,  49 => 31,  47 => 27,  46 => 26,  45 => 25,  44 => 23,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/themes/claro/templates/details.html.twig", "/var/www/html/web/core/themes/claro/templates/details.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 23, "if" => 48);
        static $filters = array("escape" => 47);
        static $functions = array("create_attribute" => 69);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                ['create_attribute'],
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
