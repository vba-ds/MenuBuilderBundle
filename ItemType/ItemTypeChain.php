<?php

namespace MenuBuilderBundle\ItemType;

/**
 * Class ItemTypeChain
 * @package MenuBuilderBundle\ItemType
 */
class ItemTypeChain
{
    /**
     * @var array
     */
    private $itemTypes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->itemTypes = array();
    }

    /**
     * @param ItemTypeInterface $itemType
     */
    public function addItemType(ItemTypeInterface $itemType)
    {
        $this->itemTypes[] = $itemType;
    }

    /**
     * @return array
     */
    public function get()
    {
        return $this->itemTypes;
    }
}
