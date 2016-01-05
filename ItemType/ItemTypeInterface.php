<?php

namespace MenuBuilderBundle\ItemType;

/**
 * Interface ItemTypeInterface
 * @package MenuBuilderBundle\ItemType
 */
interface ItemTypeInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @return mixed
     */
    public function getRoute();

    /**
     * @return array
     */
    public function getChildItems();
}
