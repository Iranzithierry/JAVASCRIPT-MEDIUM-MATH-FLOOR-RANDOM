<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="buttons">
        <button class="php_random">Random Color PHP</button>
    </div>
    <div class="wrapper">
        <div class="php_colors"></div>
    </div>

</body>
<script>
    const php_colors = document.querySelector(".php_colors");
    const php_random = document.querySelector(".php_random");


    fetch("random_color.php")
        .then(Response => Response.text())
        .then(data => {
            php_random.addEventListener("click", function() {
                let xhr = new XMLHttpRequest();
                xhr.open("POST", "random_color.php", true);
                xhr.onload = () => {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            let data = xhr.response;
                            php_colors.innerHTML = "";
                            php_colors.innerHTML = data;
                        }
                    }
                }
                xhr.send();
            });
        })
        .catch(error => console.error(error));
</script>