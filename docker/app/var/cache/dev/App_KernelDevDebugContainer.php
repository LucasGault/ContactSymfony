<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHbMu0V1\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHbMu0V1/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHbMu0V1.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHbMu0V1\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHbMu0V1\App_KernelDevDebugContainer([
    'container.build_hash' => 'HbMu0V1',
    'container.build_id' => '7d60202d',
    'container.build_time' => 1601987504,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHbMu0V1');
