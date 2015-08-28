# craft-make-list
A simple plugin that turns arrays into nice lists.

Turns things like `['Boston', 'Chicago', 'Detroit']` into Boston, Chicago or Detroit

```
{# Input #}
{{ ['Boston', 'Chicago', 'Detroit'] | make_list('and') }}

{# Returns #}
Boston, Chicago and Detroit
```

