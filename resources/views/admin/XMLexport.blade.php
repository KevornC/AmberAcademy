<?php
$approvedxml=Session()->get('exportdata') ;
foreach($approvedxml as $info){
    $Student_name=$info->student_name;
    $Gender=$info->gender;
    $Phone_number=$info->phone_number;
    $Email=$info->email;
    $Student_course=$info->student_course;
    $CourseCost=$info->cost;
    $TRN=$info->trn_doc;
    $NationalID=$info->id_doc;
    $Qualification=$info->qual_doc;
    $AppliedDate=$info->created_at;
    $ApprovedBy=$info->approved_by;
  }
$NationalID=str_replace("&","&amp;",$NationalID);
$NationalID=str_replace("'","&apos;",$NationalID);
$NationalID=str_replace("\"","&quot;",$NationalID);


  $Qualification=str_replace("&","&amp;",$Qualification);
  $Qualification=str_replace("'","&apos;",$Qualification);
  $Qualification=str_replace("\"","&quot;",$Qualification);

$xml= "<?xml version='1.0' encoding='UTF-8' ?>
      <Application>
        <StudentInformation>
          <Name>$Student_name</Name>
          <Gender>$Gender</Gender>
          <Contact>$Phone_number</Contact>
          <Email>$Email</Email>
          <CourseName>$Student_course</CourseName>
          <TRN>$TRN</TRN>
          <AppliedDate>$AppliedDate</AppliedDate>
          <CourseCost>$CourseCost</CourseCost>
          <NationalID>$NationalID</NationalID>
          <Qualification>$Qualification</Qualification>
          <Approvedby>$ApprovedBy</Approvedby>
        </StudentInformation>
      </Application>
        ";
$dom = new DOMDocument;
$dom->preserveWhiteSpace = FALSE;
$dom->loadXML($xml);
$dom->formatOutput = TRUE;
header('Content-type: "text/xml"; Charset="utf8"');
header("Content-disposition: attachment; filename=".$Student_name.".xml");
echo $dom->SaveXML();

