<?php

namespace Theanik\RepositoryService\Commands;

use Illuminate\Console\Command;

abstract class CommandGenerator extends Command{

    public $argumentName;

    abstract protected function getTemplateContents();

    abstract protected function getDestinationFilePath();

    public function getDefaultNamespace() : string
    {
        return '';
    }

    public function getClass()
    {
        return class_basename($this->argument($this->argumentName));
    }


    public function getClassNamespace()
    {
        $extra = str_replace($this->getClass(), '', $this->argument($this->argumentName));

        $extra = str_replace('/', '\\', $extra);

        $namespace =  $this->getDefaultNamespace();

        $namespace .= '\\' . $extra;

        $namespace = str_replace('/', '\\', $namespace);

        return trim($namespace, '\\');
    }



}