<x-layout>
    <section>
        <div class="container">
            <div class="flex justify-between items-center ">
                <h1 class="text 2x1 font-semibold">
                    Edit company
                </h1>
                <a href="/company" class="bg-blue-700 rounded text-white px-4 py-2">go back</a>
            </div>
            {{ $company->name }}
        </div>
        <img src="{{asset('images/ss.jpeg')}}" alt="">
        <form action="/update-company/{{ $company->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="grid md:grid-cols-2 gap-5">
                <div>
                    <label for="name">Enter company Name</label>
                    <input value{{ $company->name }}="text" name="name" id="name" class="w-full rounded">
                </div>
                <div>
                    <label for="address">Enter company address</label>
                    <input value{{ $company->address }} type="text" name="address" id="address" class="w-full rounded">
                </div>
                <div>
                    <label for="email">Enter company email</label>
                    <input value{{ $company->email }} type="email" name="email" id="email" class="w-full rounded">
                </div>
                <div>
                    <label for="logo">Enter company logo</label>
                    <input type="file" name="logo" id="logo" class="w-full rounded">
                    <img src="{{ asset(company->logo) }}" class="h[20]" alt="">
                </div>
                <div>
                    <button type="submit" class="bg-green-700 rounded text-white px-4 py-2">Save record</button>
                </div>
            </div>
        </form>
    </section>
</x-layout>
