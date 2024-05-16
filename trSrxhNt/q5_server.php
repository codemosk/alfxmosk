<?php
    
    include 'group_data.php';

    
    header('Content-Type: application/json');

    
    $postData = file_get_contents("php://input");
    $data = json_decode($postData);

    
    $response = [
        'success' => false,
        'message' => 'Incomplete data received.',
    ];

    
    if (isset($data->id) && isset($data->password)) {
        
        $input_id = $data->id;
        $input_pass = $data->password;

        
        if ($input_id === $g1_id && $input_pass === $g1_pass4) {

            $question = $g1_question5;
            $key = $g1_pass5;
            
            $response = [
                'success' => true,
                'message' => 'Copy or note the key to unlock the next question!',
                'question' => $question,
                'key' => $key
            ];
        } 
        else if ($input_id === $g2_id && $input_pass === $g2_pass4) {

            $question = $g2_question5;
            $key = $g2_pass5;
            
            $response = [
                'success' => true,
                'message' => 'Copy or note the key to unlock the next question!',
                'question' => $question,
                'key' => $key
            ];
        }
        else if ($input_id === $g3_id && $input_pass === $g3_pass4) {

            $question = $g3_question5;
            $key = $g3_pass5;
            
            $response = [
                'success' => true,
                'message' => 'Copy or note the key to unlock the next question!',
                'question' => $question,
                'key' => $key
            ];
        }
        else if ($input_id === $g4_id && $input_pass === $g4_pass4) {

            $question = $g4_question5;
            $key = $g4_pass5;
            
            $response = [
                'success' => true,
                'message' => 'Copy or note the key to unlock the next question!',
                'question' => $question,
                'key' => $key
            ];
        }
        else {
            
            $response = [
                'success' => false,
                'message' => 'Incorrect ID or password!',
            ];
        }
    } else {
        
        $response['message'] = 'Incomplete data received.';
    }

    
    echo json_encode($response);
?>
