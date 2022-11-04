<div x-data="{ open: false }">
    <span x-on:click="open = true">
        <svg class="w-10 h-10 text-red-600 hover:text-red-700 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
    </span>

    <template x-teleport="body">
        <div
            x-show="open"
            style="display: none"
            x-on:keydown.escape.prevent.stop="open = false"
            role="dialog"
            aria-modal="true"
            x-id="['modal-title']"
            :aria-labelledby="$id('modal-title')"
            class="fixed inset-0 z-10 overflow-y-auto"
        >
            <!-- Overlay -->
            <div x-show="open" x-transition.opacity class="fixed inset-0 bg-black bg-opacity-50"></div>

            <!-- Panel -->
            <div
                x-show="open" x-transition
                x-on:click="open = false"
                class="relative flex min-h-screen items-center justify-center p-4"
            >
                <div
                    x-on:click.stop
                    x-trap.noscroll.inert="open"
                    class="relative w-full max-w-2xl overflow-y-auto rounded-xl bg-gray-900 text-gray-100 p-8 shadow-lg"
                >
                    <!-- Title -->
                    <h2 class="text-3xl text-white font-bold mb-6" :id="$id('modal-title')">Nouvelle tâche</h2>

                    <form class="space-y-10">
                        <div>
                            <label for="title" class="block mb-1">Intitulé de la tâche</label>
                            <input type="text" id="title" name="title" class="p-3 rounded w-full text-xl text-gray-800" placeholder="Intitulé de la tâche">
                        </div>

                        <div>
                            <label for="title" class="block mb-1">Courte description</label>
                            <textarea id="desc" name="desc" class="p-3 rounded w-full text-xl text-gray-800" placeholder="Courte description"></textarea>
                        </div>

                        <div class="flex justify-end space-x-3">
                            <button type="submit" class="bg-red-600 hover:bg-red-900 font-bold p-3 rounded text-white" x-on:click="open = false">Ajouter la tâche</button>
                            <button type="button" class="bg-gray-700 hover:bg-gray-800 font-bold p-3 rounded text-white" x-on:click="open = false">Fermer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </template>
</div>
