<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-gray-50 border-b border-gray-200">
                    <!-- Form Klasifikasi -->
                    <h3 class="text-lg font-semibold mb-4">Form Klasifikasi</h3>

                    <!-- Form Start -->
                    <form action="#" method="POST" class="space-y-6">
                        <!-- Input Parameter -->
                        <div class="p-4 bg-gray-100 rounded-lg">
                            <h4 class="text-md font-medium mb-2">Input Parameter</h4>

                            <!-- Age (Usia) -->
                            <div class="mb-4">
                                <label for="age" class="block text-sm font-medium text-gray-700">Age (Usia)</label>
                                <input type="number" name="age" id="age" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Masukkan usia">
                            </div>

                            <!-- Gender (Jenis Kelamin) -->
                            <div class="mb-4">
                                <label for="gender" class="block text-sm font-medium text-gray-700">Gender (Jenis Kelamin)</label>
                                <select id="gender" name="gender" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    <option value="">Pilih jenis kelamin</option>
                                    <option value="male">Laki-laki</option>
                                    <option value="female">Wanita</option>
                                </select>
                            </div>

                            <!-- Polyuria -->
                            <div class="mb-4">
                                <label for="polyuria" class="block text-sm font-medium text-gray-700">Polyuria (Banyak urin)</label>
                                <select id="polyuria" name="polyuria" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    <option value="">Pilih</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <!-- Polydipsia -->
                            <div class="mb-4">
                                <label for="polydipsia" class="block text-sm font-medium text-gray-700">Polydipsia (Haus berlebihan)</label>
                                <select id="polydipsia" name="polydipsia" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    <option value="">Pilih</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <!-- Sudden Weightloss -->
                            <div class="mb-4">
                                <label for="sudden_weightloss" class="block text-sm font-medium text-gray-700">Sudden Weightloss (Penurunan berat badan mendadak)</label>
                                <select id="sudden_weightloss" name="sudden_weightloss" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    <option value="">Pilih</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <!-- Weakness -->
                            <div class="mb-4">
                                <label for="weakness" class="block text-sm font-medium text-gray-700">Weakness (Mudah merasa lelah)</label>
                                <select id="weakness" name="weakness" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    <option value="">Pilih</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <!-- Polyphagia -->
                            <div class="mb-4">
                                <label for="polyphagia" class="block text-sm font-medium text-gray-700">Polyphagia (Lapar berlebihan)</label>
                                <select id="polyphagia" name="polyphagia" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    <option value="">Pilih</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <!-- Genital Thrush -->
                            <div class="mb-4">
                                <label for="genital_thrush" class="block text-sm font-medium text-gray-700">Genital Thrush (Infeksi jamur)</label>
                                <select id="genital_thrush" name="genital_thrush" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    <option value="">Pilih</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <!-- Visual Blurring -->
                            <div class="mb-4">
                                <label for="visual_blurring" class="block text-sm font-medium text-gray-700">Visual Blurring (Penglihatan kabur)</label>
                                <select id="visual_blurring" name="visual_blurring" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    <option value="">Pilih</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <!-- Itching -->
                            <div class="mb-4">
                                <label for="itching" class="block text-sm font-medium text-gray-700">Itching (Gatal)</label>
                                <select id="itching" name="itching" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    <option value="">Pilih</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <!-- Irritability -->
                            <div class="mb-4">
                                <label for="irritability" class="block text-sm font-medium text-gray-700">Irritability (Mudah marah)</label>
                                <select id="irritability" name="irritability" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    <option value="">Pilih</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <!-- Delayed Healing -->
                            <div class="mb-4">
                                <label for="delayed_healing" class="block text-sm font-medium text-gray-700">Delayed Healing (Penyembuhan tertunda)</label>
                                <select id="delayed_healing" name="delayed_healing" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    <option value="">Pilih</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <!-- Partial Paresis -->
                            <div class="mb-4">
                                <label for="partial_paresis" class="block text-sm font-medium text-gray-700">Partial Paresis (Kelumpuhan sebagian)</label>
                                <select id="partial_paresis" name="partial_paresis" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    <option value="">Pilih</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <!-- Muscle Stiffness -->
                            <div class="mb-4">
                                <label for="muscle_stiffness" class="block text-sm font-medium text-gray-700">Muscle Stiffness (Kekakuan otot)</label>
                                <select id="muscle_stiffness" name="muscle_stiffness" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    <option value="">Pilih</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <!-- Alopecia -->
                            <div class="mb-4">
                                <label for="alopecia" class="block text-sm font-medium text-gray-700">Alopecia (Rambut rontok)</label>
                                <select id="alopecia" name="alopecia" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    <option value="">Pilih</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <!-- Obesity -->
                            <div class="mb-4">
                                <label for="obesity" class="block text-sm font-medium text-gray-700">Obesity (Obesitas)</label>
                                <select id="obesity" name="obesity" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    <option value="">Pilih</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="flex justify-end">
                            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Klasifikasikan</button>
                        </div>
                    </form>
                    <!-- Form End -->
                </div>
            </div>
        </div>
    </div>                 
</x-app-layout>
