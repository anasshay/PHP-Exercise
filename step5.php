<?php 
$course_name = "PHP";
$enrolled_students = 36;
$price = 15.4;
$on_discount = true;
$output = $on_discount ? "Yes" : "No";

echo $course_name, $enrolled_students, $price, $on_discount, "\n";
echo "Course title: $course_name, the language of no bugs\n";
echo "Enrolled Students $enrolled_students\n";
echo "Course price: $price $ USD\n";
echo "Course on discount: $output\n"
?>