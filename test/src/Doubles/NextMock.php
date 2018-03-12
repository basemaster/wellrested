<?php

namespace WellRESTed\Test\Doubles;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class NextMock
{
    public $called = false;
    public $request = null;
    public $response = null;
    public $upstreamResponse = null;

    public function __invoke(
        ServerRequestInterface $request,
        ResponseInterface $response
    ) {
        $this->called = true;
        $this->request = $request;
        $this->response = $response;
        if ($this->upstreamResponse) {
            return $this->upstreamResponse;
        } else {
            return $response;
        }
    }
}
