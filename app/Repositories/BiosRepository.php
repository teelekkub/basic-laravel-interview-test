<?php

namespace App\Repositories;

use App\Models\BiosModel;
use MongoDB\BSON\UTCDateTime as MongoDate;

class BiosRepository 
{
    private $biosModel;

    public function __construct() {
		$this->biosModel = new BiosModel();
    }
    
    public function getAllContributions() {
        return $this->biosModel->all('contribs');
    }

    public function getAllRewards() {
        return $this->biosModel->all('awards');
    }

    public function findByFirstName($firstName) {
        return $this->biosModel->where('name.first', $firstName)->get();
    }

    public function findByContribution($contributionName) {
        return $this->biosModel->where('contribs', $contributionName)->get(); 
    }

    public function findByDeadBefore($year) {
        $bios = $this->biosModel->all();

        foreach($bios as $key => $bio) {
            if(!empty($bio->death)) {
                
                if($year > intval($bio->death->toDateTime()->format('Y'))) {
                    unset($bios[$key]); 
                }
            }
        }

        return $bios;
    }
}