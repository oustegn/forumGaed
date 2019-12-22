<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* mcp_header.html */
class __TwigTemplate_d001afa4a1439539b2e09c3e45b34a690edfa003d7b2e2b72f3585a6a4d585a5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "mcp_header.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2>";
        // line 3
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP");
        echo "</h2>

";
        // line 5
        if (($context["U_MCP"] ?? null)) {
            // line 6
            echo "\t<p class=\"linkmcp responsive-center\">
\t\t[";
            // line 7
            if (($context["U_ACP"] ?? null)) {
                echo "&nbsp;<a href=\"";
                echo ($context["U_ACP"] ?? null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP");
                echo "\" data-responsive-text=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_SHORT");
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP");
                echo "</a>&nbsp;|";
            }
            echo "&nbsp;<a href=\"";
            echo ($context["U_MCP"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP");
            echo "\" data-responsive-text=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP_SHORT");
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP");
            echo "</a>";
            if (($context["U_MCP_FORUM"] ?? null)) {
                echo "&nbsp;|&nbsp;<a href=\"";
                echo ($context["U_MCP_FORUM"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATE_FORUM");
                echo "</a>";
            }
            if (($context["U_MCP_TOPIC"] ?? null)) {
                echo "&nbsp;|&nbsp;<a href=\"";
                echo ($context["U_MCP_TOPIC"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATE_TOPIC");
                echo "</a>";
            }
            if (($context["U_MCP_POST"] ?? null)) {
                echo "&nbsp;|&nbsp;<a href=\"";
                echo ($context["U_MCP_POST"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATE_POST");
                echo "</a>";
            }
            echo "&nbsp;]
\t</p>
";
        }
        // line 10
        echo "
<div id=\"tabs\" class=\"tabs\">
\t<ul>
\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "l_block1", []));
        foreach ($context['_seq'] as $context["_key"] => $context["l_block1"]) {
            // line 14
            echo "\t\t<li class=\"tab";
            if ($this->getAttribute($context["l_block1"], "S_SELECTED", [])) {
                echo " activetab";
            }
            echo "\"><a href=\"";
            echo $this->getAttribute($context["l_block1"], "U_TITLE", []);
            echo "\">";
            echo $this->getAttribute($context["l_block1"], "L_TITLE", []);
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t</ul>
</div>

<div class=\"panel bg3\">
\t<div class=\"inner\">

\t<div style=\"width: 100%;\">

\t<div id=\"cp-menu\" class=\"cp-menu\">
\t\t<div id=\"navigation\" class=\"navigation\" role=\"navigation\">
\t\t\t<ul>
\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "l_block1", []));
        foreach ($context['_seq'] as $context["_key"] => $context["l_block1"]) {
            // line 28
            echo "\t\t\t";
            if ($this->getAttribute($context["l_block1"], "S_SELECTED", [])) {
                // line 29
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["l_block1"], "l_block2", []));
                foreach ($context['_seq'] as $context["_key"] => $context["l_block2"]) {
                    // line 30
                    echo "\t\t\t\t";
                    if ($this->getAttribute($context["l_block2"], "S_SELECTED", [])) {
                        // line 31
                        echo "\t\t\t\t<li id=\"active-subsection\" class=\"active-subsection\"><a href=\"";
                        echo $this->getAttribute($context["l_block2"], "U_TITLE", []);
                        echo "\"><span>";
                        echo $this->getAttribute($context["l_block2"], "L_TITLE", []);
                        if ($this->getAttribute($context["l_block2"], "ADD_ITEM", [])) {
                            echo " (";
                            echo $this->getAttribute($context["l_block2"], "ADD_ITEM", []);
                            echo ")";
                        }
                        echo "</span></a></li>
\t\t\t\t";
                    } else {
                        // line 33
                        echo "\t\t\t\t<li><a href=\"";
                        echo $this->getAttribute($context["l_block2"], "U_TITLE", []);
                        echo "\"><span>";
                        echo $this->getAttribute($context["l_block2"], "L_TITLE", []);
                        if ($this->getAttribute($context["l_block2"], "ADD_ITEM", [])) {
                            echo " (";
                            echo $this->getAttribute($context["l_block2"], "ADD_ITEM", []);
                            echo ")";
                        }
                        echo "</span></a></li>
\t\t\t\t";
                    }
                    // line 35
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "\t\t\t";
            }
            // line 37
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t\t</ul>
\t\t</div>
\t</div>

\t<div id=\"cp-main\" class=\"cp-main mcp-main panel-container\">
\t\t";
        // line 43
        if (($context["MESSAGE"] ?? null)) {
            // line 44
            echo "\t\t<div class=\"content\">
\t\t\t<h2 class=\"message-title\">";
            // line 45
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MESSAGE");
            echo "</h2>
\t\t\t<p class=\"error\">";
            // line 46
            echo ($context["MESSAGE"] ?? null);
            echo "</p>
\t\t\t<p>";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "return_links", []));
            foreach ($context['_seq'] as $context["_key"] => $context["return_links"]) {
                echo $this->getAttribute($context["return_links"], "MESSAGE_LINK", []);
                echo "<br /><br />";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_links'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</p>
\t\t</div>
\t\t";
        }
    }

    public function getTemplateName()
    {
        return "mcp_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 47,  210 => 46,  206 => 45,  203 => 44,  201 => 43,  194 => 38,  188 => 37,  185 => 36,  179 => 35,  166 => 33,  153 => 31,  150 => 30,  145 => 29,  142 => 28,  138 => 27,  125 => 16,  110 => 14,  106 => 13,  101 => 10,  55 => 7,  52 => 6,  50 => 5,  45 => 3,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "mcp_header.html", "");
    }
}
