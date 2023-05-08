@extends('layouts.layout')
@section('content_bar')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('assets/images/bg_1.jpg')}}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Materials</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Materials <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>
    <!-- END Banner -->

    <section class="section-m">
        <ul class="categories">
            <li class="list active" data-filter="writing">Writing</li>
            <li class="list" data-filter="reading">Reading</li>
            <li class="list" data-filter="listening">Listening</li>
            <li class="list" data-filter="speaking">Speaking</li>
        </ul>
        <div class="products">
            <!-- Writing -->
            @foreach($materials as $item)
                @if($item->category == 'writing')
                        <?php $id=$item->id;?>
                    <div class="element itemBox1 writing" data-item="writing">
                        <img src="{{asset("storage/$item->image")}}" alt="{{asset('adminaka/images/docs/'.$item->mime.'.svg')}}">
                        <p>{{$item->title}}</p>
                        <p class="mb-0"><small>{{round($item->size/1024/1024,3)}} MB {{$item->mime}}</small></p>
                        <div class="download-button">
                            <svg class="icon" viewBox="0 0 24 24">
                                    <path d="M14 4v4h4v8h-4v4H6v-4H2V8h4V4h8zm-2 0H8v4h4V4zM6 10v8h12v-8H6zm2 2h8v4H8v-4z"></path>
                            </svg>
                            <a href="{{route('download',$id)}}" class="d-text">Download</a>
                            <svg class="loader" viewBox="0 0 50 50">
                                <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
                            </svg>
                        </div>
                    </div>
                @endif
            @endforeach

            <!-- Reading -->
            @foreach($materials as $item)
                @if($item->category == 'reading')
                        <?php $id=$item->id;?>
                    <div class="element itemBox1 reading" data-item="reading">
                        <img src="{{asset("storage/$item->image")}}" alt="{{asset('adminaka/images/docs/'.$item->mime.'.svg')}}">
                        <h5>{{$item->book_name}}</h5>
                        <p>{{$item->title}}</p>
                        <p class="mb-0"><small>{{round($item->size/1024/1024,3)}} MB {{$item->mime}}</small></p>
                        <div class="download-button">
                            <svg class="icon" viewBox="0 0 24 24">
                                <path d="M14 4v4h4v8h-4v4H6v-4H2V8h4V4h8zm-2 0H8v4h4V4zM6 10v8h12v-8H6zm2 2h8v4H8v-4z"></path>
                            </svg>
                            <a href="{{route('download',$id)}}" class="d-text">Download</a>
                            <svg class="loader" viewBox="0 0 50 50">
                                <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
                            </svg>
                        </div>
                    </div>
                @endif
            @endforeach

            <!-- Listening -->
            @foreach($materials as $item)
                @if($item->category == 'listening')
                        <?php $id=$item->id;?>
                    <div class="element itemBox1 listening" data-item="listening">
                        <img src="{{asset("storage/$item->image")}}" alt="{{asset('adminaka/images/docs/'.$item->mime.'.svg')}}">
                        <h5>{{$item->book_name}}</h5>
                        <p>{{$item->title}}</p>
                        <p class="mb-0"><small>{{round($item->size/1024/1024,3)}} MB {{$item->mime}}</small></p>
                        <div class="download-button">
                            <svg class="icon" viewBox="0 0 24 24">
                                <path d="M14 4v4h4v8h-4v4H6v-4H2V8h4V4h8zm-2 0H8v4h4V4zM6 10v8h12v-8H6zm2 2h8v4H8v-4z"></path>
                            </svg>
                            <a href="{{route('download',$id)}}" class="d-text">Download</a>
                            <svg class="loader" viewBox="0 0 50 50">
                                <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
                            </svg>
                        </div>
                    </div>
                @endif
            @endforeach

            <!-- Speaking -->
            @foreach($materials as $item)
                @if($item->category == 'speaking')
                        <?php $id=$item->id;?>
                    <div class="element itemBox1 speaking" data-item="speaking">
                        <img src="{{asset("storage/$item->image")}}" alt="{{asset('adminaka/images/docs/'.$item->mime.'.svg')}}">
                        <h5>{{$item->book_name}}</h5>
                        <p>{{$item->title}}</p>
                        <p class="mb-0"><small>{{round($item->size/1024/1024,3)}} MB {{$item->mime}}</small></p>
                        <div class="download-button">
                            <svg class="icon" viewBox="0 0 24 24">
                                <path d="M14 4v4h4v8h-4v4H6v-4H2V8h4V4h8zm-2 0H8v4h4V4zM6 10v8h12v-8H6zm2 2h8v4H8v-4z"></path>
                            </svg>
                            <a href="{{route('download',$id)}}" class="d-text">Download</a>
                            <svg class="loader" viewBox="0 0 50 50">
                                <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
                            </svg>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </section>

    <script>
        const categories = document.querySelectorAll('.categories li');
        const elements = document.querySelectorAll('.products .element');
        const firstCategoryElements = document.querySelectorAll('.products .writing');

        // Hide all elements
        elements.forEach(element => {
            if (!element.classList.contains('writing')) {
                element.style.display = 'none';
            }
        });

        categories.forEach(category => {
            category.addEventListener('click', () => {
                const selectedCategory = category.getAttribute('data-filter');
                elements.forEach(element => {
                    if (element.classList.contains(selectedCategory)) {
                        element.style.display = 'block';
                    } else {
                        element.style.display = 'none';
                    }
                });
                if (selectedCategory === 'writing') {
                    firstCategoryElements.forEach(element => {
                        element.style.display = 'block';
                    });
                } else {
                    firstCategoryElements.forEach(element => {
                        element.style.display = 'none';
                    });
                }
                categories.forEach(c => {
                    c.classList.remove('active');
                });
                category.classList.add('active');
            });
        });

        //Download button Js
        const downloadButton = document.querySelector('.download-button');

        downloadButton.addEventListener('click', () => {
            downloadButton.querySelector('.icon').style.display = 'none';
            downloadButton.querySelector('.text').style.display = 'none';
            downloadButton.querySelector('.loader').style.display = 'block';
            setTimeout(() => {
                downloadButton.querySelector('.icon').style.display = 'block';
                downloadButton.querySelector('.text').style.display = 'block';
                downloadButton.querySelector('.loader').style.display = 'none';
            }, 3000);
        });
    </script>
@endsection
