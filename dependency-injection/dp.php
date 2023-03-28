<?php 

class Course {
    public $cid;
 
    function __construct($cid){
        $this->$cid = $cid;
    }

}
class Lesson extends course{
    public $lid;
    function __construct($lid, Course $c){
        $this->$lid = $lid;
        $this->cid = $c->cid;
    }
    function showLesson(){
        echo "here are the lesson";
    }

}

class Quiz extends Course{
    public $qid;
    function __construct($qid, Course $c){
        $this->qid = $qid;
        $this->cid = $c->cid;
    }
}
$course = new Course(1);
$lesson = new Lesson(100, $course);