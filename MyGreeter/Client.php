<?php
/**
 * Created by north.Deng's MAC
 * User: north.Deng
 * Date: 2019/2/25
 * Time: 10:59 AM
 * description :
 */
namespace MyGreeter;

class Client {
    public function getGreeting()
    {
        if ($this->getTimeSection('00:00','12:00')) {
            return 'Good morning';
        } else if($this->getTimeSection('12:00','18:00')){
            return 'Good afternoon';
        } else {
            return 'Good evening';
        }
    }

    private function getTimeSection($startTimeStr, $endTimeStr){
        $day = date('Y-m-d',time());
        $currentTime = time();
        $startTime = strtotime($day.$startTimeStr);
        $endTime = strtotime($day.$endTimeStr);
        if ($startTime <= $currentTime && $endTime > $currentTime) {
            return true;
        }
        return false;
    }
}
 
 