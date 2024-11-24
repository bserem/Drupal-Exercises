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

/* @help_topics/help.overview.html.twig */
class __TwigTemplate_fbdb746184ee5d46a44c073f1e868607 extends Template
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
        $context["help_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Help", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        $context["help_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["help_link_text"] ?? null), "help.main"));
        // line 10
        $context["translate_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("User interface translation", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        $context["translate_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["translate_text"] ?? null), "locale.translate_page"));
        // line 12
        $context["help_search_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("help.help_topic_search"));
        // line 13
        yield "<h2>";
        yield t("What is a help topic?", array());
        yield "</h2>
<p>";
        // line 14
        yield t("A help topic describes a concept, or steps to accomplish a task, related to a feature provided by one or more modules or themes. If the core Search module is enabled, these topics are also searchable.", array());
        yield "</p>
<h2>";
        // line 15
        yield t("Where are help topics listed?", array());
        yield "</h2>
<p>";
        // line 16
        yield t("The top-level help topics are listed at @help_link. Links to other topics, including non-top-level help topics, can be found under the \"Related\" heading when viewing a topic page.", array("@help_link" => ($context["help_link"] ?? null), ));
        yield "</p>
<h2>";
        // line 17
        yield t("How are help topics provided?", array());
        yield "</h2>
<p>";
        // line 18
        yield t("Modules and themes can provide help topics as Twig-file-based plugins in a project sub-directory called <em>help_topics</em>; plugin metadata is provided in YAML front matter within each Twig file. Plugin-based help topics provided by modules and themes will automatically be updated when a module or theme is updated. Use the plugins in <em>core/modules/help/help_topics</em> as a guide when writing and formatting a help topic plugin for your theme or module.", array());
        yield "</p>
<h2>";
        // line 19
        yield t("How are help topics translated?", array());
        yield "</h2>
<p>";
        // line 20
        yield t("The title and body text of help topics provided by contributed modules and themes are translatable using @translate_link (provided by Interface Translation module). Topics provided by custom modules and themes are also translatable if they have been viewed at least once in a non-English language, which triggers putting their translatable text into the translation database.", array("@translate_link" => ($context["translate_link"] ?? null), ));
        yield "</p>
<h2>";
        // line 21
        yield t("How can users search for help topics?", array());
        yield "</h2>
<p>";
        // line 22
        yield t("To enable users to search help, including help topics, you will need to install the core Search module, configure a search page, and add a search block to the Help page or another administrative page. (A search page is provided automatically, and if you use the core Claro administrative theme, a help search block is shown on the main Help page.) Then users with search permissions, and permission to view help, will be able to search help. See the related topic, @help_search_topic, for step-by-step instructions.", array("@help_search_topic" => ($context["help_search_topic"] ?? null), ));
        yield "</p>
<h2>";
        // line 23
        yield t("Additional resources", array());
        yield "</h2>
<ul>
  <li><a href=\"https://www.drupal.org/node/3074421\">";
        // line 25
        yield t("Help Topics Standards", array());
        yield "</a></li>
</ul>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/help.overview.html.twig";
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
        return array (  106 => 25,  101 => 23,  97 => 22,  93 => 21,  89 => 20,  85 => 19,  81 => 18,  77 => 17,  73 => 16,  69 => 15,  65 => 14,  60 => 13,  58 => 12,  56 => 11,  51 => 10,  49 => 9,  44 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/help.overview.html.twig", "/var/www/html/web/core/modules/help/help_topics/help.overview.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "trans" => 8);
        static $filters = array("escape" => 16);
        static $functions = array("render_var" => 9, "help_route_link" => 9, "help_topic_link" => 12);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'help_route_link', 'help_topic_link'],
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
