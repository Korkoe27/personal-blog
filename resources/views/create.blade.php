@extends('partials.layout')

@section('title', 'Create A Post')


@section('sidebar')
@parent
@endsection




@section('content')




        <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data" class="pt-20 pb-10 lg:pt-[120px] lg:pb-20 bg-white dark:bg-dark mx-4 ">
        @csrf
        

                <div class="flex justify-around flex-col flex-wrap md:flex-row">
                    <div class="mb-12">
                    <label for="post_title" class="mb-[10px] block text-base font-medium text-dark dark:text-[#0E1424]">Title</label>
                    <input type="text" id="post_title" placeholder="Title" name="title" class="bg-transparent rounded-md border border-primary py-[10px] px-5 text-dark-5 outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-gray-2 disabled:border-gray-2" required />
                </div>
                    <div class="mb-12">
                    <label for="" class="mb-[10px] block text-base font-medium text-dark dark:text-[#0E1424]">
                    Author
                    </label>
                    <input type="text" placeholder="Author" name="author" required  class="bg-transparent rounded-md border border-primary py-[10px] px-5 text-dark-5 outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-gray-2 disabled:border-gray-2" />
                </div>
                    <div class="mb-12">
                    <label for="" class="mb-[10px] block text-base font-medium text-dark dark:text-[#0E1424]">
                    Author
                    </label>
                    <input type="text" placeholder="If there's a second author " class="bg-transparent rounded-md border border-primary py-[10px] px-5 text-dark-5 outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-gray-2 disabled:border-gray-2" name="author2" />
                </div>
                    <div class="mb-12">
                       <label for="" class="mb-[10px] block text-base font-medium text-dark dark:text-[#0E1424]">
                       Content
                       </label>
                       <textarea rows="5" cols="100" placeholder="Post" class="w-full bg-transparent rounded-md border border-primary p-5 text-dark-6 outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-gray-2"></textarea>
                    </div>
         </div>

         <div class=" w-full px-4 md:w-1/2 lg:w-1/3 flex flex-wrap">
            {{-- <div class="mb-12">
                <label class="mb-[10px] block text-base font-medium text-dark dark:text-[#0E1424]">
                Upload a Photo:
                </label>
                <div class="relative">
                   <input type="file" name="image" class="rounded-md border border-stroke dark:border-dark-3 p-3 text-body-color dark:text-dark-6 outline-none transition file:mr-4 file:rounded file:border-[.5px] file:border-stroke dark:file:border-dark-3 file:bg-gray-2 dark:file:bg-dark-3 file:py-1 file:px-[10px] file:text-sm file:font-medium file:text-dark dark:text-[#0E1424] focus:border-primary file:focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]">
                </div>
             </div> --}}
             <div class="inline-flex rounded-md shadow-sm" role="group">
                <button type="submit" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                  Post
                </button>
                <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-red-700 focus:z-10 focus:ring-2 focus:ring-white-700 focus:text-white-700 rounded-e-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                  Save to Drafts
                </button>
             </div>

         </div>

        
        </form>













@endsection






@section('footer')
@parent
@endsection