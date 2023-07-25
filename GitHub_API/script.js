function getRepositories() {
    var username = document.getElementById("username").value;
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Parse the JSON response
            var response = JSON.parse(xhr.responseText);
            var repositoryList = "";
            document.getElementById("repo").innerText = "List of Repositories"
            for (var i = 0; i < response.length; i++) {
                repositoryList += "<li>" + response[i].name + "</li>";
            }
            document.getElementById("repositoryList").innerHTML = "<ul>" + repositoryList + "</ul>";
        }
        else {
            document.getElementById('repositoryList').textContent = '';
            document.getElementById('repo').textContent = '';

        }
    };

    xhr.open("GET", "https://api.github.com/users/" + username + "/repos", true);
    xhr.send();
}
function fetchData() {
    var xhr = new XMLHttpRequest();
    var username = document.getElementById("username").value;
    xhr.open('GET', 'https://api.github.com/users/' + username);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                var data = JSON.parse(xhr.responseText);
                var name = data.name;
                document.getElementById('name').textContent = "Username : " + username;

            }
            else if (username == "") {
                document.getElementById('name').textContent = 'Please enter username';

            }
            else {
                document.getElementById('name').textContent = 'User Name Not found';
            }
        }
    };
    xhr.send();
}
