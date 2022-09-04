<?php

namespace App\Actions;

use App\Models\Asunto;
use Illuminate\Http\Request;

class CreateAsuntoAction
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
    public function execute(Request $request)
    {
        Asunto::create($request->all());
    }
}
