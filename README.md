# Craft Dynamic CSS Plugin

Collect dynamic CSS in Craft Twig templates and output them in the master template.

## Add CSS in Nested Blocks

```twig
{% set style %}
  #{{ id }} {
    color: {{ block.textColor }};
    background-color: {{ block.backgroundColor }};
  }
{% endset %}
{{ craft.dynamiccss.set(style) }}
```

You can call set multiple times. All styles will be concatenated.

## Output CSS in Master Template

```twig
{% if craft.dynamiccss.get() != '' %}
  <style>
    {{ craft.dynamiccss.get() }}
  </style>
{% endif %}
```
