<?php

namespace WellRESTed\Routing\Route;

class StaticRoute extends Route
{
    public function getType(): int
    {
        return RouteInterface::TYPE_STATIC;
    }

    /**
     * Examines a request target to see if it is a match for the route.
     *
     * @param string $requestTarget
     * @return boolean
     */
    public function matchesRequestTarget(string $requestTarget): bool
    {
        return $requestTarget === $this->getTarget();
    }

    /**
     * Always returns an empty array.
     */
    public function getPathVariables(): array
    {
        return [];
    }
}
