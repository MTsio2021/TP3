<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>TP3</title>
            <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
            <script src="js/script.js"></script>
        </head>
        <body>
            
            <div class="py-10">
                <nav class="h-20 w-full py-5 bg-gray-600 flex justify-around text-gray-200 fixed top-0">
                    <button class="transition duration-300 bg-blue-600 hover:bg-blue-400 px-3 rounded-xl">
                        <a href="index.php?action=FormCy">Ajouter une citerne Cylindrique</a>
                    </button>
                    <button class="transition duration-300 bg-blue-600 hover:bg-blue-400 px-3 rounded-xl">
                        <a href="index.php?action=FormSt">Ajouter une citerne Standard</a>
                    </button>
                    <button class="transition duration-300 bg-blue-600 hover:bg-blue-400 px-3 rounded-xl">
                        <a href="index.php?action=FormSp">Ajouter une citerne Spécifique </a>
                    </button>
                    <button class="transition duration-300 bg-blue-600 hover:bg-blue-400 px-3 rounded-xl">
                        <a href="index.php?action=FormCt">Ajouter un contact </a>
                    </button>
                </nav>
            </div>
        </body>
    </html>