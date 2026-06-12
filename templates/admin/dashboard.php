


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PharmaFEFO - Administration</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100">

<div class="flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-72 bg-slate-900 text-white">

        <div class="p-6 border-b border-slate-700">
            <h1 class="text-3xl font-bold">PharmaFEFO</h1>
            <p class="text-slate-400 mt-1">Espace Administrateur</p>
        </div>

        <nav class="mt-6">

            <a href="#" class="flex items-center px-6 py-4 bg-slate-800 border-r-4 border-blue-500">
                📊 Tableau de bord
            </a>

            <a href="#" class="flex items-center px-6 py-4 hover:bg-slate-800 transition">
                👥 Utilisateurs
            </a>

            <a href="#" class="flex items-center px-6 py-4 hover:bg-slate-800 transition">
                💊 Médicaments
            </a>

            <a href="#" class="flex items-center px-6 py-4 hover:bg-slate-800 transition">
                📦 Lots
            </a>

            <a href="#" class="flex items-center px-6 py-4 hover:bg-slate-800 transition">
                ⚠️ Péremptions
            </a>

            <a href="#" class="flex items-center px-6 py-4 hover:bg-slate-800 transition">
                📑 Rapports
            </a>

            <a href="#" class="flex items-center px-6 py-4 hover:bg-slate-800 transition">
                🔔 Notifications
            </a>
            <a href="index.php?action=logout">
    Logout
</a>

        </nav>

    </aside>

    <!-- Content -->
    <main class="flex-1 p-8">

        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h2 class="text-3xl font-bold text-slate-800">
                    Tableau de bord
                </h2>
                <p class="text-slate-500">
                    Gestion du stock FEFO et surveillance des péremptions
                </p>
            </div>

            <button class="bg-blue-600 text-white px-5 py-3 rounded-xl hover:bg-blue-700">
                Générer un rapport
            </button>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">

            <div class="bg-white rounded-2xl shadow-sm p-6">
                <p class="text-slate-500">Médicaments</p>
                <h3 class="text-4xl font-bold mt-2">120</h3>
            </div>

            <div class="bg-white rounded-2xl shadow-sm p-6">
                <p class="text-slate-500">Lots actifs</p>
                <h3 class="text-4xl font-bold text-green-600 mt-2">350</h3>
            </div>

            <div class="bg-white rounded-2xl shadow-sm p-6">
                <p class="text-slate-500">Lots expirés</p>
                <h3 class="text-4xl font-bold text-red-600 mt-2">15</h3>
            </div>

            <div class="bg-white rounded-2xl shadow-sm p-6">
                <p class="text-slate-500">Alertes rouges</p>
                <h3 class="text-4xl font-bold text-orange-500 mt-2">8</h3>
            </div>

        </div>

        <!-- Table -->
        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">

            <div class="p-6 border-b">
                <h3 class="text-xl font-semibold">
                    Lots nécessitant une attention
                </h3>
            </div>

            <table class="w-full">

                <thead class="bg-slate-50">
                    <tr>
                        <th class="text-left p-4">Médicament</th>
                        <th class="text-left p-4">Lot</th>
                        <th class="text-left p-4">Quantité</th>
                        <th class="text-left p-4">Expiration</th>
                        <th class="text-left p-4">Criticité</th>
                    </tr>
                </thead>

                <tbody>

                    <tr class="border-t">
                        <td class="p-4">Paracétamol 500mg</td>
                        <td class="p-4">LOT-001</td>
                        <td class="p-4">24</td>
                        <td class="p-4">15/06/2026</td>
                        <td class="p-4">
                            <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">
                                Rouge
                            </span>
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
                    </tr>

                </tbody>

            </table>

        </div>

    </main>

</div>

</body>
</html>