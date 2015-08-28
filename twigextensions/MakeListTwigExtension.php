<?php 
namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class MakeListTwigExtension extends \Twig_Extension
{
    public function getName()
    {
        return 'MakeList';
    }

    public function getFilters()
    {
        return array(
            'make_list' => new Twig_Filter_Method($this, 'makeList'),
        );
    }

    public function makeList($items, $sep = 'or') 
    {
        $count = count($items);

        if ($count === 0) {
            return '';
        }

        if ($count === 1) {
            return $items[0];
        }

        return implode(', ', array_slice($items, 0, -1)) . ' ' . $sep . ' ' . end($items);
    }
}
