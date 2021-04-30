<section class="bg-gray-300 h-auto w-full">

    <div class="flex justify-center">

        <div class="bg-gray-500 h-auto w-auto rounded-xl my-10 mx-10 text-gray-200 shadow-xl">
            
            <form class="my-10 mx-10" enctype="multipart/form-data" action="index.php?action=addCt" method="POST">

                <div class="grid grid-cols-2 gap-10">
                    <div>
                        <div class="flex justify-center pb-5 text-3xl font-bold">
                        <p>Client :</p> 
                        </div>
                        <div class="grid gap-5">
                            <div class="flex justify-between grid grid-cols-2 gap-4">
                                <label for="nom">Nom : </label>
                                <input class="text-gray-800 rounded-lg text-center" name="nom" id="nom" type="text">
                            </div>
                            <div class="flex justify-between grid grid-cols-2 gap-4">
                                <label for="adresse">Adresse : </label>
                                <input class="text-gray-800 rounded-lg text-center" name="adresse" id="adresse" type="text">
                            </div>
                            <div class="flex justify-between grid grid-cols-2 gap-4">
                                <label  for="cp">Code postal : </label>
                                <input class="text-gray-800 rounded-lg text-center" name="cp" id="cp" type="text">
                            </div>
                            <div class="flex justify-between grid grid-cols-2 gap-4">
                                <label  for="ville">Ville : </label>
                                <input class="text-gray-800 rounded-lg text-center" name="ville" id="ville" type="text">
                            </div>
                            <div class="flex justify-between grid grid-cols-2 gap-4">
                                <label  for="tel">Téléphone : </label>
                                <input class="text-gray-800 rounded-lg text-center" name="tel" id="tel" type="text">
                            </div>
                            <div class="flex justify-between grid grid-cols-2 gap-4">
                                <label  for="fax">Fax : </label>
                                <input class="text-gray-800 rounded-lg text-center" name="fax" id="fax" type="text">
                            </div>
                            <div class="flex justify-between grid grid-cols-2 gap-4">
                                <label  for="login">Login : </label>
                                <input class="text-gray-800 rounded-lg text-center" name="login" id="login" type="text">
                            </div>
                            <div class="flex justify-between grid grid-cols-2 gap-4">
                                <label  for="motDePasse">Mot de passe : </label>
                                <input class="text-gray-800 rounded-lg text-center" name="motDePasse" id="motDePasse" type="password">
                            </div>
                            <div class="flex justify-between grid grid-cols-2 gap-4">
                                <label  for="confirmeMotDePasse">Confirmé le mot de passe : </label>
                                <input class="text-gray-800 rounded-lg text-center" name="confirmeMotDePasse" id="confirmeMotDePasse" type="password">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-center pb-5 text-3xl font-bold">
                        <p>Contacts :</p> 
                        </div>
                        <div class="grid gap-2">
                                <div>
                                <p class="text-xl font-bold">Contact 1 :</p>
                                </div>
                                <div class="flex justify-between grid grid-cols-2 gap-4">
                                    <label  for="nomc1">Nom : </label>
                                    <input class="text-gray-800 rounded-lg text-center" name="nomc1" id="nomc1" type="text">
                                </div>
                                <div class="flex justify-between grid grid-cols-2 gap-4">
                                    <label  for="prenomc1">Prénom : </label>
                                    <input class="text-gray-800 rounded-lg text-center" name="prenomc1" id="prenomc1" type="text">
                                </div>
                                <div class="flex justify-between grid grid-cols-2 gap-4">
                                    <label  for="fonctionc1">Fonction : </label>
                                    <input class="text-gray-800 rounded-lg text-center" name="fonctionc1" id="fonctionc1" type="text">
                                </div>
                                <div class="flex justify-between grid grid-cols-2 gap-4">
                                    <label  for="mailc1">Mail : </label>
                                    <input class="text-gray-800 rounded-lg text-center" name="mailc1" id="mailc1" type="mail">
                                </div>
                        
                        
                                <div>
                                <p class="text-xl font-bold">Contact 2 :</p>
                                </div>
                                <div class="flex justify-between grid grid-cols-2 gap-4">
                                    <label  for="nomc2">Nom : </label>
                                    <input class="text-gray-800 rounded-lg text-center" name="nomc2" id="nomc2" type="text">
                                </div>
                                <div class="flex justify-between grid grid-cols-2 gap-4">
                                    <label  for="prenomc2">Prénom : </label>
                                    <input class="text-gray-800 rounded-lg text-center" name="prenomc2" id="prenomc2" type="text">
                                </div>
                                <div class="flex justify-between grid grid-cols-2 gap-4">
                                    <label  for="fonctionc2">Fonction : </label>
                                    <input class="text-gray-800 rounded-lg text-center" name="fonctionc2" id="fonctionc2" type="text">
                                </div>
                                <div class="flex justify-between grid grid-cols-2 gap-4">
                                    <label  for="mailc2">Mail : </label>
                                    <input class="text-gray-800 rounded-lg text-center" name="mailc2" id="mailc2" type="mail">
                                </div>
                            

                                <div>
                                <p class="text-xl font-bold">Contact 3 :</p>
                                </div>
                                <div class="flex justify-between grid grid-cols-2 gap-4">
                                    <label  for="nomc3">Nom : </label>
                                    <input class="text-gray-800 rounded-lg text-center" name="nomc3" id="nomc3" type="text">
                                </div>
                                <div class="flex justify-between grid grid-cols-2 gap-4">
                                    <label  for="prenomc3">Prénom : </label>
                                    <input class="text-gray-800 rounded-lg text-center" name="prenomc3" id="prenomc3" type="text">
                                </div>
                                <div class="flex justify-between grid grid-cols-2 gap-4">
                                    <label  for="fonctionc3">Fonction : </label>
                                    <input class="text-gray-800 rounded-lg text-center" name="fonctionc3" id="fonctionc3" type="text">
                                </div>
                                <div class="flex justify-between grid grid-cols-2 gap-4">
                                    <label  for="mailc3">Mail : </label>
                                    <input class="text-gray-800 rounded-lg text-center" name="mailc3" id="mailc3" type="mail">
                                </div>

                        </div>
                    </div>
                </div>
                <div class="flex justify-center pt-10">
                            <button class="bg-green-600 rounded-full px-10 shadow-sm" name="add" type="submit" onclick="AfficherMessage()">
                                Ajouter
                            </button>
                </div>
            </form>
        </div>
    </div>

</section>