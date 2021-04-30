<section class="bg-gray-300 h-screen w-full">

    <div class="flex justify-center">

        <div class="bg-gray-500 h-auto w-auto rounded-xl my-10 mx-10 text-gray-200 shadow-xl">
            
            <form class="my-10 mx-10" action="index.php?action=addSt" method="POST">

                <div class="grid grid-rows-8 gap-5">
                    <div class="flex justify-between grid grid-cols-2 gap-4">
                        <label for="designation">Désignation : </label>
                        <input class="text-gray-800 rounded-lg text-center" name="designation" id="designation" type="text" placeholder="Designation">
                    </div>
                    <div class="flex justify-between grid grid-cols-2 gap-4">
                        <label for="nbCompartiment">Nombre de compartiment : </label>
                        <input class="text-gray-800 rounded-lg text-center" name="nbCompartiment" id="nbCompartiment" type="number" min="0" placeholder="0">
                    </div>
                    <div class="flex justify-between grid grid-cols-2 gap-4">
                        <label  for="longueur">Longueur : </label>
                        <input class="text-gray-800 rounded-lg text-center" name="longueur" id="longueur" type="number" step="0.1" min="0" placeholder="0">
                    </div>
                    <div class="flex justify-between grid grid-cols-2 gap-4">
                        <label  for="hauteur">Hauteur : </label>
                        <input class="text-gray-800 rounded-lg text-center" name="hauteur" id="hauteur" type="number" step="0.1" min="0" placeholder="0">
                    </div>
                    <div class="flex justify-between grid grid-cols-2 gap-4">
                        <label  for="profondeur">Profondeur : </label>
                        <input class="text-gray-800 rounded-lg text-center" name="profondeur" id="profondeur" type="number" step="0.1" min="0" placeholder="0">
                    </div>
                    <div class="flex justify-between grid grid-cols-2 gap-4">
                        <label  for="forme">Forme : </label>
                        <input class="text-gray-800 rounded-lg text-center" name="forme" id="forme" type="text" placeholder="Exemple : Cube">
                    </div>
                    <div class="flex justify-between grid grid-cols-2 gap-4">
                        <label for="prix">Prix : </label>
                        <input class="text-gray-800 rounded-lg text-center" name="prix" id="prix" type="number" min="0" placeholder="0">
                    </div>
                    <div class="flex justify-center">
                        <button class="bg-green-600 rounded-full px-10 shadow-sm" name="add" type="submit">
                            Ajouter
                        </button>
                    </div>
                </div>

            </form>

        </div>

    </div>


</section>