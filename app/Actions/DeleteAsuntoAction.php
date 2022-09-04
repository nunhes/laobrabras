<?php

namespace App\Actions;
use App\Models\Asunto;
use Illuminate\Http\Request;

class DeleteAsuntoAction
{
    /**
     * Create a new action instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Prepare the action for execution, leveraging constructor injection.
    }

    /**
     * Execute the action.
     *
     * @return mixed
     */
    public function execute(Asunto $asunto)
    {
        Asunto::destroy($asunto->id);
    }
}
