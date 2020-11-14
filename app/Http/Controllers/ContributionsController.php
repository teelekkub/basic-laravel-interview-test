<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BiosService;
use App\Repositories\BiosRepository;

class ContributionsController extends Controller
{
    private $biosService;

    public function __construct(BiosService $biosService) {
        $this->biosService = $biosService;
    }

    public function contributionsAction() {
        // return response()->json($this->biosService->getAllContributions());
        return response()->json($this->biosService->getAllAwards());
        return response()->json($this->biosService->getAllBiosByYear(2000));
        
    }

    public function biosByContributionAction($contributionName) {
        $result = $this->biosService->getAllBios($contributionName);

        if($result->isEmpty()) {
            return response()->json('Not found', 404);
        } 

        return response()->json($result);
    }
}

