<?php

namespace Hovsepyan\LaravelSwagger;

use Illuminate\Console\Command;

class GenerateSwaggerDoc extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'swagthis:generate
                             {--format=json : The format of the output, current options are json and yaml}
                            {--filter= : Filter to a specific route prefix, such as /api or /v2/api}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Automatically generates a swagger documentation file for this application';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $config = config('laravel-swagger');

        $docs = (new Generator($config, $this->option('filter') ?: null))->generate();

        $formattedDocs = (new FormatterManager($docs))
            ->setFormat($this->option('format'))
            ->format();

        $this->line($formattedDocs);
    }
}