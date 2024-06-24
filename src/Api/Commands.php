<?php

namespace Oveleon\YouTrack\Api;

class Commands extends AbstractApi
{
    protected function defaultFields(): self
    {
        $this->addFields([
            'id',
            'idReadable',
            'summary'
        ]);

        return $this;
    }

    public function command($parameters): array
    {
        return $this->post("commands", $parameters);
    }
}
