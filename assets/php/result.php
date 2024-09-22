<?php

$student_name = $_POST['student_name'];
$english = $_POST['english_number'];
$bengali = $_POST['bengali_number'];
$math = $_POST['math_number'];
$physics = $_POST['physics_number'];
$chemistry = $_POST['chemistry_number'];
$ict = $_POST['ict_number'];
$religion = $_POST['religion_number'];
$agriculture = $_POST['agriculture_number'];


// total mark
$total = $english + $bengali + $math + $physics + $chemistry + $ict + $religion + $agriculture;
$average = $total / 8;


// isFailed
$isFailed = false;
if($english < 33 || $bengali < 33 || $math < 33 || $physics < 33 || $chemistry < 33 || $ict < 33 || $religion < 33 || $agriculture < 33){
    $isFailed = true;
}


// output fro html table
echo "


<div style= ' max-width: 1200px; width: 100%; margin: 5rem auto 2rem auto; '>

<div style= ' max-width: 800px; width: 100%; margin: 0 auto; '>

<h2><b>শিক্ষার্থীর নাম:</b> <span style= ' font-weight: normal; '>$student_name</span></h2>

<table border='1' style = ' width: 100%; border-collapse: collapse; text-align: left; padding: 2rem; '>


<tr>
    <th style= ' padding: 0.5rem; font-size: 1.1rem; '>বিষয়</th>
    <th style= ' padding: 0.5rem; font-size: 1.1rem; '>প্রাপ্ত নম্বর</th>
</tr>

<tr>
    <td style= ' padding: 0.5rem; font-size: 1.1rem; '>ইংরেজি</td>
    <td style= ' padding: 0.5rem; font-size: 1.1rem; font-size: 1.5rem; '>$english</td>
</tr>

<tr>
    <td style= ' padding: 0.5rem; font-size: 1.1rem; '>বাংলা</td>
    <td style= ' padding: 0.5rem; font-size: 1.1rem; font-size: 1.5rem; '>$bengali</td>
</tr>

<tr>
    <td style= ' padding: 0.5rem; font-size: 1.1rem; '>গণিত</td>
    <td style= ' padding: 0.5rem; font-size: 1.1rem; font-size: 1.5rem; '>$math</td>
</tr>

<tr>
    <td style= ' padding: 0.5rem; font-size: 1.1rem; '>পদার্থবিজ্ঞান</td>
    <td style= ' padding: 0.5rem; font-size: 1.1rem; font-size: 1.5rem; '>$physics</td>
</tr>

<tr>
    <td style= ' padding: 0.5rem; font-size: 1.1rem; '>রসায়ন</td>
    <td style= ' padding: 0.5rem; font-size: 1.1rem; font-size: 1.5rem; '>$chemistry</td>
</tr>

<tr>
    <td style= ' padding: 0.5rem; font-size: 1.1rem; '>আইসিটি</td>
    <td style= ' padding: 0.5rem; font-size: 1.1rem; font-size: 1.5rem; '>$ict</td>
</tr>

<tr>
    <td style= ' padding: 0.5rem; font-size: 1.1rem; '>ধর্ম ও নৈতিক শিক্ষা</td>
    <td style= ' padding: 0.5rem; font-size: 1.1rem; font-size: 1.5rem; '>$religion</td>
</tr>

<tr>
    <td style= ' padding: 0.5rem; font-size: 1.1rem; '>কৃষিশিক্ষা</td>
    <td style= ' padding: 0.5rem; font-size: 1.1rem; font-size: 1.5rem; '>$agriculture</td>
</tr>

<tr>
    <td style= ' padding: 0.5rem; font-size: 1.1rem; '><b>মোট নম্বর</b></td>
    <td style= ' padding: 0.5rem; font-size: 1.1rem; font-size: 1.5rem; '><b>$total</b></td>
</tr>

<tr>
    <td style= ' padding: 0.5rem; font-size: 1.1rem; '><b>গড় নম্বর</b></td>
    <td style= ' padding: 0.5rem; font-size: 1.1rem; font-size: 1.5rem; '><b>$average</b></td>
</tr>


</table>

</div>



</div>


";

// jodi fail kore
if($isFailed){
    echo "<p style='text-align: center; color: red; font-weight: 700;'>আপনি ফেইল করেছেন 🥹</p>";
}else{
    if($average >= 80){
        echo "<p style='text-align: center; font-size: 20px; font-weight: 700;'>আপনার গ্রেড: A+ 😍</p>";
    }elseif($average >= 70){
        echo "<p style='text-align: center; font-size: 20px; font-weight: 700;'>আপনার গ্রেড: A 🤗</p>";
    }elseif($average >= 60){
        echo "<p style='text-align: center; font-size: 20px; font-weight: 700;'>আপনার গ্রেড: A- 😒</p>";
    }elseif($average >= 50){
        echo "<p style='text-align: center; font-size: 20px; font-weight: 700;'>আপনার গ্রেড: B 😑</p>";
    }elseif($average >= 40){
        echo "<p style='text-align: center; font-size: 20px; font-weight: 700;'>আপনার গ্রেড: C 😣</p>";
    }else{
        echo "<p style='text-align: center; font-size: 20px; font-weight: 700;'>আপনার গ্রেড: D 😫</p>";
    }
}



?>