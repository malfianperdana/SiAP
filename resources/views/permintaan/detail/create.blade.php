<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Detail Permintaan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-xl font-semibold mb-4">Tambah Detail Permintaan: {{ $request->request_number }}</h2>

                    <form action="{{ route('permintaan.detail.store', $request->id) }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="item_id" class="block text-sm font-medium text-gray-700">Jenis Barang</label>
                            <select id="item_id" name="item_id" class="mt-1 block w-full">
                                    <option value="" style="display: none">Pilih Jenis</option>
                                @foreach($items as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="requested_quantity" class="block text-sm font-medium text-gray-700">Jumlah Diminta</label>
                            <input type="number" id="requested_quantity" name="requested_quantity" class="mt-1 block w-full" value="{{ old('requested_quantity') }}" required>
                        </div>

                        <div class="flex justify-end space-x-4 mt-4">
                            <a href="{{ route('permintaan.detail.index', $request->id) }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                Kembali
                            </a>

                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Simpan Detail
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>