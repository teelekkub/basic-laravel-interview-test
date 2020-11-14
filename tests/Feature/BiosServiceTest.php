<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Services\BiosService;
use App\Repositories\BiosRepository;
use Illuminate\Support\Facades\Log;

class BiosServiceTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetAllAwards()
    {
        $biosRepository = new BiosRepository();

        $biosService = new BiosService($biosRepository);

        $response = $biosService->getAllAwards(); 
        
        $isJson = true;

        foreach($response as $key => $bio) {
            if(!$bio->_id) {
                $isJson = false;
            }
        }

        $this->assertTrue($isJson);
    }
}
