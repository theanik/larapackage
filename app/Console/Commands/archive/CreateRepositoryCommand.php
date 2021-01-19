<?php

namespace App\Console\Commands;

use App\Console\Commands\CommandGenerator;
use App\Console\Commands\GenerateFile;
use App\Console\Commands\FileGenerator;
//extends CommandGenerator
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Illuminate\Support\Str;
class CreateRepositoryCommand extends CommandGenerator
{


    public $argumentName = 'reposit';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'make:reposit';


    protected function getArguments()
    {
        return [
            ['reposit', InputArgument::REQUIRED, 'The name of the controller class.'],
        ];
    }


    

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
       parent::__construct();
    }

    private function getRepositoryName()
    {
        $repository = Str::studly($this->argument('reposit'));

        if (Str::contains(strtolower($repository), 'repository') === false) {
            $repository .= 'Repository';
        }

        return $repository;
    }

    private function getRepositoryNameWithoutNamespace()
    {
        return class_basename($this->getRepositoryName());
    }

    public function getDefaultNamespace() : string
    {
        return "App\\Repositories";
    }


    protected function getTemplateContents()
    {
        // return file_get_contents(app_path().'/Console/Commands/stubs/repository.stub');
        return (new GenerateFile(app_path().'/Console/Commands/stubs/repository.stub', [
            'CLASS_NAMESPACE'   => $this->getClassNamespace(),
            'CLASS'             => $this->getRepositoryNameWithoutNamespace()
        ]))->render();
    }

    protected function getDestinationFilePath()
    {
        return app_path()."/Repositories".'/'. $this->getRepositoryName() . '.php';
    }


    


    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $path = str_replace('\\', '/', $this->getDestinationFilePath());

        if (!$this->laravel['files']->isDirectory($dir = dirname($path))) {
            $this->laravel['files']->makeDirectory($dir, 0777, true);
        }

        $contents = $this->getTemplateContents();

        try {
            
            (new FileGenerator($path, $contents))->generate();

            $this->info("Created : {$path}");
        } catch (\Exception $e) {

            // $this->error("File : {$path} already exists.");
            $this->error("File : {$e->getMessage()}");

            return E_ERROR;
        }

        return 0;

        // echo $this->getTemplateContents();
    }
}
