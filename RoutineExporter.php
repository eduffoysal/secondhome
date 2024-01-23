<?php
session_start();
require_once 'db/db.php';
require_once 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\Writer\Csv;


function my_autoloader($class) {
    require $class . '.php';
}

$admin_id = $_SESSION['user'];
$u_id = $_SESSION['user'];
$admin_phone = $_SESSION['user_phone'];
$school_id = $_SESSION['school_id'];

$uniqueId= time().'-'.mt_rand();

$unique = strtoupper(bin2hex(random_bytes(3)));
$ran_id = rand(time(), 100000000);

$unique.' - '.$uniqueId.' - '.$ran_id;


if (isset($_POST['export_routine'])) {

    $routineId = isset($_POST['id']) ? intval($_POST['id']) : 0;

    if ($routineId > 0) {
        $stmt = $con->prepare("SELECT routine_id, day, start_time, end_time, sub_name, sub_code, section, room, t_name, lab_theory FROM schedule WHERE routine_id = ?");
        $stmt->bind_param("i", $routineId);
        $stmt->execute();
        $result = $stmt->get_result();

        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        if (!empty($data)) {

            $spreadsheet = new PhpOffice\PhpSpreadsheet\Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();

            // Add headers
            $headers = array_keys($data[0]);
            $sheet->fromArray([$headers], NULL, 'A1');

            // Add data
            $row = 2;
            foreach ($data as $rowdata) {
                $sheet->fromArray([$rowdata], NULL, 'A' . $row);
                $row++;
            }

            // Save the Excel file
            $excelFileName = 'edu_routine_schedule_export.xlsx';
            $writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
            $writer = new Xlsx($spreadsheet);
            $writer->save($excelFileName);
            
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment; filename=' . basename($excelFileName));

            header("location:$excelFileName");
            $writer->save('php://output');
            readfile($excelFileName);

            // $fileHandle = fopen($excelFileName, 'rb');
            // while (!feof($fileHandle)) {
            //     echo fread($fileHandle, 8192);
            // }
            // fclose($fileHandle);
            

            // unlink($excelFileName);
            exit;

        } else {
            echo 'No data found for the specified routine ID.';
        }
    } else {
        echo 'Invalid routine ID.';
    }
}


?>
