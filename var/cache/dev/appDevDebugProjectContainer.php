<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJk78ncw\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJk78ncw/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerJk78ncw.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerJk78ncw\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerJk78ncw\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Jk78ncw',
    'container.build_id' => '5080e7cc',
    'container.build_time' => 1528448396,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerJk78ncw');
