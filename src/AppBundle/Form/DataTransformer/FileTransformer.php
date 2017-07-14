<?php

namespace AppBundle\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;

class FileTransformer implements DataTransformerInterface
{
    public function transform($file)
    {
        return [
            'file' => $file,
        ];
    }

    public function reverseTransform($data)
    {
        return $data['file'];
    }
}
