<?php

namespace CodingLiki\AnnotatedPhpMvc\Annotations;

use CodingLiki\AnnotationReader\AbstractAnnotation;

class Router extends AbstractAnnotation
{
    public function process()
    {
        $first_params = $this->bracketsParser->getFirst();
        $method = $first_params['method'] ?? 'get';
        $url    = $first_params['url'] ?? null;

        if($url === null){
        }
    }
}
