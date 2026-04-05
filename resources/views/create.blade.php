<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Item</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-3xl bg-white rounded-2xl shadow-lg p-8">

        <!-- Header -->
        <div class="flex items-center justify-between mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Create</h1>

            <button class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition">
                <a href="/">Back To Home</a>
            </button>
        </div>

        <!-- Form -->
        <form method="POST" action="{{route('store')}}" class="space-y-5">
            @csrf
            <!-- Name -->
            <div>
                <label class="block text-gray-700 font-medium mb-1">Name</label>
                <input 
                    type="text" 
                    name="name"
                    placeholder="Enter name"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 outline-none transition"
                >
                @error('name')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <!-- Description -->
            <div>
                <label class="block text-gray-700 font-medium mb-1">Description</label>
                <textarea 
                    rows="4"
                    name="description"
                    placeholder="Enter description"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 outline-none transition"
                ></textarea>
                @error('description')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>

           <!-- Image -->
            <div>
                <label class="block text-gray-700 font-medium mb-1">Upload Image</label>

                <label class="flex flex-col items-center justify-center w-full border-2 border-dashed border-gray-300 rounded-lg p-6 cursor-pointer hover:border-blue-500 transition">

                    <!-- Hidden Input -->
                    <input type="file" name="image" class="hidden">

                    <!-- UI -->
                    <svg class="w-10 h-10 text-gray-400 mb-2" fill="none" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 16.5V19a2 2 0 002 2h14a2 2 0 002-2v-2.5M16 12l-4-4m0 0l-4 4m4-4v12"/>
                    </svg>

                    <span class="text-gray-500 text-sm">
                        Click to upload or drag & drop
                    </span>
                </label>
                @error('image')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit -->
            <div class="pt-4">
                <button 
                    type="submit"
                    class="w-full bg-green-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700 transition"
                >
                    Submit
                </button>
            </div>

        </form>

    </div>

</body>
</html>