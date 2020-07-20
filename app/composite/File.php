<?php

namespace app\composite;

class File
{
    private $path = '';
    private $nodes = [];
    private $fileSize = 0;

    public function __construct(string $path, int $fileSize)
    {
        $this->path = $path;
        $this->fileSize = $fileSize;
    }

    public function addNode (File $node)
    {
        $this->nodes[] = $node;
    }

    public function fileSize ()
    {
        $size = $this->fileSize;

        foreach ($this->nodes as $node) {
            $size += $node->fileSize();
        }

        return $size;
    }
}