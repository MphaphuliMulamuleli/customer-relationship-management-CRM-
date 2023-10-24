<?php

use Module\Views\Edit;

class PolicyEditView extends Edit {

    public function editPolicy($policyId, $data) {
        error_log("Editing Policy: ID = $policyId, Data = " . print_r($data, true));

        $policy = new lt_policy();
        $policy->load($policyId);

        if (isset($data['name'])) {
            $policy->setName($data['name']);
        }

        if (isset($data['description'])) {
            $policy->setDescription($data['description']);
        }

      
        $result = $policy->save();

        if (!$result) {
            error_log("Error saving policy: " . print_r($policy->get_errors(), true));
        } else {
            error_log("Policy Updated: " . print_r($policy, true));
        }

       
        return $policy; 
    }

 
}
