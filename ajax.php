<?php
    include 'functions.php';
    if(!empty($_POST['delete_topic_id']))
    {
        $topicId = $_POST['delete_topic_id'];
        $result = deleteTopic($topicId);
        if($result == 1)
        {
            echo 1;
        }
    }
    if(!empty($_POST['delete_chapter_id']))
    {
        $chapterId = $_POST['delete_chapter_id'];
        $result = deleteChapter($chapterId);
        if($result == 1)
        {
            echo 1;
        }
    }
    if(!empty($_POST['delete_subject_id']))
    {
        $subjectId = $_POST['delete_subject_id'];
        $result = deleteSubject($subjectId);
        if($result == 1)
        {
            echo 1;
        }
    }
    