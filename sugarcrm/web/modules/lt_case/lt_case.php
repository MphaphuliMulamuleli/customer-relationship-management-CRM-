<?php

use App\Models\SugarBean;

class lt_case extends SugarBean {

    /**
     * The name of the table this module represents
     * @var string
     */
    protected $table = 'lt_case';

    /**
     * The case ID
     * @var string
     */
    protected $case_id;

    /**
     * The policy ID
     * @var string
     */
    protected $policy_id;

    /**
     * The type of the case
     * @var string
     */
    protected $type;

    /**
     * The status of the case
     * @var string
     */
    protected $status;

    /**
     * Set the case ID
     * @param string $case_id
     */
    public function setCaseId($case_id) {
        $this->case_id = $case_id;
    }

    /**
     * Get the case ID
     * @return string
     */
    public function getCaseId() {
        return $this->case_id;
    }

    /**
     * Set the policy ID
     * @param string $policy_id
     */
    public function setPolicyId($policy_id) {
        $this->policy_id = $policy_id;
    }

    /**
     * Get the policy ID
     * @return string
     */
    public function getPolicyId() {
        return $this->policy_id;
    }

    /**
     * Set the type of the case
     * @param string $type
     */
    public function setType($type) {
        $this->type = $type;
    }

    /**
     * Get the type of the case
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set the status of the case
     * @param string $status
     */
    public function setStatus($status) {
        $this->status = $status;
    }

    /**
     * Get the status of the case
     * @return string
     */
    public function getStatus() {
        return $this->status;
    }
}

