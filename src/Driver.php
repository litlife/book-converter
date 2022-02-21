<?php

namespace Litlife\BookConverter;

class Driver
{
    protected string $binPath = '';
	public array $inputFormats = [];
	public array $outputFormats = [];

	public function setBinPath(string $binPath)
    {
        $this->binPath = $binPath;
    }

    public function setInputFormats(array $inputFormats)
    {
        $this->inputFormats = $inputFormats;
    }

    public function setOutputFormats(array $outputFormats)
    {
        $this->outputFormats = $outputFormats;
    }

    public function getInputFormats() :array
    {
        return $this->inputFormats;
    }

    public function getOutputFormats() :array
    {
        return $this->outputFormats;
    }

    public function getBinPath() :string
    {
        return $this->binPath;
    }

    public function getCommand(string $inputFile, string $outputFile): string
    {
		return $this->binPath.' ' . escapeshellarg($inputFile) . ' ' . escapeshellarg($outputFile) . '';
	}
}
