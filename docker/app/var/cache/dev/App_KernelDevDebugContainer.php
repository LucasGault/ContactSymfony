<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

<<<<<<< HEAD
if (\class_exists(\ContainerKaxWzo7\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKaxWzo7/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKaxWzo7.legacy');
=======
if (\class_exists(\ContainerKPjBFYB\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKPjBFYB/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKPjBFYB.legacy');
>>>>>>> emma

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
<<<<<<< HEAD
    \class_alias(\ContainerKaxWzo7\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKaxWzo7\App_KernelDevDebugContainer([
    'container.build_hash' => 'KaxWzo7',
    'container.build_id' => '9d9e3889',
    'container.build_time' => 1600327989,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKaxWzo7');
=======
    \class_alias(\ContainerKPjBFYB\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKPjBFYB\App_KernelDevDebugContainer([
    'container.build_hash' => 'KPjBFYB',
    'container.build_id' => '3a0f834b',
    'container.build_time' => 1600267015,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKPjBFYB');
>>>>>>> emma
