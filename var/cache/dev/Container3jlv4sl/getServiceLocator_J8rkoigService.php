<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.j8rkoig' shared service.

return $this->services['service_locator.j8rkoig'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('mapManager' => function () {
    $f = function (\AppBundle\Service\MapManager $v = null) { return $v; }; return $f(${($_ = isset($this->services['AppBundle\Service\MapManager']) ? $this->services['AppBundle\Service\MapManager'] : $this->services['AppBundle\Service\MapManager'] = new \AppBundle\Service\MapManager()) && false ?: '_'});
}));
