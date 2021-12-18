<?php
    session_start();

    function OpenCon()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "smartedu";
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
        return $conn;
    }
    
    function CloseCon($conn)
    {
        $conn -> close();
    }

    function getHeader()
    {
        include 'header.php';
    }

    function getFooter()
    {
        include 'footer.php';
    }

    function getSideBar()
    {
        include 'sidebar.php';
    }

    function addSubject($name)
    {
        $conn = OpenCon();
        $query = "INSERT INTO subjects(name) VALUES('".$name."')";
        $result = mysqli_query($conn, $query);
        if($result)
        {
            echo '<script>
                    alert("Subject added successfully");
                   location.href="subjectsList.php";
                </script>';
        }
    }

    function getAllSubjects()
    {
        $conn = OpenCon();
        $query = "SELECT * FROM subjects";
        $result = mysqli_query($conn, $query);
        if($result)
        {
            return $result;
        }
    }

    function getSubjectDataById($id)
    {
        $conn = OpenCon();
        $query = "SELECT * FROM subjects WHERE id = '".$id."'";
        $result = mysqli_query($conn, $query);
        if($result)
        {
            return $result;
        }
    }

    function updateSubject($id, $name)
    {
        $conn = OpenCon();
        $query = "UPDATE subjects SET name = '".$name."' WHERE id = '".$id."'";
        $result = mysqli_query($conn, $query);
        if($result)
        {
            echo '<script>
                    alert("Subject updated successfully");
                   location.href="subjectsList.php";
                </script>';
        }
    }

    function deleteSubject($id)
    {
        $conn = OpenCon();
        $getChapterQuery = "SELECT * FROM chapters WHERE subject_id = '".$id."'";
        $chapterResult = mysqli_query($conn,$getChapterQuery);
        if($chapterResult)
        {
            while($chapterRow = mysqli_fetch_array($chapterResult))
            {
                $deleteTopicQuery = "DELETE FROM topics WHERE chapter_id = '".$chapterRow['id']."'";
                mysqli_query($conn,$deleteTopicQuery);
            }
        }
        $deleteChapterQuery = "DELETE FROM chapters WHERE subject_id = '".$id."'";
        $deleteChapterResult = mysqli_query($conn,$deleteChapterQuery);
        if($deleteChapterResult)
        {
            $deleteSubjectQuery = "DELETE FROM subjects WHERE id = '".$id."'";
            $deleteSubjectResult = mysqli_query($conn,$deleteSubjectQuery);
            if($deleteSubjectResult)
            {
                echo 1;
            }
        }
    }

    function addChapter($subjectId, $name)
    {
        $conn = OpenCon();
        $query = "INSERT INTO chapters(subject_id, name) VALUES('".$subjectId."', '".$name."')";
        $result = mysqli_query($conn, $query);
        if($result)
        {
            echo '<script>
                    alert("Chapter added successfully");
                   location.href="chaptersList.php";
                </script>';
        }
    }

    function getAllChapters()
    {
        $conn = OpenCon();
        $query = "SELECT * FROM chapters";
        $result = mysqli_query($conn, $query);
        if($result)
        {
            return $result;
        }
    }

    function getChapterDataById($id)
    {
        $conn = OpenCon();
        $query = "SELECT * FROM chapters WHERE id = '".$id."'";
        $result = mysqli_query($conn, $query);
        if($result)
        {
            return $result;
        }
    }

    function updateChapter($name, $chapterId)
    {
        $conn = OpenCon();
        $query = "UPDATE chapters SET name = '".$name."' WHERE id = '".$chapterId."'";
        $result = mysqli_query($conn, $query);
        if($result)
        {
            echo '<script>
                    alert("Chapter updated successfully");
                   location.href="chaptersList.php";
                </script>';
        }
    }

    function deleteChapter($id)
    {
        $conn = OpenCon();
        $queryForTopic = "DELETE FROM topics WHERE chapter_id = '".$id."'";
        $resultForTopic = mysqli_query($conn, $queryForTopic);
        if($resultForTopic)
        {
            $query = "DELETE FROM chapters WHERE id = '".$id."'";
            $result = mysqli_query($conn, $query);
            if($result)
            {
                return 1;
            }
        }
    }

    function addTopic($name, $content, $chapterId)
    {
        $conn = OpenCon();
        $query = "INSERT INTO topics(chapter_id,name,content) VALUES('".$chapterId."', '".$name."', '".$content."')";
        $result = mysqli_query($conn, $query);
        if($result)
        {
            echo '<script>
                    alert("Topic added successfully");
                   location.href="topicsList.php";
                </script>';
        }
    }

    function getAllTopics()
    {
        $conn = OpenCon();
        $query = "SELECT * FROM topics";
        $result = mysqli_query($conn, $query);
        if($result)
        {
            return $result;
        }
    }

    function getTopicDataById($id)
    {
        $conn = OpenCon();
        $query = "SELECT * FROM topics WHERE id = '".$id."'";
        $result = mysqli_query($conn, $query);
        if($result)
        {
            return $result;
        }
    }

    function updateTopic($name, $content, $topicId)
    {
        $conn = OpenCon();
        $query = "UPDATE topics SET name = '".$name."', content = '".$content."' WHERE id = '".$topicId."'";
        $result = mysqli_query($conn, $query);
        if($result)
        {
            echo '<script>
                    alert("Topic updated successfully");
                   location.href="topicsList.php";
                </script>';
        }
    }

    function deleteTopic($id)
    {
        $conn = OpenCon();
        $query = "DELETE FROM topics WHERE id = '".$id."' ";
        $result = mysqli_query($conn,$query);
        if($result)
        {
            return 1;
        }
    }

?>