<x-layout>
    <section>
        <div class="container">
            <div class="flex justify-between items-center ">
                <h1 class="text 2x1 font-semibold">
                    create company
                </h1>
                <a href="/company" class="bg-blue-700 rounded text-white px-4 py-2">go back</a>
            </div>
        </div>
        <form action="/save-company" method="post">
            @csrf
            <div class="grid md:grid-cols-2 gap-5">
                <div>
                    <label for="name">Enter company Name</label>
                    <input type="text" name="name" id="name" class="w-full rounded">
                </div>
                <div>
                    <label for="address">Enter company address</label>
                    <input type="text" name="address" id="address" class="w-full rounded">
                </div>
                <div>
                    <label for="email">Enter company email</label>
                    <input type="email" name="email" id="email" class="w-full rounded">
                </div>
                <div>
                    <label for="logo">Enter company logo</label>
                    <input type="file" name="logo" id="logo" class="w-full rounded">
                </div>
                <div>
                    <button type="submit" class="bg-green-700 rounded text-white px-4 py-2">Save record</button>
                </div>
            </div>
        </form>
    </section>
</x-layout>
