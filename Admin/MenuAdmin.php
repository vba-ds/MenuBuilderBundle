<?php

namespace MenuBuilderBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

/**
 * Class MenuAdmin
 * @package MenuBuilderBundle\Admin
 */
class MenuAdmin extends Admin
{
    /**
     * {@inheritdoc}
     */
    public function prePersist($object)
    {
        /** @var \MenuBuilderBundle\Entity\MenuItem $item */
        foreach ($object->getItems() as $item) {
            $item->setMenu($object);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function preUpdate($object)
    {
        $this->prePersist($object);
    }

    /**
     * {@inheritdoc}
     */
    protected function configureListFields(ListMapper $list)
    {
        $list
            ->add('isActive', null, array(
                'editable' => true,
            ))
            ->addIdentifier('name')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'delete' => array(),
                ),
            ));
    }

    /**
     * {@inheritdoc}
     */
    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter
            ->add('name')
            ->add('isActive');
    }

    /**
     * {@inheritdoc}
     */
    protected function configureFormFields(FormMapper $form)
    {
        $form
            ->add('name')
            ->add('isActive')
            ->add('items', 'sonata_type_collection', array(
                'required' => false,
                'cascade_validation' => true,
                ), array(
                    'edit' => 'inline',
                    'inline' => 'table',
                    'sortable' => 'position',
                    'admin_code' => 'menu_builder.admin.menu_item',
                ));
    }
}
