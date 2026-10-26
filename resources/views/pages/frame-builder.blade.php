@section('title', 'Frame Builder - ' . config('app.name'))
@section('description', 'Preview frames at your size and get an instant estimate.')

<x-layouts.app>
    <x-section.section>
        <x-section.wrapper>
            <x-section.content>
                <x-slot name="title">
                    Frame Builder
                </x-slot>

                <x-slot name="content">
                    <div
                        x-data="{
                            mouldings: @js($mouldings),
                            code: @js($mouldings[0]['code']),
                            width: 40,
                            height: 30,
                            mat: true,
                            matMm: @js($matBorderMm),
                            min: @js($limits['min_cm']),
                            max: @js($limits['max_cm']),
                            quote: null,
                            get frame() { return this.mouldings.find(m => m.code === this.code) },
                            get valid() {
                                return [this.width, this.height].every(v => v >= this.min && v <= this.max)
                            },
                            // Scale the preview so the whole frame fits a 360px box; 1 cm of artwork = `px` pixels.
                            get px() {
                                const total = (v) => v + 2 * this.frame.width_mm / 10 + (this.mat ? 2 * this.matMm / 10 : 0)
                                return 360 / Math.max(total(this.width), total(this.height))
                            },
                            async refresh() {
                                if (!this.valid) { this.quote = null; return }
                                const q = new URLSearchParams({
                                    moulding: this.code, width: this.width, height: this.height, mat: this.mat ? 1 : 0,
                                })
                                const res = await fetch('{{ route('frame-builder.quote') }}?' + q, { headers: { Accept: 'application/json' } })
                                this.quote = res.ok ? await res.json() : null
                            },
                        }"
                        x-init="refresh()"
                        class="grid gap-8 md:grid-cols-2"
                    >
                        <div class="flex items-center justify-center bg-secondary-100 rounded p-4 min-h-[400px]">
                            <template x-if="valid">
                                <div
                                    class="shadow-xl"
                                    :style="`box-sizing: content-box;
                                        border: ${frame.width_mm / 10 * px}px solid ${frame.color};
                                        outline: 2px solid ${frame.inner_color}; outline-offset: -2px;
                                        background: #fff;
                                        padding: ${mat ? matMm / 10 * px : 0}px;`"
                                >
                                    <div
                                        class="bg-gradient-to-br from-gray-300 to-gray-500"
                                        :style="`width: ${width * px}px; height: ${height * px}px;`"
                                    ></div>
                                </div>
                            </template>
                            <p x-show="!valid" class="text-sm">
                                Enter sizes between <span x-text="min"></span> and <span x-text="max"></span> cm.
                            </p>
                        </div>

                        <div class="space-y-4">
                            <label class="block">
                                <span class="font-semibold">Frame</span>
                                <select x-model="code" @change="refresh()" class="block w-full border rounded p-2">
                                    <template x-for="m in mouldings" :key="m.code">
                                        <option :value="m.code" x-text="`${m.name} (${m.width_mm}mm)`"></option>
                                    </template>
                                </select>
                            </label>

                            <div class="grid grid-cols-2 gap-4">
                                <label class="block">
                                    <span class="font-semibold">Artwork width (cm)</span>
                                    <input type="number" x-model.number="width" @input.debounce.300ms="refresh()"
                                           :min="min" :max="max" class="block w-full border rounded p-2">
                                </label>
                                <label class="block">
                                    <span class="font-semibold">Artwork height (cm)</span>
                                    <input type="number" x-model.number="height" @input.debounce.300ms="refresh()"
                                           :min="min" :max="max" class="block w-full border rounded p-2">
                                </label>
                            </div>

                            <label class="flex items-center gap-2">
                                <input type="checkbox" x-model="mat" @change="refresh()">
                                <span>Include mat board</span>
                            </label>

                            <div x-show="quote" class="border-t pt-4">
                                <p class="text-2xl font-semibold">
                                    Estimate: $<span x-text="quote?.total.toFixed(2)"></span>
                                </p>
                                <ul class="text-sm mt-2">
                                    <template x-for="(amount, label) in quote?.breakdown ?? {}" :key="label">
                                        <li class="capitalize"><span x-text="label"></span>: $<span x-text="amount.toFixed(2)"></span></li>
                                    </template>
                                </ul>
                                <p class="text-xs mt-2">
                                    Indicative only, based on sample data. Visit us in store for a final quote.
                                </p>
                            </div>
                        </div>
                    </div>
                </x-slot>
            </x-section.content>
        </x-section.wrapper>
    </x-section.section>
</x-layouts.app>
