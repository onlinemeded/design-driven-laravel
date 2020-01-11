<?php

namespace OnlineMedEd\DomainDrivenLaravel\Commands;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputArgument;

class DomainEventServiceProviderMakeCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:domain:event-service-provider';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add an Event Service Provider an an existing Domain';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'EventServiceProvider';

    /**
     * Get the desired class name from the input.
     *
     * @return string
     */
    protected function getNameInput()
    {
        return trim($this->argument('name')).'/Provider/EventServiceProvider';
    }

    protected function domainNamespace($name)
    {
        return trim(implode('\\', array_slice(explode('\\', $name), 0, -2)), '\\');
    }

    /**
     * Determine if the class already exists.
     *
     * @param  string  $rawName
     *
     * @return bool
     */
    protected function alreadyExists($rawName)
    {
        return class_exists($rawName);
    }

    /**
     * Replace the namespace for the given stub.
     *
     * @param  string  $stub
     * @param  string  $name
     *
     * @return $this
     */
    protected function replaceNamespace(&$stub, $name)
    {
        $stub = str_replace(
            ['DummyNamespace', 'DummyRootNamespace', 'NamespacedDummyUserModel', 'DummyDomainNamespace'],
            [
                $this->getNamespace($name),
                $this->rootNamespace(),
                $this->userProviderModel(),
                $this->domainNamespace($name),
            ],
            $stub
        );

        return $this;
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/stubs/EventServiceProvider.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     *
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Domain';
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['name', InputArgument::REQUIRED, 'The name of the Domain'],
        ];
    }
}
