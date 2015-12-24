<?php

namespace MenuBuilderBundle\ItemType\Types;

use MenuBuilderBundle\ItemType\ItemTypeInterface;

/**
 * Class ExternalLink
 * @package MenuBuilderBundle\Types\ItemType
 */
class ExternalLink implements ItemTypeInterface
{

    /**
     * @return string
     */
    public function getName()
    {
        return 'External link';
    }

    /**
     * @return mixed
     */
    public function getRoute()
    {
        // TODO: Implement getRoute() method.
    }

    /**
     * @return array()
     */
    public function getChildItems()
    {
        // TODO: Implement getChildItems() method.
    }
}
