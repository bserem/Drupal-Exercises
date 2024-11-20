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

/* @help_topics/path.overview.html.twig */
class __TwigTemplate_e665ae92a738d9bc7052268b2d955a6b extends Template
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
        // line 8
        yield "<h2>";
        yield t("What is a URL?", array());
        yield "</h2>
<p>";
        // line 9
        yield t("URL is the abbreviation for \"Uniform Resource Locator\", which is the page's address on the web. It is the \"name\" by which a browser identifies a page to display. In the example \"Visit us at <em>example.com</em>.\", <em>https://example.com</em> would be the URL for the home page of your website. Users use URLs to locate content on the web.", array());
        yield "</p>
<h2>";
        // line 10
        yield t("What is a path?", array());
        yield "</h2>
<p>";
        // line 11
        yield t("A path is the unique, last part of the URL for a specific function or piece of content. For example, for a page whose full URL is <em>https://example.com/node/7</em>, the path is <em>node/7</em>. Here are some examples of paths you might find in your site:", array());
        yield "</p>
<ul>
  <li>";
        // line 13
        yield t("node/7: Path to a particular content item.", array());
        yield "</li>
  <li>";
        // line 14
        yield t("taxonomy/term/6: Path to a taxonomy term page.", array());
        yield "</li>
  <li>";
        // line 15
        yield t("user/3: Path to a user profile page.", array());
        yield "</li>
</ul>
<h2>";
        // line 17
        yield t("What is an alias?", array());
        yield "</h2>
<p>";
        // line 18
        yield t("The core software allows you to provide more understandable URLs for pages on your site, which are called <em>aliases</em>. For example, if you have an \"About Us\" page with the path <em>node/7</em>, you can set up an alias of <em>about</em> so that your visitors will see it as <em>https://www.example.com/about</em>.", array());
        yield "</p>
<h2>";
        // line 19
        yield t("Overview of configuring paths, aliases, and URLs", array());
        yield "</h2>
<p>";
        // line 20
        yield t("The core Path module provides the URL aliasing functionality. The contributed <a href=\"https://www.drupal.org/project/pathauto\">Pathauto</a> module allows you to configure automatically-generated URL aliases for content items and other pages. See the related topics listed below for specific tasks.", array());
        yield "</p>
<h2>";
        // line 21
        yield t("Additional resources", array());
        yield "</h2>
<ul>
  <li><a href=\"https://www.drupal.org/docs/user_guide/en/content-paths.html\">";
        // line 23
        yield t("Concept: Paths, Aliases, and URLs (Drupal User Guide)", array());
        yield "</a></li>
</ul>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/path.overview.html.twig";
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
        return array (  96 => 23,  91 => 21,  87 => 20,  83 => 19,  79 => 18,  75 => 17,  70 => 15,  66 => 14,  62 => 13,  57 => 11,  53 => 10,  49 => 9,  44 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/path.overview.html.twig", "/var/www/html/web/core/modules/path/help_topics/path.overview.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 8);
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
