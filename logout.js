// logout.js

function logout() {
    // Send a request to your logout PHP script
    // Replace 'logout.php' with the actual path to your logout PHP script
    fetch('logout.php')
        .then(response => {
            // Check if the request was successful (status code 200)
            if (response.ok) {
                // Redirect the user to the login page or any other desired page
                window.location.href = 'login.html'; // Replace 'login.html' with the desired page
            } else {
                console.error('Logout request failed');
            }
        })
        .catch(error => console.error('Error:', error));
}
