<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primer pagina correcta</title>
    <meta name="content" content="In this web ...">
</head>
<body>
    
    <nav>
        Inicio
    </nav>
    <header>
        <h1>Mi biografia Andres Ortiz</h1>
        <h2>Mi vida en México</h2>
    </header>
    <main>
<!--        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus aperiam optio eveniet ratione esse aut, culpa officia deleniti iusto quisquam nemo soluta laborum nulla repudiandae atque exercitationem id voluptates tempore.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente maxime magnam voluptatum illo ut error animi pariatur aspernatur fuga, qui libero ratione, sint hic est reprehenderit, similique debitis nobis? Quaerat.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci tempora, voluptatum perspiciatis et eius fugiat numquam quidem sequi? Explicabo dolores soluta corrupti provident quam atque doloremque in sed odio tempore.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam sunt officiis cum quasi delectus, magnam soluta exercitationem suscipit rem eligendi dolorum natus adipisci autem molestias nesciunt totam dicta incidunt quisquam!
        </p>

        <form action="functions.php" method="GET">
            <input type="number" placeholder="Nombre" name="edad">
            <button>
                Enviar
            </button>
        </form>-->

        <input type="text" placeholder="Nombre" id="nombre">
        <button id="solicitar">
            Solicitar
        </button>

        <button id="push">
            enviar
        </button>
    </main>

    <footer>

    </footer>

    <script>
        const btn_solicitar = document.getElementById('solicitar');
        const btn_push = document.getElementById('push');


        btn_solicitar.addEventListener('click', async function(){            
            
            const response = await fetch('https://picsum.photos/200');
            const data = await response.json();

            console.log(data);
            
/*            .then(response => response.json())
            .then(data => console.log(data))*/
        });

        btn_push.addEventListener('click', async function(){                    
            let nombre = document.getElementById('nombre').value;

            let data = {
                "nombre" : nombre,
        	}

            let miInit = {
                method: 'POST',
                body: JSON.stringify(data),
                headers:{
                'Content-Type': 'application/json'
                }
            }

            let url = 'recibir.php';

            const response = await fetch(url, miInit);


        })

    </script>
</body>
</html>