<?php
namespace Craft;

class MakeListPlugin extends BasePlugin
{
    public function getName()
    {
         return Craft::t('Make List');
    }

    public function getVersion()
    {
        return '1.0.0';
    }

    public function getDeveloper()
    {
        return 'One Design Company';
    }

    public function getDeveloperUrl()
    {
        return 'http://onedesigncompany.com';
    }

    public function hasCpSection()
    {
        return false;
    }

    public function addTwigExtension()
    {
        Craft::import('plugins.makelist.twigextensions.MakeListTwigExtension');

        return new MakeListTwigExtension();
    }
}
