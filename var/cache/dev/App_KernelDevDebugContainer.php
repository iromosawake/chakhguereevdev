<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9ONRAsR\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9ONRAsR/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container9ONRAsR.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container9ONRAsR\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container9ONRAsR\App_KernelDevDebugContainer([
    'container.build_hash' => '9ONRAsR',
    'container.build_id' => 'fad24d7d',
    'container.build_time' => 1688392633,
], __DIR__.\DIRECTORY_SEPARATOR.'Container9ONRAsR');
