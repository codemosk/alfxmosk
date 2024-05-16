<?php
    
    include 'group_data.php';

    $question = $tresure_link;

    
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

        
        if ($input_id === $g1_id && $input_pass === $g1_pass5) {
            
            $response = [
                'success' => true,
                'message' => 'Final treasure unlocked!',
                'question' => $question,
            ];
        } 
        else if ($input_id === $g2_id && $input_pass === $g2_pass5) {

            $response = [
                'success' => true,
                'message' => 'Final treasure unlocked!',
                'question' => $question,
            ];
        }
        else if ($input_id === $g3_id && $input_pass === $g3_pass5) {
            
            $response = [
                'success' => true,
                'message' => 'Final treasure unlocked!',
                'question' => $question,
            ];
        }
        else if ($input_id === $g4_id && $input_pass === $g4_pass5) {
            
            $response = [
                'success' => true,
                'message' => 'Final treasure unlocked!',
                'question' => $question,
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
