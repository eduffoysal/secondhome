<?php
class Candidate {
    private $id;
    private $unique_id;
    private $class_id;
    private $sId;
    private $std_id;
    private $user_id;
    private $remarks;
    public $selected;
    private $roll;
    private $about;
    public $gender;
    private $serial_code;
    private $session_id;
    private $submitted_date;

    function __construct($row){
        $this->id = $row["id"];
        $this->unique_id = $row["unique_id"];
        $this->class_id = $row["class_id"];
        $this->sId = $row["sId"];
        $this->std_id = $row["std_id"];
        $this->user_id = $row["user_id"];
        $this->remarks = $row["remarks"];
        $this->selected = $row["selected"];
        $this->roll = $row["roll"];
        $this->about = $row["about"];
        $this->gender = $row["gender"];
        $this->serial_code = $row["serial_code"];
        $this->session_id = $row["session_id"];
        $this->submitted_date = $row["submitted_date"];

    }
    // Setter methods
    public function setId($id) {
        $this->id = $id;
    }

    public function setUniqueId($unique_id) {
        $this->unique_id = $unique_id;
    }

    public function setClassId($class_id) {
        $this->class_id = $class_id;
    }

    public function setSId($sId) {
        $this->sId = $sId;
    }

    public function setStdId($std_id) {
        $this->std_id = $std_id;
    }

    public function setUserId($user_id) {
        $this->user_id = $user_id;
    }

    public function setUId($uId) {
        $this->remarks = $uId;
    }

    public function setSelected($selected) {
        $this->selected = $selected;
    }

    public function setRoll($roll) {
        $this->roll = $roll;
    }

    public function setAbout($about) {
        $this->about = $about;
    }

    public function setGender($gender) {
        $this->gender = $gender;
    }

    public function setSerialCode($serial_code) {
        $this->serial_code = $serial_code;
    }

    public function setSessionId($session_id) {
        $this->session_id = $session_id;
    }

    public function setSubmittedDate($submitted_date) {
        $this->submitted_date = $submitted_date;
    }

    // Getter methods
    public function getId() {
        return $this->id;
    }

    public function getUniqueId() {
        return $this->unique_id;
    }

    public function getClassId() {
        return $this->class_id;
    }

    public function getSId() {
        return $this->sId;
    }

    public function getStdId() {
        return $this->std_id;
    }

    public function getUserId() {
        return $this->user_id;
    }

    public function getUId() {
        return $this->remarks;
    }

    public function getSelected() {
        return $this->selected;
    }

    public function getRoll() {
        return $this->roll;
    }

    public function getAbout() {
        return $this->about;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getSerialCode() {
        return $this->serial_code;
    }

    public function getSessionId() {
        return $this->session_id;
    }
    public function getSubmittedDate() {
        return $this->submitted_date;
    }
}
?>
