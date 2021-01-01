<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registraton extends Model
{
    private $id;
    private $registrationDate;
    private $timeStart;
    private $timeFinish;
    private $reason;
    private $reasonForCancel;
    private $status;

    public function __construct() {

    }

    public static function create() {
        $instance = new self();
        return $instance;
    }

    public function setID( $id) {
        $this->id = $id;
        return $this;
    }

    public function setRegistationDate( $registrationDate) {
        $this->registrationDate = $registrationDate;
        return $this;
    }

    public function setTimeStart( $time) {
        $this->timeStart = $time;
        return $this;
    }

    public function setTimeFinish( $time) {
        $this->timeFinish = $time;
        return $this;
    }
    public function setReason( $Reason) {
        $this->reason = $Reason;
        return $this;
    }

    public function setReasonForCancel( $reasonForCancel) {
        $this->reasonForCancel = $reasonForCancel;
        return $this;
    }

    public function setStatus( $status) {
        $this->status = $status;
        return $this;
    }

}

$student= Registraton::create()->setID(10) ->setStatus(1);

var_dump($student);

?>
