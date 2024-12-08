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

/* @help_topics/core.config_overview.html.twig */
class __TwigTemplate_f2d3970e884670c53d05607b9c8482d9 extends Template
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
        // line 10
        yield "<h2>";
        yield t("What is the configuration system?", array());
        yield "</h2>
<p>";
        // line 11
        yield t("The configuration system provides the ability for administrators to customize the site, and to move and synchronize configuration changes between development sites and the live site. It does this in 2 ways:", array());
        yield "</p>
<ol>
  <li>";
        // line 13
        yield t("Providing storage for configuration", array());
        yield "</li>
  <li>";
        // line 14
        yield t("Providing a process in which configuration changes can be imported and exported between instances of the same site; for example, from \"dev\" to \"staging\" to \"live\"", array());
        yield "</li>
</ol>
<h2>";
        // line 16
        yield t("What is configuration data?", array());
        yield "</h2>
<p>";
        // line 17
        yield t("Configuration data describes settings that define how your site behaves or is displayed. For example, when a site administrator updates settings using an administrative form, these settings are stored as configuration data. Configuration data describes settings as simple as a site name and as complex as a view or image style.", array());
        yield "</p>
<h2>";
        // line 18
        yield t("What kinds of configuration are there?", array());
        yield "</h2>
<dl>
  <dt>";
        // line 20
        yield t("Active configuration", array());
        yield "</dt>
  <dd>";
        // line 21
        yield t("Active configuration is the current working configuration of a site. Storage of active configuration is defined by the site, and resides in the database by default.", array());
        yield "</dd>
  <dt>";
        // line 22
        yield t("Simple configuration", array());
        yield "</dt>
  <dd>";
        // line 23
        yield t("A simple configuration item is a group of settings, such as the settings for a module or theme. Each simple configuration item has its own unique structure.", array());
        yield "</dd>
  <dt>";
        // line 24
        yield t("Configuration entities", array());
        yield "</dt>
  <dd>";
        // line 25
        yield t("Configuration entities are user-defined configuration items grouped by type, such as views, image styles, and content types. Each configuration entity within a type has a similar structure.", array());
        yield "</dd>
  <dt>";
        // line 26
        yield t("Default configuration", array());
        yield "</dt>
  <dd>";
        // line 27
        yield t("Default configuration can be defined by a module, theme, or installation profile in its <em>config/install</em> or <em>config/optional</em> directories. Configuration is provided in YAML files (file extension .yml); YAML is a human-readable data serialization standard that is used by the core software for several purposes. Once the default configuration has been imported into the site's active configuration (through installing the extension), that configuration is owned by the site, not the extension. This means that future updates of the extension will not override the site's active configuration for that extension.", array());
        yield "</dd>
</dl>
<h2>";
        // line 29
        yield t("What is configuration synchronization?", array());
        yield "</h2>
<p>";
        // line 30
        yield t("Configuration synchronization is the process of exporting and importing configuration to keep configuration synchronized between different versions of a site; for example, between a development site and the live site.", array());
        yield "</p>
<p>";
        // line 31
        yield t("Each site has unique identifier, also called a <em>UUID</em>, which identifies the site to the system in any instance of the site, as long as the site instances have been reproduced as clones (cloning is when the codebase and database are copied to create a new site instance). When site instances are cloned, a \"dev\" instance of the site has the same UUID as the \"live\" instance. When site instances share the same UUID, configuration can be exported from one instance to another.", array());
        yield "</p>
<p>";
        // line 32
        yield t("The following list contains terms and concepts related to configuration synchronization:", array());
        yield "</p>
<dl>
  <dt>";
        // line 34
        yield t("Exported configuration", array());
        yield "</dt>
  <dd>";
        // line 35
        yield t("When configuration is exported, the active configuration is exported as a set of files in YAML format. When using the <em>Configuration synchronization</em> administrative UI, configuration can be exported as a full-export or single-item archive. This archive can then be imported into the destination site instance.", array());
        yield "</dd>
  <dt>";
        // line 36
        yield t("Imported configuration", array());
        yield "</dt>
  <dd>";
        // line 37
        yield t("Imported configuration is configuration that has been exported from another instance of the site (the \"source\") and is now being imported into another site instance (the \"destination\"), thereby updating its active configuration to match the imported configuration data set.", array());
        yield "</dd>
  <dt>";
        // line 38
        yield t("Configuration sync directory", array());
        yield "</dt>
  <dd>";
        // line 39
        yield t("The configuration sync directory location is set in the site's <em>settings.php</em> file. When configuration is exported, the active configuration is exported and described in YAML files which are stored in the configuration sync directory. After the first export, the system compares the site's active configuration with the configuration data in the sync directory and will only export active configuration items that are different than their counterparts in the sync directory.", array());
        yield "</dd>
</dl>
<h2>";
        // line 41
        yield t("Managing configuration overview", array());
        yield "</h2>
<p>";
        // line 42
        yield t("Configuration management tasks, such as exporting or importing configuration and synchronizing configuration, can be done either through the administrative UI provided by the core Configuration Manager module or a command-line interface (CLI) tool. Defining a configuration sync directory path other than the default value requires read/write access to the site's <em>settings.php</em> file.", array());
        yield "</p>
<p>";
        // line 43
        yield t("Most modules and themes also provide settings forms for updating the configuration they provide. See the related topics listed below for specific tasks.", array());
        yield "</p>
<h2>";
        // line 44
        yield t("Additional resources", array());
        yield "</h2>
<ul>
  <li>";
        // line 46
        yield t("<a href=\"https://www.drupal.org/docs/configuration-management/workflow-using-drush\">Configuration Management: Workflow using Drush</a>", array());
        yield "</li>
  <li>";
        // line 47
        yield t("<a href=\"https://www.drupal.org/docs/user_guide/en/understanding-data.html\">Concept: Types of Data (Drupal User Guide)</a>", array());
        yield "</li>
  <li>";
        // line 48
        yield t("<a href=\"https://www.drupal.org/docs/user_guide/en/install-dev-sites.html\">Concept: Development Sites (Drupal User Guide)</a>", array());
        yield "</li>
  <li>";
        // line 49
        yield t("<a href=\"https://www.drupal.org/docs/user_guide/en/install-dev-making.html\">Making a Development Site (Drupal User Guide)</a>", array());
        yield "</li>
</ul>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/core.config_overview.html.twig";
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
        return array (  180 => 49,  176 => 48,  172 => 47,  168 => 46,  163 => 44,  159 => 43,  155 => 42,  151 => 41,  146 => 39,  142 => 38,  138 => 37,  134 => 36,  130 => 35,  126 => 34,  121 => 32,  117 => 31,  113 => 30,  109 => 29,  104 => 27,  100 => 26,  96 => 25,  92 => 24,  88 => 23,  84 => 22,  80 => 21,  76 => 20,  71 => 18,  67 => 17,  63 => 16,  58 => 14,  54 => 13,  49 => 11,  44 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/core.config_overview.html.twig", "/var/www/html/web/core/modules/help/help_topics/core.config_overview.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 10);
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
