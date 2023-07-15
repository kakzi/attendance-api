@extends('layouts.app', ['title' => 'Tambah Memo Baru - Admin'])

@section('content')
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-300">
    <div class="container mx-auto px-6 py-8">

        <div class="p-6 bg-white rounded-md shadow-md">
            <h2 class="text-lg text-gray-700 font-semibold capitalize">Memo Baru</h2>
            <hr class="mt-4">
            <form action="{{ route('admin.letters.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid  md:grid-cols-2 sm:grid-cols-1 gap-6 mt-4">
                    <div>
                        <label class="text-gray-700" for="name">Nama Kantor</label>
                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="name" 
                        value="{{ old('name') }}" placeholder="Nama Kantor">
                        @error('name')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label class="text-gray-700" for="name">Alamat Kantor</label>
                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="address" 
                        value="{{ old('address') }}" placeholder="Alamat">
                        @error('address')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label class="text-gray-700" for="name">Latitute Kantor</label>
                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="lat" 
                        value="{{ old('lat') }}" placeholder="-76.9189389">
                        @error('lat')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label class="text-gray-700" for="name">Longitude Kantor</label>
                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="long" 
                        value="{{ old('long') }}" placeholder="-111.231113">
                        @error('long')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="grid md:grid-cols-2 sm:grid-cols-1 gap-6 mt-4">
                    <div>
                        <label class="text-gray-700" for="name">Nama Kantor</label>
                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="name" 
                        value="{{ old('name') }}" placeholder="Nama Kantor">
                        @error('name')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label class="text-gray-700" for="name">Alamat Kantor</label>
                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="address" 
                        value="{{ old('address') }}" placeholder="Alamat">
                        @error('address')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label class="text-gray-700" for="name">Latitute Kantor</label>
                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="lat" 
                        value="{{ old('lat') }}" placeholder="-76.9189389">
                        @error('lat')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label class="text-gray-700" for="name">Longitude Kantor</label>
                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="long" 
                        value="{{ old('long') }}" placeholder="-111.231113">
                        @error('long')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="flex justify-start mt-4">
                    <button type="submit" class="px-4 py-2 bg-gray-600 text-gray-200 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">Simpan</button>
                </div>
            </form>
        </div>
        
    </div>
</main>
@endsection