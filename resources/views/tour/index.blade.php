<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-between  align-items-center ">
            <h2 class="font-semibold text-xl text-gray-800 ">
                {{ __('Tours') }}
            </h2>
            <a class="btn btn-dark" href="create" >Create Tour</a>

        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">


                    <table class="table table-bordered">
                        <tr>
                            <th>Id</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Image</th>

                            <th>Action</th>
                        </tr>
                        @foreach($tours as $tour)

                            <tr>
                                <td>{{$tour['id']}}</td>
                                <td>

                                    @if($tour['Category']==0)
                                        Day Tour

                                    @elseif($tour['Category']==1)
                                        Multi Day
                                    @endif

                                </td>
                                <td>{{$tour['Title']}}</td>
                                <td class=""><img src="{{ asset('storage/' . $tour->image_path) }}" style="width: 100px; "></td>

                                <td>
                                    <a  href="/tour/{{$tour->id}}/edit" class="btn btn-warning">Edit<a/>
                                    <button form="delete-form{{$tour->id}}"  class="btn btn-danger">Delete</button>

                                        <form method="POST" action="/tour/{{$tour->id}}" id="delete-form{{$tour->id}}">
                                            @csrf
                                            @method('DELETE')
                                        </form>


                                </td>
                            </tr>
                        @endforeach

                    </table>

                    {{ $tours->links() }}
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

