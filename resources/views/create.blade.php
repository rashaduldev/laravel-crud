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
            <h1 class="text-3xl font-bold text-gray-800"><a href="/">Home</a></h1>

            <button class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition">
                Added One iteam
            </button>
        </div>

        <!-- Form -->
        <form class="space-y-5">

            <!-- Name -->
            <div>
                <label class="block text-gray-700 font-medium mb-1">Name</label>
                <input 
                    type="text" 
                    placeholder="Enter name"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 outline-none transition"
                >
            </div>

            <!-- Description -->
            <div>
                <label class="block text-gray-700 font-medium mb-1">Description</label>
                <textarea 
                    rows="4"
                    placeholder="Enter description"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 outline-none transition"
                ></textarea>
            </div>

            <!-- Image -->
            <div>
                <label class="block text-gray-700 font-medium mb-1">Upload Image</label>

                <div class="flex items-center justify-center w-full border-2 border-dashed border-gray-300 rounded-lg p-6 cursor-pointer hover:border-blue-500 transition">
                    <span class="text-gray-500">Click to upload or drag & drop</span>
                </div>
            </div>

            <!-- Submit -->
            <div class="pt-4">
                <button 
                    type="button"
                    class="w-full bg-green-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700 transition"
                >
                    Submit
                </button>
            </div>

        </form>

    </div>

</body>
</html>