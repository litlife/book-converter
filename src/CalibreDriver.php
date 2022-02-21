<?php

namespace Litlife\BookConverter;

class CalibreDriver extends Driver
{
    protected string $binPath = 'ebook-convert';

    public array $inputFormats = ['docx', 'cbz', 'cbr', 'cbc', 'chm', 'djvu', 'epub', 'fb2', 'html', 'htmlz',
        'lit', 'lrf', 'mobi', 'odt', 'pdf', 'prc', 'pdb', 'pml', 'rb', 'rtf', 'snb', 'tcr', 'txt', 'txtz', 'xml'];

    public array $outputFormats = ['azw3', 'epub', 'fb2', 'oeb', 'lit', 'lrf', 'mobi', 'htmlz', 'pdb', 'pml',
        'rb', 'pdf', 'rtf', 'snb', 'tcr', 'txt', 'txtz'];

    public function getCommand(string $inputFile, string $outputFile): string
    {
        return $this->binPath.' ' . escapeshellarg($inputFile) . ' ' . escapeshellarg($outputFile) . '';
    }
}
