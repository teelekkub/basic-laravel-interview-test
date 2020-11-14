<?php

namespace App\Services;

use App\Repositories\BiosRepository;
use Illuminate\Support\Facades\Log;

class BiosService
{
	private $biosRepository;

	public function __construct(BiosRepository $biosRepository) {
		$this->biosRepository = $biosRepository;
	}
	
    public function getAllAwards()
	{
		//
		Log::emergency('Example Log Emergency !');
		Log::alert('Example Log Alert !');
		Log::critical('Example Log Critical !');
		Log::error('Example Log Error !');
		Log::warning('Example Log Warning !');
		Log::notice('Example Log NOtice !');
		Log::info('Example Log Info !');
		Log::debug('Example Log Debug !');
		//
		
		try {
			Log::debug('------------------ Call getAllRewards ------------------');

			return $this->biosRepository->getAllRewards();
		} catch (Exception $e) {
			Log::error($e);
		}
	}

	public function getAllContributions() {
		try {
			Log::debug('------------------ Call getAllContributions ------------------');

			$result = [];
			$arrContributions = $this->biosRepository->getAllContributions();
	
			foreach($arrContributions as $arrContribution) {
				foreach($arrContribution->contribs as $contribution) {
					if(!in_array($contribution, $result)) {
						$result[] = $contribution;
					}
				}
			}
			
			return $result;
		} catch (Exception $e) {
			Log::error($e);
		}
	}

	public function getAllBios($contributionName) {
		try {
			Log::debug('------------------ Call getAllBios (' . $contributionName . ') ------------------');

			return $this->biosRepository->findByContribution($contributionName);
		} catch (Exception $e) {
			Log::error($e);
		}
	}

	public function getAllBiosByYear($year) {
		try {
			Log::debug('------------------ Call getAllBiosByYear (' . $year . ') ------------------');

			return $this->biosRepository->findByDeadBefore($year);
		} catch (Exception $e) {
			Log::error($e);
		}
	}
}