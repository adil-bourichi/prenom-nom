<section class="p-8">
    <h2 class="text-2xl font-bold mb-4">Formulaire de création de compte</h2>
    <form action="traitement_formulaire.php" method="post" class="bg-white shadow-md rounded-lg px-8 py-6">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="civility">Civilité:</label>
            <div class="flex items-center space-x-2">
                <input type="radio" name="civility" value="M." class="form-radio text-blue-500" required>
                <span class="text-gray-900">M.</span>
                <input type="radio" name="civility" value="Mme" class="form-radio text-blue-500" required>
                <span class="text-gray-900">Mme</span>
                <input type="radio" name="civility" value="Autre" class="form-radio text-blue-500" required>
                <span class="text-gray-900">Autre</span>
            </div>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="first_name">Prénom:</label>
            <div class="relative">
                <span class="absolute left-3 top-2 text-gray-600"><i class="fas fa-user"></i></span>
                <input type="text" name="first_name" class="w-full border rounded-lg py-2 pl-10 focus:outline-none focus:border-blue-500" required>
            </div>
        </div>


        <div class="mb-4">
            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Valider</button>
        </div>
    </form>
</section>
