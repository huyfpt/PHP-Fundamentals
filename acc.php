https://code.tutsplus.com/courses/php-fundamentals/lessons/separating-logic-from-presentation
(11:34:41 AM) thaolt: ycicom
(11:34:41 AM) thaolt: ycn2:eD&#lKK0wte/1xD

-------------------------
create folder
---------------------------
        $public_path = rtrim(app()->basePath("public/"), '/');
        $name_report = "$study->ID_STUDY-$study->STUDY_NAME-Report.pdf";
        $progressFile = $public_path. "/reports/" . $study->USERNAM. "/" ."$study->ID_STUDY-$study->STUDY_NAME-Report.progess";
        if (!is_dir($public_path . "/reports/" . "name file")) {
            mkdir($public_path . "/reports/" . "name file", 0777, true);
}

--------------------
create file php 
-------------------
 $myfile = fopen( $public_path. "/reports/" . "/" . "name file"."/" . $name_report, "w") or die("Unable to open file!");
 $html = $vars;
 fwrite($myfile, $html);
 fclose($myfile);

---------------------
create file progress
-----------------------
public function writeProgressFile($fileName, $content) {
        $f = fopen($fileName, "w");
        fwrite($f, $content);
        fflush($f);
        fclose($f);
    }
$progress = "";
$progress .= "\nFINISH";
$this->writeProgressFile($progressFile, $progress);

function processingReport($id) {
        $study = Study::find($id);
        $public_path = rtrim(app()->basePath("public/"), '/');
        $progressFile = "$study->ID_STUDY-$study->STUDY_NAME-Report.progess";
        $progressFileHtml = getenv('APP_URL') . '/reports/' . $study->USERNAM . '/' . $study->ID_STUDY . '-' . $study->STUDY_NAME . '-Report.html';
        $progressFilePdf = getenv('APP_URL') . '/reports/' . $study->USERNAM . '/' . $study->ID_STUDY . '-' . $study->STUDY_NAME . '-Report.pdf';
        $file = file_get_contents($public_path . "/reports/" . $study->USERNAM . "/" . $progressFile);
        $progress = explode("\n", $file);
        return compact('progressFileHtml', 'progressFilePdf', 'progress');
    }
