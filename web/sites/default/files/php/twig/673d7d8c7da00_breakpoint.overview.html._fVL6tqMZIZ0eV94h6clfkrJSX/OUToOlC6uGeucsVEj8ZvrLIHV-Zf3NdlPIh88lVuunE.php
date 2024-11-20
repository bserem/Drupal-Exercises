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

/* @help_topics/breakpoint.overview.html.twig */
class __TwigTemplate_605591c2870a0d95eeea134888e8f0be extends Template
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
        // line 6
        yield "<h2>";
        yield t("What are breakpoints?", array());
        yield "</h2>
<p>";
        // line 7
        yield t("Breakpoints are the point at which your site's content will respond to provide the user with the best possible layout to consume the information. A breakpoint separates the height or width of viewports (screens, printers, and other media output types) into steps. For instance, a width breakpoint of 40em creates two steps: one for widths up to 40em and one for widths above 40em. Breakpoints can be used to define when layouts should shift from one form to another, when images should be resized, and other changes that need to respond to changes in viewport height or width.", array());
        yield "</p>
<h2>";
        // line 8
        yield t("What are media queries?", array());
        yield "</h2>
<p>";
        // line 9
        yield t("Media  queries are a formal way to encode breakpoints. For instance, a width breakpoint at 40em would be written as the media query \"(min-width: 40em)\". Breakpoints are really just media queries with some additional meta-data, such as a name and multiplier information.", array());
        yield "</p>
<h2>";
        // line 10
        yield t("What are resolution multipliers?", array());
        yield "</h2>
<p>";
        // line 11
        yield t("Resolution multipliers are a measure of the viewport's device resolution, defined to be the ratio between the physical pixel size of the active device and the <a href=\"http://en.wikipedia.org/wiki/Device_independent_pixel\">device-independent pixel</a> size. The Breakpoint module defines multipliers of 1, 1.5, and 2; when defining breakpoints, modules and themes can define which multipliers apply to each breakpoint.", array());
        yield "</p>
<h2>";
        // line 12
        yield t("What is a breakpoint group?", array());
        yield "</h2>
<p>";
        // line 13
        yield t("Breakpoints can be organized into groups. Modules and themes should use groups to separate out breakpoints that are meant to be used for different purposes, such as breakpoints for layouts or breakpoints for image sizing.", array());
        yield "</p>
<h2>";
        // line 14
        yield t("Managing breakpoints and breakpoint groups overview", array());
        yield "</h2>
<p>";
        // line 15
        yield t("The <em>Breakpoint</em> module allows you to define breakpoints and breakpoint groups in YAML files. Modules and themes can use the API provided by the <em>Breakpoint</em> module to define breakpoints and breakpoint groups, and to assign resolution multipliers to breakpoints.", array());
        // line 16
        yield "</p>
<h2>";
        // line 17
        yield t("Additional resources", array());
        yield "</h2>
<ul>
  <li><a href=\"https://www.drupal.org/documentation/modules/breakpoint\">";
        // line 19
        yield t("Working with breakpoints in Drupal", array());
        yield "</a></li>
  <li><a href=\"http://www.w3.org/TR/css3-mediaqueries/\">";
        // line 20
        yield t("W3C standards for media queries", array());
        yield "</a></li>
</ul>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/breakpoint.overview.html.twig";
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
        return array (  95 => 20,  91 => 19,  86 => 17,  83 => 16,  81 => 15,  77 => 14,  73 => 13,  69 => 12,  65 => 11,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  44 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/breakpoint.overview.html.twig", "/var/www/html/web/core/modules/breakpoint/help_topics/breakpoint.overview.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 6);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['trans'],
                [],
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
