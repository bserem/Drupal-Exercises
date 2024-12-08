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

/* @help_topics/editor.overview.html.twig */
class __TwigTemplate_af421b65b0179b0fee94dfd0f9e49073 extends Template
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
        $context["filter_overview_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("filter.overview"));
        // line 9
        $context["overview_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Text formats and editors", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["overview_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["overview_link_text"] ?? null), "filter.admin_overview"));
        // line 11
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 12
        yield t("Configure a text format so that when a user is editing text and selects this text format, a text editor installed on your site is shown. Configure the text editor, such as choosing which buttons and functions are available. See @filter_overview_topic for more about text formats.", array("@filter_overview_topic" => ($context["filter_overview_topic"] ?? null), ));
        yield "</p>
<h2>";
        // line 13
        yield t("What is a text editor?", array());
        yield "</h2>
<p>";
        // line 14
        yield t("A text editor is software (typically, a JavaScript library) that provides buttons and other command mechanisms to make editing HTML text easier. Some editors are called <em>visual</em> or <em>WYSIWYG (What You See Is What You Get)</em> editors; these editors hide the details of HTML from the user, and instead show formatted output on the screen. The core Text Editor module provides a framework for deploying text editors on your site. The core CKEditor 5 module provides CKEditor 5, which is a widely-used JavaScript text editor that creates clean and valid HTML; the module also enforces the HTML tag restrictions in the associated text format. Various contributed modules provide other editors; to install a new editor, besides installing the module, you may need to download the editor library from a third-party site.", array());
        yield "</p>
<h2>";
        // line 15
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 17
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Content Authoring</em> &gt; <em>@overview_link</em>. The <em>Text editor</em> column in the table shows the text editor that is currently connected to each text format, if any.", array("@overview_link" => ($context["overview_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 18
        yield t("Follow the steps on @filter_overview_topic to add a new text format or configure an existing text format; when you reach the step about text editors, return to this topic.", array("@filter_overview_topic" => ($context["filter_overview_topic"] ?? null), ));
        yield "</li>
  <li>";
        // line 19
        yield t("Select <em>CKEditor 5</em> as the <em>Text editor</em>, or another text editor that you have installed. The rest of these steps assume you selected <em>CKEditor 5</em>.", array());
        yield "</li>
  <li>";
        // line 20
        yield t("Under <em>Toolbar configuration</em>, drag buttons between <em>Available buttons</em> and <em>Active toolbar</em>; only buttons in <em>Active toolbar</em> will be shown to the user. Focusing or hovering over a button will display a tooltip explaining what the button does.", array());
        yield "</li>
  <li>";
        // line 21
        yield t("Drag buttons within <em>Active toolbar</em> to the desired order, and group buttons by dragging them between group identifiers; drag <em>a new group identifier</em> to the toolbar to add additional groups.", array());
        yield "</li>
  <li>";
        // line 22
        yield t("If you add buttons that require configuration, the <em>CKEditor 5 plugin settings</em> section will be visible, and provide their respective configuration forms.", array());
        yield "</li>
  <li>";
        // line 23
        yield t("Return to @filter_overview_topic to complete the text format configuration, and be sure to save the text format.", array("@filter_overview_topic" => ($context["filter_overview_topic"] ?? null), ));
        yield "</li>
</ol>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/editor.overview.html.twig";
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
        return array (  99 => 23,  95 => 22,  91 => 21,  87 => 20,  83 => 19,  79 => 18,  75 => 17,  70 => 15,  66 => 14,  62 => 13,  58 => 12,  53 => 11,  51 => 10,  46 => 9,  44 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/editor.overview.html.twig", "/var/www/html/web/core/modules/editor/help_topics/editor.overview.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "trans" => 9);
        static $filters = array("escape" => 12);
        static $functions = array("render_var" => 8, "help_topic_link" => 8, "help_route_link" => 10);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'help_topic_link', 'help_route_link'],
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
