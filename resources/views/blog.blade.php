@extends('template.newtest')
@section('title','Blog')

@section('content')
    <h1>My Blog</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-3">
                @component('components.card',
                    [
                        'img_title' => 'Image Blog',
                        'img_url' => 'https://picsum.photos/id/237/400/300',
                        'link_btn01' => 'https://picsum.photos/id/238/400/300',
                        'link_btn02' => 'https://picsum.photos/id/239/400/300',
                    ]
                    )
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                @endcomponent
            </div>
            <div class="col-3">
                @component('components.card',
                    [
                        'img_title' => 'My Second Image',
                        'img_url' => 'https://picsum.photos/400/300?random=1',
                        'link_btn01' => 'https://picsum.photos/id/1026/400/300',
                        'link_btn02' => 'https://picsum.photos/id/1027/400/300',
                        ]
                )
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                @endcomponent
            </div>
            <div class="col-3">
                @component('components.card',
                    [
                        'img_title' => 'My Second Image',
                        'img_url' => 'https://picsum.photos/400/300?random=2',
                        'link_btn01' => 'https://picsum.photos/id/1029/400/300',
                        'link_btn02' => 'https://picsum.photos/id/1030/400/300',

                        ]
                )
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                @endcomponent
            </div>
            <div class="col-3">
                @component('components.card',
                    [
                        'img_title' => 'My Second Image',
                        'img_url' => 'https://picsum.photos/400/300?random=3',
                        'link_btn01' => 'https://picsum.photos/id/1032/400/300',
                        'link_btn02' => 'https://picsum.photos/id/1033/400/300',
]
                )
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                @endcomponent
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @parent
    <p style="text-align: center">My Blog</p>
@stop
