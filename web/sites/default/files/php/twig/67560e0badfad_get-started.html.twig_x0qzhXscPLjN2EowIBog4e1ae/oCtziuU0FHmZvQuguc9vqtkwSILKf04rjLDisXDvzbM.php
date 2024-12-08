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

/* @olivero/includes/get-started.html.twig */
class __TwigTemplate_b6ccdec5bcc7b3d15689273e0900fcac extends Template
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
        // line 13
        yield "
";
        // line 14
        $context["drupal_community"] = "https://www.drupal.org/community";
        // line 15
        $context["drupal_values"] = "https://www.drupal.org/about/values-and-principles";
        // line 16
        $context["drupal_user_guide"] = "https://www.drupal.org/docs/user_guide/en/index.html";
        // line 17
        $context["create_content"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("node.add_page");
        // line 18
        $context["drupal_extend"] = "https://www.drupal.org/docs/extending-drupal";
        // line 19
        $context["drupal_global_training_days"] = "https://groups.drupal.org/global-training-days";
        // line 20
        $context["drupal_events"] = "https://www.drupal.org/community/events";
        // line 21
        $context["drupal_slack"] = "https://www.drupal.org/slack";
        // line 22
        $context["drupal_chat"] = "https://www.drupal.org/drupalchat";
        // line 23
        $context["drupal_answers"] = "https://drupal.stackexchange.com/";
        // line 24
        $context["drupal_support"] = "https://www.drupal.org/support";
        // line 25
        yield "
<div class=\"text-content\">
  <p>";
        // line 27
        yield t("<em>You haven’t created any frontpage content yet.</em>", array());
        yield "</p>
  <h2>";
        // line 28
        yield t("Congratulations and welcome to the Drupal community.", array());
        yield "</h2>
  <p>";
        // line 29
        yield t("Drupal is an open source platform for building amazing digital experiences. It’s made, used, taught, documented, and marketed by the <a href=\"@drupal_community\">Drupal community</a>. Our community is made up of people from around the world with a shared set of <a href=\"@drupal_values\">values</a>, collaborating together in a respectful manner. As we like to say:", array("@drupal_community" => ($context["drupal_community"] ?? null), "@drupal_values" => ($context["drupal_values"] ?? null), ));
        yield "</p>
  <blockquote>";
        // line 30
        yield t("Come for the code, stay for the community.", array());
        yield "</blockquote>
  <h2>";
        // line 31
        yield t("Get Started", array());
        yield "</h2>
  <p>";
        // line 32
        yield t("There are a few ways to get started with Drupal:", array());
        yield "</p>
  <ol>
    <li>";
        // line 34
        yield t("<a href=\"@drupal_user_guide\">User Guide:</a> Includes installing, administering, site building, and maintaining the content of a Drupal website.", array("@drupal_user_guide" => ($context["drupal_user_guide"] ?? null), ));
        yield "</li>
    <li>";
        // line 35
        yield t("<a href=\"@create_content\">Create Content:</a> Want to get right to work? Start adding content. <strong>Note:</strong> the information on this page will go away once you add content to your site. Read on and bookmark resources of interest.", array("@create_content" => ($context["create_content"] ?? null), ));
        yield "</li>
    <li>";
        // line 36
        yield t("<a href=\"@drupal_extend\">Extend Drupal:</a> Drupal’s core software can be extended and customized in remarkable ways. Install additional functionality and change the look of your site using addons contributed by our community.", array("@drupal_extend" => ($context["drupal_extend"] ?? null), ));
        yield "</li>
  </ol>
  <h2>";
        // line 38
        yield t("Next Steps", array());
        yield "</h2>
  <p>";
        // line 39
        yield t("Bookmark these links to our active Drupal community groups and support resources.", array());
        yield "</p>
  <ul>
    <li>";
        // line 41
        yield t("<a href=\"@drupal_global_training_days\">Global Training Days:</a> Helpful information for evaluating Drupal as a framework and as a career path. Taught in your local language.", array("@drupal_global_training_days" => ($context["drupal_global_training_days"] ?? null), ));
        yield "</li>
    <li>";
        // line 42
        yield t("<a href=\"@drupal_events\">Upcoming Events:</a> Learn and connect with others at conferences and events held around the world.", array("@drupal_events" => ($context["drupal_events"] ?? null), ));
        yield "</li>
    <li>";
        // line 43
        yield t("<a href=\"@drupal_community\">Community Page:</a> List of key Drupal community groups with their own content.", array("@drupal_community" => ($context["drupal_community"] ?? null), ));
        yield "</li>
    <li>";
        // line 44
        yield t("Get support and chat with the Drupal community on <a href=\"@drupal_slack\">Slack</a> or <a href=\"@drupal_chat\">DrupalChat</a>. When you’re looking for a solution to a problem, go to <a href=\"@drupal_support\">Drupal Support</a> or <a href=\"@drupal_answers\">Drupal Answers on Stack Exchange</a>.", array("@drupal_slack" => ($context["drupal_slack"] ?? null), "@drupal_chat" => ($context["drupal_chat"] ?? null), "@drupal_support" => ($context["drupal_support"] ?? null), "@drupal_answers" => ($context["drupal_answers"] ?? null), ));
        yield "</li>
  </ul>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@olivero/includes/get-started.html.twig";
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
        return array (  132 => 44,  128 => 43,  124 => 42,  120 => 41,  115 => 39,  111 => 38,  106 => 36,  102 => 35,  98 => 34,  93 => 32,  89 => 31,  85 => 30,  81 => 29,  77 => 28,  73 => 27,  69 => 25,  67 => 24,  65 => 23,  63 => 22,  61 => 21,  59 => 20,  57 => 19,  55 => 18,  53 => 17,  51 => 16,  49 => 15,  47 => 14,  44 => 13,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@olivero/includes/get-started.html.twig", "/var/www/html/web/core/themes/olivero/templates/includes/get-started.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 14, "trans" => 27);
        static $filters = array("escape" => 29);
        static $functions = array("path" => 17);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['path'],
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
