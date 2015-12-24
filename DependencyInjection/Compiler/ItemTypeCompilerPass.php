<?php

namespace MenuBuilderBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

/**
 * Class ItemTypeCompilerPass
 * @package MenuBuilderBundle\DependencyInjection
 */
class ItemTypeCompilerPass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        if (!$container->hasDefinition('menu_builder.item_type.chain')) {
            return;
        }

        $definition = $container->getDefinition('menu_builder.item_type.chain');

        foreach ($container->findTaggedServiceIds('menu_builder.item_type') as $id => $tags) {
            $definition->addMethodCall('addItemType', array(new Reference($id)));
        }
    }
}
