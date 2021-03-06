<?php

namespace Qafoo\ChangeTrack\Analyzer;

use pdepend\reflection\ReflectionSession;
use Qafoo\ChangeTrack\Analyzer\Reflection\FileQuery;
use Qafoo\ChangeTrack\Analyzer\Reflection\NullSourceResolver;

class ReflectionLookupFactory
{
    public function createReflectionLookup()
    {
        $sourceResolver = new NullSourceResolver();
        $session = ReflectionSession::createDefaultSession($sourceResolver);
        $query = new FileQuery($session->createFileQuery());

        return new ReflectionLookup($query);
    }
}
