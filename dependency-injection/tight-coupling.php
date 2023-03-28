<?php 
// top down approach
class Course {
    public $cid;
    public $lidObj;
    function __construct($cid, $lid){
        $this->$cid = $cid;
        $this->lidObj =new Lesson($lid);
    }

}
class Lesson extends course{
    public $lid;
    function __construct($lid){
        $this->$lid = $lid;
    }
    function showLesson(){
        echo "here are the lesson";
    }

}
$course = new Course(1, 100);
$lesson = new Lesson(100);