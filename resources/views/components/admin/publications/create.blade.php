<x-app-layout>
    <!-- CTA -->
    <span class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
        <div class="flex items-center">

            <span>Creation de l'actualite</span>
        </div>
    </span>
    <!-- Cards -->

    <form action="{{ route('publication.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Titre</span>
            <input name="title" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="ex: realisation de maison de macampagne" />
        </label>

        <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Mini description</span>
            <textarea name="description" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Enter some long form content."></textarea>
        </label>

        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-2">

            <label class="mt-4 block text-sm">
                <span class=" text-gray-700 dark:text-gray-400">
                    ajouter une image
                </span>
                <div class="relative">
                    <input type="file" accept="image/png, image/jpeg" class=" block w-full pl-20 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" />

                </div>
            </label>

            <label class="mt-4 block text-sm">
                <span class=" text-gray-700 dark:text-gray-400">
                    ajouter une image d'horizontale
                </span>
                <div class="relative">
                    <input type="file" accept="image/png, image/jpeg" class=" block w-full pl-20 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" />

                </div>
            </label>
        </div>

        <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Mini description</span>
            <textarea name="desc_content_1" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Enter some long form content."></textarea>
        </label>

        <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Mini description</span>
            <textarea name="desc_content_2" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Enter some long form content."></textarea>
        </label>


        <button class="p-4 mb-8 mt-6 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
            sauvegarder
        </button>
    </form>

</x-app-layout>