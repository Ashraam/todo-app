@props([
    'id',
    'title',
    'desc'
])

<div>
    <div class="flex items-center bg-gray-800 rounded-lg p-6">
        <div class="flex-1">
            <h1 class="text-red-600 font-bold mb-1">{{ $title }}</h1>
            <p class="text-sm">{{ $desc }}</p>
        </div>

        <div
            x-data="{
                open: false,
                toggle() {
                    if (this.open) {
                        return this.close()
                    }

                    this.$refs.button.focus()

                    this.open = true
                },
                close(focusAfter) {
                    if (! this.open) return

                    this.open = false

                    focusAfter && focusAfter.focus()
                }
            }"
            x-on:keydown.escape.prevent.stop="close($refs.button)"
            x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
            x-id="['dropdown-button']"
            class="relative"
        >
            <button
                x-ref="button"
                x-on:click="toggle()"
                :aria-expanded="open"
                :aria-controls="$id('dropdown-button')"
                type="button"
                class="hover:text-red-500"
            >
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path></svg>
            </button>

            <div
                x-ref="panel"
                x-show="open"
                x-transition.origin.top.left
                x-on:click.outside="close($refs.button)"
                :id="$id('dropdown-button')"
                style="display: none;"
                class="absolute left-0 mt-1 w-40 rounded-md bg-gray-600 shadow-md"
            >
                <a href="#" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-green-600 text-left font-bold text-sm hover:bg-gray-700 disabled:text-gray-500">
                    Terminer
                </a>

                <a href="#" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-red-600 text-left font-bold text-sm hover:bg-gray-700 disabled:text-gray-500">
                    Supprimer
                </a>
            </div>
        </div>
    </div>

</div>
