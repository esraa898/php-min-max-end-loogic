<?PHP



$content =file_get_contents("test.html");

if (isset($_POST['names']  )){

    $list_of_student =explode(",",$_POST['names']);
    $list_of_courses =explode(",",$_POST['course']);
    $count_of_students= count($list_of_student);
    for($i=0; $i<$count_of_students;$i++){
        $file_name= $list_of_student[$i].".html";
      $file=  fopen("certificate/".$file_name,"w");
      $araay_value=array(implode(", ", $list_of_student),implode(", ", $list_of_courses));
      $array_replace= array("name","course");
    $newcontent=  str_replace( $array_replace,$araay_value,$content);
fwrite($file,$newcontent);
}


}

?>
