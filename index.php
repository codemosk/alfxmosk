<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>G1Q2</title>
</head>
<body>
    <div id="main-container">
        <div id="content-container">
            <div class="image-container">
                <img src="1.png">
            </div>
            
            <div id="main-content-container">
                <div id="form-container">
                    <input type="text" id="id" name="id" placeholder="Group ID" required>
                    <input type="password" id="password" name="password" placeholder="Your Key" required>
                    <button id="submitBtn">Submit</button>
                </div>
                <div id="question-container">
                    <h2 id="question"></h2>
                    <p id="message"></p>
                </div>


            </div>

            <div class="image-container">
                <img src="2.png">
            </div>

        </div>

    </div>
    <script>
    document.getElementById('submitBtn').addEventListener('click', function() {
        // Retrieve input values
        var inputId = document.getElementById('id').value;
        var inputPass = document.getElementById('password').value;

        // Fetch data using POST method
        fetch('server.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                id: inputId,
                password: inputPass
            })
        })
        .then(response => response.json())
        .then(data => {
            // Display response message
            document.getElementById('message').textContent = data.message;
            if(data.success) {
				document.getElementById('tan').innerHTML = 'WELCOME HUNTERS!';
                // If successful, display question
                document.getElementById('question').textContent = 'What is your favorite color?';
            } else {
                // If unsuccessful, clear question
                document.getElementById('question').textContent = '';
            }
        })
        .catch(error => console.error('Error:', error));
    });
</script>

</body>
</html>
