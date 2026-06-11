

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Pharmacien - MedFlow</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100">

<div class="flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-72 bg-slate-900 text-white">

        <div class="p-6 border-b border-slate-700">
            <h1 class="text-3xl font-bold">🏥 MedFlow</h1>
            <p class="text-slate-400">Espace Pharmacien</p>
        </div>

        <nav class="mt-6">

            <a href="#" class="block px-6 py-4 bg-slate-800 border-r-4 border-blue-500">
                📊 Tableau de bord
            </a>

            <a href="#" class="block px-6 py-4 hover:bg-slate-800">
                📦 Lots de médicaments
            </a>

            <a href="#" class="block px-6 py-4 hover:bg-slate-800">
                ⚠️ Alertes de péremption
            </a>

            <a href="#" class="block px-6 py-4 hover:bg-slate-800">
                🗑️ Lots expirés
            </a>

            <a href="#" class="block px-6 py-4 hover:bg-slate-800">
                🔔 Notifications
            </a>

            <a href="index.php?action=logout" class="block px-6 py-4 hover:bg-slate-800 text-red-400">
                🚪 Déconnexion
            </a>

        </nav>

    </aside>

    <!-- Main -->
    <main class="flex-1 p-8">

        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h2 class="text-3xl font-bold text-slate-800">
                    Tableau de bord Pharmacien
                </h2>
                <p class="text-slate-500">
                    Surveillance des péremptions et gestion des lots
                </p>
            </div>

            <button class="bg-red-600 text-white px-5 py-3 rounded-xl hover:bg-red-700">
                Voir Alertes Rouges
            </button>
        </div>

        <!-- Statistiques -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">

            <div class="bg-white rounded-2xl shadow-sm p-6">
                <p class="text-slate-500">Lots actifs</p>
                <h3 class="text-4xl font-bold text-green-600 mt-2">350</h3>
            </div>

            <div class="bg-white rounded-2xl shadow-sm p-6">
                <p class="text-slate-500">Alertes rouges</p>
                <h3 class="text-4xl font-bold text-red-600 mt-2">8</h3>
            </div>

            <div class="bg-white rounded-2xl shadow-sm p-6">
                <p class="text-slate-500">Expiration &lt; 90 jours</p>
                <h3 class="text-4xl font-bold text-orange-500 mt-2">21</h3>
            </div>

            <div class="bg-white rounded-2xl shadow-sm p-6">
                <p class="text-slate-500">Lots expirés</p>
                <h3 class="text-4xl font-bold text-slate-700 mt-2">15</h3>
            </div>

        </div>

        <!-- Actions rapides -->
        <div class="flex flex-wrap gap-4 mb-8">

            <button class="bg-red-600 text-white px-5 py-3 rounded-xl hover:bg-red-700">
                Lots critiques
            </button>

            <button class="bg-orange-500 text-white px-5 py-3 rounded-xl hover:bg-orange-600">
                Expire bientôt
            </button>

            <button class="bg-slate-800 text-white px-5 py-3 rounded-xl hover:bg-slate-900">
                Historique des destructions
            </button>

        </div>

        <!-- Tableau -->
        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">

            <div class="p-6 border-b flex justify-between items-center">
                <h3 class="text-xl font-semibold">
                    Lots à surveiller
                </h3>

                <select class="border rounded-lg px-4 py-2">
                    <option>Tous les lots</option>
                    <option>Alertes rouges</option>
                    <option>Alertes orange</option>
                    <option>Lots expirés</option>
                </select>
            </div>

            <table class="w-full">

                <thead class="bg-slate-50">
                    <tr>
                        <th class="p-4 text-left">Produit</th>
                        <th class="p-4 text-left">Lot</th>
                        <th class="p-4 text-left">Quantité</th>
                        <th class="p-4 text-left">Expiration</th>
                        <th class="p-4 text-left">Criticité</th>
                        <th class="p-4 text-left">Action</th>
                    </tr>
                </thead>

                <tbody>

                    <tr class="border-t">
                        <td class="p-4">Paracétamol 500 mg</td>
                        <td class="p-4">LOT-001</td>
                        <td class="p-4">24</td>
                        <td class="p-4">15/06/2026</td>
                        <td class="p-4">
                            <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">
                                Rouge
                            </span>
                        </td>
                        <td class="p-4">
                            <button class="bg-red-600 text-white px-4 py-2 rounded-lg">
                                Déclarer périmé
                            </button>
                        </td>
                    </tr>

                    <tr class="border-t">
                        <td class="p-4">Augmentin</td>
                        <td class="p-4">LOT-045</td>
                        <td class="p-4">50</td>
                        <td class="p-4">20/08/2026</td>
                        <td class="p-4">
                            <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-sm">
                                Orange
                            </span>
                        </td>
                        <td class="p-4">
                            <button class="bg-orange-500 text-white px-4 py-2 rounded-lg">
                                Surveiller
                            </button>
                        </td>
                    </tr>

                    <tr class="border-t">
                        <td class="p-4">Amoxicilline</td>
                        <td class="p-4">LOT-120</td>
                        <td class="p-4">100</td>
                        <td class="p-4">15/02/2027</td>
                        <td class="p-4">
                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">
                                Vert
                            </span>
                        </td>
                        <td class="p-4">
                            <button class="bg-green-600 text-white px-4 py-2 rounded-lg">
                                Normal
                            </button>
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>

    </main>

</div>

</body>
</html>