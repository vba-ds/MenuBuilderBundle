<?php

namespace MenuBuilderBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

/**
 * Class MenuItemAdmin
 * @package MenuBuilderBundle\Admin
 */
class MenuItemAdmin extends Admin
{
    protected function configureListFields(ListMapper $list)
    {
        $list
            ->add('type');
    }

    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        parent::configureDatagridFilters($filter); // TODO: Change the autogenerated stub
    }

    protected function configureFormFields(FormMapper $form)
    {
        $itemTypes = array();
        /** @var \MenuBuilderBundle\ItemType\ItemTypeInterface $itemType */
        foreach ($this->getConfigurationPool()->getContainer()->get('menu_builder.item_type.chain')->get() as $itemType) {
            $itemTypes[$itemType->getName()] = $itemType->getName();
        }

        $form
            ->add('type', 'choice', array(
                'choices' => $itemTypes,
            ))
            ->add('position');
    }
}