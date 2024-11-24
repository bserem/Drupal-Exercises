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

/* @help_topics/core.web_services.html.twig */
class __TwigTemplate_84cfecfb34d10d5e0e89bc62c7d715fa extends Template
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
        // line 7
        $context["content_structure_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("core.content_structure"));
        // line 8
        yield "<h2>";
        yield t("What is a web service?", array());
        yield "</h2>
<p>";
        // line 9
        yield t("A web service allows your site to provide its content and data to other web sites and applications. Typically, the data is transported via <a href=\"https://en.wikipedia.org/wiki/Hypertext_Transfer_Protocol\">HTTP</a> in a serialized machine-readable format.", array());
        yield "</p>
<h2>";
        // line 10
        yield t("What is serialization?", array());
        yield "</h2>
<p>";
        // line 11
        yield t("Serialization is the process of converting complex data structures into text strings, so that they can be exchanged and stored. The reverse process is called <em>deserialization</em>. JSON and XML are the two most-commonly-used data serialization formats for web services.", array());
        yield "</p>
<h2>";
        // line 12
        yield t("What is HTTP Basic authentication?", array());
        yield "</h2>
<p>";
        // line 13
        yield t("<a href=\"http://en.wikipedia.org/wiki/Basic_access_authentication\">HTTP Basic authentication</a> is a method for authenticating requests by sending a user name and password along with the request.", array());
        yield "</p>
<h2>";
        // line 14
        yield t("What modules provide web services?", array());
        yield "</h2>
<p>";
        // line 15
        yield t("The following core software modules provide web services:", array());
        yield "</p>
<dl>
  <dt>";
        // line 17
        yield t("JSON:API module", array());
        yield "</dt>
  <dd>";
        // line 18
        yield t("Exposes <em>entities</em> to other applications using a fully compliant implementation of the <a href=\"https://jsonapi.org\">JSON:API Specification</a>. See @content_structure_topic for more information on content entities and fields.", array("@content_structure_topic" => ($context["content_structure_topic"] ?? null), ));
        yield "</dd>
  <dt>";
        // line 19
        yield t("RESTful Web Services module", array());
        yield "</dt>
  <dd>";
        // line 20
        yield t("Exposes entities and other resources to other applications using a <a href=\"https://en.wikipedia.org/wiki/Representational_state_transfer\">REST</a> implementation. Data is exchanged using a serialization format such as JSON, and transferred using an authentication method such as HTTP Basic Authentication.", array());
        yield "</dd>
  <dt>";
        // line 21
        yield t("Serialization module", array());
        yield "</dt>
  <dd>";
        // line 22
        yield t("Provides a framework for adding specific serialization formats for other modules to use.", array());
        yield "</dd>
  <dt>";
        // line 23
        yield t("HTTP Basic Authentication module", array());
        yield "</dt>
  <dd>";
        // line 24
        yield t("Provides a way for web services to be authenticated using HTTP Basic authentication against site user accounts.", array());
        yield "</dd>
</dl>
<p>";
        // line 26
        yield t("There are also contributed modules that provide web services.", array());
        yield "</p>
<h2>";
        // line 27
        yield t("Additional resources", array());
        yield "</h2>
<ul>
  <li><a href=\"https://www.drupal.org/docs/8/core/modules/rest\">";
        // line 29
        yield t("Online documentation for the RESTful Web Services module", array());
        yield "</a></li>
  <li><a href=\"https://www.drupal.org/docs/core-modules-and-themes/core-modules/jsonapi-module\">";
        // line 30
        yield t("Online documentation for the JSON:API module", array());
        yield "</a></li>
  <li><a href=\"https://www.drupal.org/docs/core-modules-and-themes/core-modules/jsonapi-module/jsonapi-vs-cores-rest-module\">";
        // line 31
        yield t("Comparison of the RESTFul Web Services and JSON:API modules", array());
        yield "</a></li>
</ul>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/core.web_services.html.twig";
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
        return array (  130 => 31,  126 => 30,  122 => 29,  117 => 27,  113 => 26,  108 => 24,  104 => 23,  100 => 22,  96 => 21,  92 => 20,  88 => 19,  84 => 18,  80 => 17,  75 => 15,  71 => 14,  67 => 13,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  46 => 8,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/core.web_services.html.twig", "/var/www/html/web/core/modules/help/help_topics/core.web_services.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "trans" => 8);
        static $filters = array("escape" => 18);
        static $functions = array("render_var" => 7, "help_topic_link" => 7);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'help_topic_link'],
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
