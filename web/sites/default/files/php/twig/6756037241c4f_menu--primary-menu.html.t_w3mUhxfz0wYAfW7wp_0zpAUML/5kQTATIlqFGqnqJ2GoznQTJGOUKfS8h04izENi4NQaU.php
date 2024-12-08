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

/* core/themes/olivero/templates/navigation/menu--primary-menu.html.twig */
class __TwigTemplate_607185843ea04ac55edf5a404737de49 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("olivero/navigation-primary"), "html", null, true);
        yield "

";
        // line 25
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 26
        yield "
";
        // line 31
        $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["menu"], "method", false, false, true, 31);
        // line 32
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, "primary-menu-item-"], 32, $context, $this->getSourceContext()));
        yield "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "menu_level", "loop"]);        yield from [];
    }

    // line 34
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__aria_id__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "aria_id" => $__aria_id__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 35
            yield "  ";
            $context["primary_nav_level"] = ("primary-nav__menu--level-" . (($context["menu_level"] ?? null) + 1));
            // line 36
            yield "  ";
            $context["drupal_selector_primary_nav_level"] = (((($context["menu_level"] ?? null) <= 1)) ? (("primary-nav-menu--level-" . (($context["menu_level"] ?? null) + 1))) : (false));
            // line 37
            yield "  ";
            $context["is_top_level_menu"] = (($context["menu_level"] ?? null) == 0);
            // line 38
            yield "  ";
            $macros["menus"] = $this;
            // line 39
            yield "  ";
            if (($context["items"] ?? null)) {
                // line 40
                yield "
    ";
                // line 45
                yield "    ";
                if ((($context["menu_level"] ?? null) == 1)) {
                    // line 46
                    yield "      <span data-drupal-selector=\"primary-nav-menu-🥕\" class=\"primary-nav__menu-🥕\"></span>
    ";
                }
                // line 48
                yield "
    <ul ";
                // line 49
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["primary-nav__menu", ($context["primary_nav_level"] ?? null)], "method", false, false, true, 49), "setAttribute", ["data-drupal-selector", ($context["drupal_selector_primary_nav_level"] ?? null)], "method", false, false, true, 49), "html", null, true);
                yield ">
      ";
                // line 50
                $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [($context["primary_nav_level"] ?? null)], "method", false, false, true, 50);
                // line 51
                yield "      ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 52
                    yield "
        ";
                    // line 53
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 53), "isRouted", [], "any", false, false, true, 53) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 53), "routeName", [], "any", false, false, true, 53) == "<nolink>"))) {
                        // line 54
                        yield "          ";
                        $context["menu_item_type"] = "nolink";
                        // line 55
                        yield "        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 55), "isRouted", [], "any", false, false, true, 55) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 55), "routeName", [], "any", false, false, true, 55) == "<button>"))) {
                        // line 56
                        yield "          ";
                        $context["menu_item_type"] = "button";
                        // line 57
                        yield "        ";
                    } else {
                        // line 58
                        yield "          ";
                        $context["menu_item_type"] = "link";
                        // line 59
                        yield "        ";
                    }
                    // line 60
                    yield "
        ";
                    // line 61
                    $context["item_classes"] = ["primary-nav__menu-item", ("primary-nav__menu-item--" .                     // line 63
($context["menu_item_type"] ?? null)), ("primary-nav__menu-item--level-" . (                    // line 64
($context["menu_level"] ?? null) + 1)), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 65
$context["item"], "in_active_trail", [], "any", false, false, true, 65)) ? ("primary-nav__menu-item--active-trail") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 66
$context["item"], "below", [], "any", false, false, true, 66)) ? ("primary-nav__menu-item--has-children") : (""))];
                    // line 69
                    yield "
        ";
                    // line 70
                    $context["link_classes"] = ["primary-nav__menu-link", ("primary-nav__menu-link--" .                     // line 72
($context["menu_item_type"] ?? null)), ("primary-nav__menu-link--level-" . (                    // line 73
($context["menu_level"] ?? null) + 1)), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 74
$context["item"], "in_active_trail", [], "any", false, false, true, 74)) ? ("primary-nav__menu-link--active-trail") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 75
$context["item"], "below", [], "any", false, false, true, 75)) ? ("primary-nav__menu-link--has-children") : (""))];
                    // line 78
                    yield "
        <li";
                    // line 79
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 79), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 79), "setAttribute", ["data-drupal-selector", (((($context["is_top_level_menu"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 79))) ? ("primary-nav-menu-item-has-children") : (false))], "method", false, false, true, 79), "html", null, true);
                    yield ">
          ";
                    // line 85
                    yield "          ";
                    $context["aria_id"] = \Drupal\Component\Utility\Html::getId((($context["aria_id"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 85)));
                    // line 86
                    yield "          ";
                    $context["link_title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 87
                        yield "            <span class=\"primary-nav__menu-link-inner primary-nav__menu-link-inner--level-";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["menu_level"] ?? null) + 1), "html", null, true);
                        yield "\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 87), "html", null, true);
                        yield "</span>
          ";
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 89
                    yield "
          ";
                    // line 90
                    if (((($context["menu_item_type"] ?? null) == "link") || (($context["menu_item_type"] ?? null) == "nolink"))) {
                        // line 91
                        yield "            ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink((((($context["menu_item_type"] ?? null) == "link")) ? (($context["link_title"] ?? null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 91))), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 91), ["class" =>                         // line 92
($context["link_classes"] ?? null), "data-drupal-selector" => ((                        // line 93
($context["is_top_level_menu"] ?? null)) ? ("primary-nav-menu-link-has-children") : (false))]), "html", null, true);
                        // line 95
                        yield "

            ";
                        // line 97
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 97)) {
                            // line 98
                            yield "              ";
                            // line 103
                            yield "              ";
                            if (($context["is_top_level_menu"] ?? null)) {
                                // line 104
                                yield "                ";
                                $context["toggle_button_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["class" => "primary-nav__button-toggle", "data-drupal-selector" => "primary-nav-submenu-toggle-button", "aria-controls" =>                                 // line 107
($context["aria_id"] ?? null), "aria-expanded" => "false", "aria-hidden" => "true", "tabindex" => "-1"]);
                                // line 112
                                yield "
                <button";
                                // line 113
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["toggle_button_attributes"] ?? null), "html", null, true);
                                yield ">
                  <span class=\"visually-hidden\">";
                                // line 114
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("@title sub-navigation", ["@title" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 114)]));
                                yield "</span>
                  <span class=\"icon--menu-toggle\"></span>
                </button>
              ";
                            }
                            // line 118
                            yield "
              ";
                            // line 119
                            $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["id", ($context["aria_id"] ?? null)], "method", false, false, true, 119);
                            // line 120
                            yield "              ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 120), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["aria_id"] ?? null)], 120, $context, $this->getSourceContext()));
                            yield "
            ";
                        }
                        // line 122
                        yield "
          ";
                    } elseif ((                    // line 123
($context["menu_item_type"] ?? null) == "button")) {
                        // line 124
                        yield "
            ";
                        // line 125
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(($context["link_title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 125), ["class" =>                         // line 126
($context["link_classes"] ?? null), "aria-controls" => (((                        // line 127
($context["is_top_level_menu"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 127))) ? (($context["aria_id"] ?? null)) : (false)), "aria-expanded" => (((                        // line 128
($context["is_top_level_menu"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 128))) ? ("false") : (false)), "data-drupal-selector" => (((                        // line 129
($context["is_top_level_menu"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 129))) ? ("primary-nav-submenu-toggle-button") : (false))]), "html", null, true);
                        // line 130
                        yield "

            ";
                        // line 132
                        $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["id", ($context["aria_id"] ?? null)], "method", false, false, true, 132);
                        // line 133
                        yield "            ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 133), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["aria_id"] ?? null)], 133, $context, $this->getSourceContext()));
                        yield "
          ";
                    }
                    // line 135
                    yield "        </li>
      ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 137
                yield "    </ul>
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/olivero/templates/navigation/menu--primary-menu.html.twig";
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
        return array (  286 => 137,  271 => 135,  265 => 133,  263 => 132,  259 => 130,  257 => 129,  256 => 128,  255 => 127,  254 => 126,  253 => 125,  250 => 124,  248 => 123,  245 => 122,  239 => 120,  237 => 119,  234 => 118,  227 => 114,  223 => 113,  220 => 112,  218 => 107,  216 => 104,  213 => 103,  211 => 98,  209 => 97,  205 => 95,  203 => 93,  202 => 92,  200 => 91,  198 => 90,  195 => 89,  186 => 87,  183 => 86,  180 => 85,  176 => 79,  173 => 78,  171 => 75,  170 => 74,  169 => 73,  168 => 72,  167 => 70,  164 => 69,  162 => 66,  161 => 65,  160 => 64,  159 => 63,  158 => 61,  155 => 60,  152 => 59,  149 => 58,  146 => 57,  143 => 56,  140 => 55,  137 => 54,  135 => 53,  132 => 52,  114 => 51,  112 => 50,  108 => 49,  105 => 48,  101 => 46,  98 => 45,  95 => 40,  92 => 39,  89 => 38,  86 => 37,  83 => 36,  80 => 35,  65 => 34,  56 => 32,  54 => 31,  51 => 26,  49 => 25,  44 => 23,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/themes/olivero/templates/navigation/menu--primary-menu.html.twig", "/var/www/html/web/core/themes/olivero/templates/navigation/menu--primary-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 25, "set" => 31, "macro" => 34, "if" => 39, "for" => 51);
        static $filters = array("escape" => 23, "clean_id" => 85, "t" => 114);
        static $functions = array("attach_library" => 23, "link" => 91, "create_attribute" => 104);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'set', 'macro', 'if', 'for'],
                ['escape', 'clean_id', 't'],
                ['attach_library', 'link', 'create_attribute'],
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
