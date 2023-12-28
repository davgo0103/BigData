<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $postData = file_get_contents('php://input');
    if ($postData !== false && stripos($_SERVER['CONTENT_TYPE'], 'application/json') === 0) {

        $data = json_decode($postData, true);
        if ($data !== null && isset($data['age']) && isset($data['anaemia']) && isset($data['creatinine_phosphokinase']) && isset($data['diabetes']) && isset($data['ejection_fraction']) && isset($data['high_blood_pressure']) && isset($data['platelets']) && isset($data['serum_creatinine']) && isset($data['serum_sodium']) && isset($data['sex']) && isset($data['smoking']) && isset($data['time'])) {

            $age = $data['age'] ? $data['age'] : null;
            $anaemia = $data['anaemia'] ? $data['anaemia'] : null;
            $creatinine_phosphokinase = $data['creatinine_phosphokinase'] ? $data['creatinine_phosphokinase'] : null;
            $diabetes = $data['diabetes'] ? $data['diabetes'] : null;
            $ejection_fraction = $data['ejection_fraction'] ? $data['ejection_fraction'] : null;
            $high_blood_pressure = $data['high_blood_pressure'] ? $data['high_blood_pressure'] : null;
            $platelets = $data['platelets'] ? $data['platelets'] : null;
            $serum_creatinine = $data['serum_creatinine'] ? $data['serum_creatinine'] : null;
            $serum_sodium = $data['serum_sodium'] ? $data['serum_sodium'] : null;
            $sex = $data['sex'] ? $data['sex'] : null;
            $smoking = $data['smoking'] ? $data['smoking'] : null;
            $time = $data['time'] ? $data['time'] : null;

            // $age = 75;
            // $anaemia = 0;
            // $creatinine_phosphokinase = 582;
            // $diabetes = 0;
            // $ejection_fraction = 20;
            // $high_blood_pressure = 1;
            // $platelets = 265000;
            // $serum_creatinine = 1.9;
            // $serum_sodium = 130;
            // $sex = 1;
            // $smoking = 0;
            // $time = 0;


            $str = '"C:\Program Files\R\R-4.3.2\bin\Rscript"' . ' .\dietest.R' . " $age" . " $anaemia" . " $creatinine_phosphokinase" . " $diabetes" . " $ejection_fraction" . " $high_blood_pressure" . " $platelets" . " $serum_creatinine" . " $serum_sodium" . " $sex" . " $smoking" . " $time";

            exec($str, $output, $return_var);

            $pattern = "/\[\d\]/";
            $replacement = "";

            $output[0] = preg_replace($pattern, $replacement, $output[0]);
            $output[1] = preg_replace($pattern, $replacement, $output[1]);
            $output[2] = preg_replace($pattern, $replacement, $output[2]);
            $output[3] = preg_replace($pattern, $replacement, $output[3]);
            $output[4] = preg_replace($pattern, $replacement, $output[4]);

            $ans = (int)$output[0];
            if($ans == 0 or $ans == 1){
                echo $ans;
                return ;
            }else{
                echo "Error";
                return ;
            }
            

        }
        else{
            echo "Error";
            return ;
        }
    }
}
echo "Error";

?>