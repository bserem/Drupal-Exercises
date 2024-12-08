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

/* @help_topics/comment.disabling.html.twig */
class __TwigTemplate_85f919bf38af0a5072ce9762b6f0ff82 extends Template
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
        $context["comment_permissions_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 8
            yield t("Administer comments and comment settings", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["comment_permissions_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["comment_permissions_text"] ?? null), "user.admin_permissions.module", ["modules" => "comment"]));
        // line 11
        $context["comment_config_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("comment.configuring"));
        // line 12
        $context["content_structure_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("core.content_structure"));
        // line 13
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 14
        yield t("Turn off commenting for a particular entity (see @content_structure_topic for more about content entities and fields). Note that if you want to turn off commenting for all entities of an entity type or subtype, you will need to edit the field settings for the comment field; see @comment_config_topic for more about configuring the comment field.", array("@content_structure_topic" => ($context["content_structure_topic"] ?? null), "@comment_config_topic" => ($context["comment_config_topic"] ?? null), ));
        yield "</p>
<h2>";
        // line 15
        yield t("Who can disable comments?", array());
        yield "</h2>
<p>";
        // line 16
        yield t("You will need the <em>@comment_permissions_link</em> permission in order to disable commenting. You will also need permission to edit the entity that the comments are on.", array("@comment_permissions_link" => ($context["comment_permissions_link"] ?? null), ));
        yield "</p>
<h2>";
        // line 17
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 19
        yield t("Find the entity you want to disable comments for, and edit it. For example, to turn off comments on a content item, you could find it by navigating in the <em>Manage</em> administrative menu to <em>Content</em>, filtering to find the content item, and clicking <em>Edit</em>.", array());
        yield "</li>
  <li>";
        // line 20
        yield t("Under <em>Comment settings</em>, select the desired comment setting:", array());
        // line 21
        yield "    <ul>
      <li>";
        // line 22
        yield t("<em>Open</em>: comments are allowed.", array());
        yield "</li>
      <li>";
        // line 23
        yield t("<em>Closed</em>: past comments remain visible, but no new comments are allowed.", array());
        yield "</li>
      <li>";
        // line 24
        yield t("<em>Hidden</em>: past comments are hidden, and no new comments are allowed.", array());
        yield "</li>
    </ul>
  </li>
  <li>";
        // line 27
        yield t("Save the entity.", array());
        yield "</li>
</ol>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/comment.disabling.html.twig";
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
        return array (  101 => 27,  95 => 24,  91 => 23,  87 => 22,  84 => 21,  82 => 20,  78 => 19,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  56 => 13,  54 => 12,  52 => 11,  50 => 10,  46 => 8,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/comment.disabling.html.twig", "/var/www/html/web/core/modules/comment/help_topics/comment.disabling.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "trans" => 8);
        static $filters = array("escape" => 14);
        static $functions = array("render_var" => 10, "help_route_link" => 10, "help_topic_link" => 11);

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
