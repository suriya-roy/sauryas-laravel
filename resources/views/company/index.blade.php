<x-layout>
    <section>
        <div class="container py-10">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-bold">
                    companies data
                </h1>
                <a href="/company/create" class="bg-blue-700 rounded text-white px-4 py-2">create</a>
            </div>
            <div>
                <table class="w-full text-center border">
                    <thead class="bg-gray-100">
                        <tr>

                            <th class="py- border">Name</th>
                            <th class="py- border">Address</th>
                            <th class="py- border">Email</th>
                            <th class="py- border">Logo</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($companies as $item)
                            <tr>
                                <td class="py- border">{{ $item->name }} </td>
                                <td class="py- border">
                                    {{ $item->address }}
                                </td>
                                <td class="py- border">
                                    {{ $item->email }}
                                </td>
                                <td class="py- border">
                                    <img src="{{ asset($item->logo) }}" alt="">
                                </td>
                                <td class="py-1 border">
                                    <form action="/delete-company/{{ $item->id }}" method="post">
                                        @csrf
                                        @method("delete")
                                      <a href="/edit-company/{{ $item->id }}" class="bg-blue-700 rounded text-white py-2 px-2">
                                        Edit
                                      </a>
                                        <button type="submit" class="bg-red-700 rounded text-white py-2 px-2">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-layout>
