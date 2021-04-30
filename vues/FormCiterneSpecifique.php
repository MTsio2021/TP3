<section class="bg-gray-300 h-screen w-full">

    <div class="flex justify-center">

        <div class="bg-gray-500 h-auto w-auto rounded-xl my-10 mx-10 text-gray-200 shadow-xl">
            
            <form class="my-10 mx-10" enctype="multipart/form-data" action="index.php?action=addSp" method="POST">

                <div class="grid grid-rows-4 gap-5">
                    <div class="flex justify-between grid grid-cols-2 gap-4">
                        <label for="designation">Désignation : </label>
                        <input class="text-gray-800 rounded-lg text-center" name="designation" id="designation" type="text">
                    </div>
                    <div class="flex justify-between grid grid-cols-2 gap-4">
                        <label for="nbCompartiment">Nombre de compartiment : </label>
                        <input class="text-gray-800 rounded-lg text-center" name="nbCompartiment" id="nbCompartiment" type="number" min="0" placeholder="0">
                    </div>

                    <div class="flex justify-between grid grid-cols-2 gap-4">
                        <label  for="planpdf">Plan pdf : </label>
                        <input class="text-gray-800 rounded-lg text-center" name="planpdf" id="planpdf" type="file">
                    </div>

                    <div class="flex justify-center">
                        <button class="bg-green-600 rounded-full px-10 shadow-sm" name="add" type="submit" onclick="AfficherMessage()">
                            Ajouter
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</section>