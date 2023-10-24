<?php 

use App\Models\SugarBean;

class lt_customer extends SugarBean {

    /**
    * The name of the table this module represents
    * @var string
    */
    protected $table = 'lt_customer';

    /**
     * The first name of the customer
     * @var string
     */
    protected $first_name;

    /**
     * The last name of the customer
     * @var string
     */
    protected $last_name;

    /**
     * The ID number of the customer
     * @var string
     */
    protected $id_number;

    /**
     * The phone number of the customer
     * @var string
     */
    protected $phone;

    /**
     * The status of the ID number
     * @var string
     */
    protected $id_number_status;

    /**
     * Set the first name of the customer
     * @param string $first_name
     */
    public function setFirstName($first_name) {
        $this->first_name = $first_name;
    }

    /**
     * Get the first name of the customer
     * @return string
     */
    public function getFirstName() {
        return $this->first_name;
    }

    /**
     * Set the last name of the customer
     * @param string $last_name
     */
    public function setLastName($last_name) {
        $this->last_name = $last_name;
    }

    /**
     * Get the last name of the customer
     * @return string
     */
    public function getLastName() {
        return $this->last_name;
    }

    /**
     * Set the ID number of the customer
     * @param string $id_number
     */
    public function setIdNumber($id_number) {
        $this->id_number = $id_number;
    }

    /**
     * Get the ID number of the customer
     * @return string
     */
    public function getIdNumber() {
        return $this->id_number;
    }

    /**
     * Set the phone number of the customer
     * @param string $phone
     */
    public function setPhone($phone) {
        $this->phone = $phone;
    }

    /**
     * Get the phone number of the customer
     * @return string
     */
    public function getPhone() {
        return $this->phone;
    }

    /**
     * Set the status of the ID number
     * @param string $id_number_status
     */
    public function setIdNumberStatus($id_number_status) {
        $this->id_number_status = $id_number_status;
    }

    /**
     * Get the status of the ID number
     * @return string
     */
    public function getIdNumberStatus() {
        return $this->id_number_status;
    }
}
