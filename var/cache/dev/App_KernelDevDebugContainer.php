<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPuwyXw4\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPuwyXw4/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPuwyXw4.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPuwyXw4\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPuwyXw4\App_KernelDevDebugContainer([
    'container.build_hash' => 'PuwyXw4',
    'container.build_id' => '360b49e2',
    'container.build_time' => 1689335501,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPuwyXw4');
