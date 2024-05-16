<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    
    <title>Q4</title>
</head>
<body>
    <div id="main-container">
        <div id="content-container">
            <div class="image-container">
                <img src="assets/1.png">
            </div>
            
            <div id="main-content-container">
                <div id="form-container">
                    <input type="text" id="id" name="id" placeholder="Group ID" autocomplete="off">
                    <input type="password" id="password" name="password" placeholder="Your Key" required>
                    <button id="submitBtn">Unlock</button>
                </div>
                <div id="question-container">
                    <h2 id="question">
                        <a id="t-link"></a>
                    </h2>
                    <p id="message"></p>
                </div>


            </div>

            <div class="image-container">
                <img src="assets/2.png">
            </div>

        </div>

    </div>
    <script>
    document.getElementById('submitBtn').addEventListener('click', function() {

        var inputId = document.getElementById('id').value;
        var inputPass = document.getElementById('password').value;


        fetch('tr_server.php', {
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
            const message = document.getElementById('message');
            message.textContent = data.message;

            if(data.success) {

                const formContainer = document.getElementById('form-container');
                formContainer.innerHTML = '';

                const tlink = document.getElementById('t-link');
                tlink.setAttribute('href', data.question);
                tlink.textContent = "Click Me!";
            } else {

                document.getElementById('question').textContent = '';
            }
        })
        .catch(error => console.error('Error:', error));
    });
</script>

</body>
</html>
