<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Category') }}
            </h2>
            <a class="blog-btn" href="{{ route('category.create') }}">Add category</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h4 class="mb-4 text-lg font-bold">Show all Catecory</h4>
                    {{-- <div class="mb-6 overflow-x-auto">
                        <table class="w-full whitespace-nowrap">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 border">ID</th>
                                    <th class="px-4 py-2 border">Category Name</th>
                                    <th class="px-4 py-2 border">Status</th>
                                    <th class="px-4 py-2 border">Created At</th>
                                    <th class="px-4 py-2 border">Updated At</th>
                                    <th class="px-4 py-2 border">Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td class="px-4 py-2 border">{{ $loop->index+1 }}</td>
                                    <td class="px-4 py-2 border">{{ $category->name }}</td>
                                    <td class="px-4 py-2 border">{{ $category->status==1? 'Active':'Inactive' }}</td>
                                    <td class="px-4 py-2 border">{{ $category->created_at->format('d M, Y') }}</td>
                                    <td class="px-4 py-2 border">{{ $category->created_at->toDayDateTimeString() }}</td>
                                    <td class="px-4 py-2 border">{{ $category->created_at != $category->updated_at ? $category->updated_at->toDayDateTimeString() : 'Not Updated' }}</td>
                                    <td class="px-4 py-2 text-center border ">
                                        <div class="flex justify-center">
                                            <a class="mr-1" href="{{ route('category.edit', $category->id) }}">@include('components.icons.edit')</a>

                                            <a href="{{ route('category.show', $category->id) }}">@include('components.icons.eye')</a>

                                            <form action="{{ route('category.destroy', $category->id) }}" class="ml-1" onsubmit="return confirm('Are you sure ?')" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">
                                                    @include('components.icons.trash')
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div> --}}

                    <livewire:category-index />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
