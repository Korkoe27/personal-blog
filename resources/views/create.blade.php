<!-- @extends('partials.layout')

@section('title', 'Create A Post')


@section('sidebar')
@parent
@endsection


-->

@section('content') 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Blog - @yield('title')</title>
</head>
<body class="flex">

<nav>
<aside id="default-sidebar" class="top-0 left-0 z-40 w-60 h-full fixed transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidenav">
    <div class="overflow-y-auto py-5 px-3 h-full bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <ul class="space-y-2">
            <li>
                <a href="/" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg aria-hidden="true" class="w-6 h-6 text-gray-400 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                    <span class="ml-3">Home</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/create-post') }}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg aria-hidden="true" class="w-6 h-6 text-gray-400 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                    <span class="ml-3">Create Post</span>
                </a>
            </li>
            <li>
                <a href="" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg aria-hidden="true" class="w-6 h-6 text-gray-400 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                    <span class="ml-3">Drafts</span>
                </a>
            </li>
        </ul>
    </div>
  </aside>
</nav>


        <form action="{{ url('/create-post') }}" method="POST" enctype="multipart/form-data" class="pt-20 pb-10 lg:pt-[120px] lg:pb-20 bg-white dark:bg-dark mx-4 ">
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
                       <textarea rows="5" cols="100" name="description" placeholder="Post" class="w-full bg-transparent rounded-md border border-primary p-5 text-dark-6 outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-gray-2"></textarea>
                    </div>
         </div>

         <div class=" w-full px-4 md:w-1/2 lg:w-1/3 flex flex-wrap">
            <div class="mb-12">
                <label class="mb-[10px] block text-base font-medium text-dark dark:text-[#0E1424]">
                Upload a Photo:
                </label>
                <div class="relative">
                   <input type="file" name="image" class="rounded-md border border-stroke dark:border-dark-3 p-3 text-body-color dark:text-dark-6 outline-none transition file:mr-4 file:rounded file:border-[.5px] file:border-stroke dark:file:border-dark-3 file:bg-gray-2 dark:file:bg-dark-3 file:py-1 file:px-[10px] file:text-sm file:font-medium file:text-dark dark:text-[#0E1424] focus:border-primary file:focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]">
                </div>
             </div> 
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


</body>
</html>
@endsection
<!-- 



@section('footer')
@parent
@endsection -->