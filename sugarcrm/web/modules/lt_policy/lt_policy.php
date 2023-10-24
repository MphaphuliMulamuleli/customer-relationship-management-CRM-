<?php 

use App\Models\SugarBean;

class lt_policy extends SugarBean {

    /**
    * The name of the table this module represents
    * @var string
    */
    protected $table = 'lt_policy';

    /**
     * The name of the policy
     * @var string
     */
    protected $name;

    /**
     * The description of the policy
     * @var string
     */
    protected $description;

    /**
     * Set the name of the policy
     * @param string $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * Get the name of the policy
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set the description of the policy
     * @param string $description
     */
    public function setDescription($description) {
        $this->description = $description;
    }

    /**
     * Get the description of the policy
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }
}
