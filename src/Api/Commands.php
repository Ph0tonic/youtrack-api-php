<?php

namespace Oveleon\YouTrack\Api;

class Commands extends AbstractApi
{

    public function command($parameters)
    {
        $this->addFields(
            []
        );
        return $this->post("commands", $parameters);
    }
}
