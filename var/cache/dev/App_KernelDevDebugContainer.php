<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVyUYWDo\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVyUYWDo/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVyUYWDo.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVyUYWDo\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVyUYWDo\App_KernelDevDebugContainer([
    'container.build_hash' => 'VyUYWDo',
    'container.build_id' => '834509d3',
    'container.build_time' => 1689170276,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVyUYWDo');
