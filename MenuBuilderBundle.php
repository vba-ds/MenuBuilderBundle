<?php

namespace MenuBuilderBundle;

use MenuBuilderBundle\DependencyInjection\Compiler\ItemTypeCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class MenuBuilderBundle
 * @package MenuBuilderBundle
 */
class MenuBuilderBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new ItemTypeCompilerPass());
    }
}
