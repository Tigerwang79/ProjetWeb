<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZmwvmOD\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZmwvmOD/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZmwvmOD.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZmwvmOD\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZmwvmOD\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZmwvmOD',
    'container.build_id' => 'ef192edf',
    'container.build_time' => 1651184134,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZmwvmOD');
