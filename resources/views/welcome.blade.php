<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
        @layer utilities{
            .container{
                @apply px-10 mx-auto
            }
        }
      @theme {
        --color-clifford: #da373d;
      }
    </style>
</head>
<body>
    <div class="w-full max-w-3xl bg-white rounded-2xl shadow-lg p-8 mx-auto">
    <div class="flex items-center justify-between mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Add Item</h1>

            <a href="/create"><button class="bg-blue-600 cursor-pointer text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition">
                + Add
            </button></a>
        </div>
    </div>
</body>
</html>