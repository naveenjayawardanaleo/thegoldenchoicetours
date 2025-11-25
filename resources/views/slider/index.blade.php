<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-between  align-items-center ">
            <h2 class="font-semibold text-xl text-gray-800 ">
                {{ __('Slider') }}
            </h2>
            <a class="btn btn-dark" href="create" >Create slider</a>

        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">


                    <table class="table table-bordered">
                        <tr>
                            <th>Id</th>
{{--                            <th>Category</th>--}}
                            <th>Title</th>
                            <th>Image</th>

                            <th>Action</th>
                        </tr>
                        @foreach($data as $slider)

                            <tr>
                                <td>{{$slider['id']}}</td>
{{--                                <td>--}}

{{--                                    @if($slider['Category']==0)--}}
{{--                                        Day slider--}}

{{--                                    @elseif($slider['Category']==1)--}}
{{--                                        Multi Day--}}
{{--                                    @endif--}}

{{--                                </td>--}}
                                <td>{{$slider['Title']}}</td>
                                <td class=""><img src="{{ asset('storage/' . $slider->image_path) }}" style="width: 100px; "></td>

                                <td>
                                    <a  href="/slider/{{$slider->id}}/edit" class="btn btn-warning">Edit<a/>
                                    <button form="delete-form{{$slider->id}}"  class="btn btn-danger">Delete</button>

                                        <form method="POST" action="/slider/{{$slider->id}}" id="delete-form{{$slider->id}}">
                                            @csrf
                                            @method('DELETE')
                                        </form>


                                </td>
                            </tr>
                        @endforeach

                    </table>

                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

