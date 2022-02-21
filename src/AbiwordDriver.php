<?php

namespace Litlife\BookConverter;

class AbiwordDriver extends Driver
{
    protected string $binPath = 'abiword';
	public array $inputFormats = ['docx', 'doc', 'xml', 'html', 'rtf'];
	public array $outputFormats = ['docx', 'doc', 'xml', 'html', 'rtf'];

	public function getCommand(string $inputFile, string $outputFile): string
    {
		return $this->binPath.' --to=' . escapeshellarg($outputFile) . ' ' . escapeshellarg($inputFile) . ' ';
	}
}
