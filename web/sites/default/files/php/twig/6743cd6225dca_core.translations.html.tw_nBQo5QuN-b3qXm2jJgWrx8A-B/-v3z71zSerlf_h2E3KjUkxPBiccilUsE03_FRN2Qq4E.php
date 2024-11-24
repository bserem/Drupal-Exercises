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

/* @help_topics/core.translations.html.twig */
class __TwigTemplate_dc165cb878817770bb0b8df1400480ff extends Template
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
        $context["config_overview_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("core.config_overview"));
        // line 9
        $context["content_structure_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("core.content_structure"));
        // line 10
        yield "<h2>";
        yield t("What text can be translated in your site?", array());
        yield "</h2>
<p>";
        // line 11
        yield t("There are three types of text that can be translated:", array());
        yield "</p>
<ul>
  <li>";
        // line 13
        yield t("Content (blocks, content items, etc.) can be written in English or another language, and can be translated into additional languages. See @content_structure_topic to learn more about content.", array("@content_structure_topic" => ($context["content_structure_topic"] ?? null), ));
        yield "</li>
  <li>";
        // line 14
        yield t("Many configuration items also include text that can be translated. Default configuration provided by your site's software is provided in English; you can also download community-provided translations. See @config_overview_topic to learn more about configuration.", array("@config_overview_topic" => ($context["config_overview_topic"] ?? null), ));
        yield "</li>
  <li>";
        // line 15
        yield t("User interface text that is provided by the core software, your install profile, themes, and modules is provided in English, but can be translated into other languages. You can also download translations that community-members have provided.", array());
        yield "</li>
</ul>
<h2>";
        // line 17
        yield t("Working with languages overview", array());
        yield "</h2>
<p>";
        // line 18
        yield t("The core Language module lets you add new languages to your site, provides the <em>Language switcher</em> block, and provides the ability to configure block visibility by language; the block and block visibility settings are only available if you have multiple languages configured. The core Content Translation, Configuration Translation, and Interface Translation modules let you translate content, configuration, and the built-in user interface, respectively. The core Update Manager module manages automatic downloads of community-provided translations of default configuration and user-interface text. See the related topics listed below for specific tasks.", array());
        yield "</p>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/core.translations.html.twig";
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
        return array (  75 => 18,  71 => 17,  66 => 15,  62 => 14,  58 => 13,  53 => 11,  48 => 10,  46 => 9,  44 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/core.translations.html.twig", "/var/www/html/web/core/modules/help/help_topics/core.translations.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "trans" => 10);
        static $filters = array("escape" => 13);
        static $functions = array("render_var" => 8, "help_topic_link" => 8);

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
