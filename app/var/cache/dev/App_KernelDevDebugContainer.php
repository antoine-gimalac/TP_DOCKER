<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerO9WihNj\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerO9WihNj/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerO9WihNj.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerO9WihNj\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerO9WihNj\App_KernelDevDebugContainer([
    'container.build_hash' => 'O9WihNj',
    'container.build_id' => 'c90496c6',
    'container.build_time' => 1698612495,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerO9WihNj');