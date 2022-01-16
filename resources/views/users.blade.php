@extends('template.newtest')
@section('title','Blog')

@section('content')
    <h1>My Blog</h1>
    <x-alert :message="'Ma quanto sei...'" :info="'Ciccio'"/>
    <div class="container">
        <div class="row justify-content-center">
            <div class="row justify-content-center">
                @component('components.blog-post',
                        [
                            'post_title' => 'Image Blog',
                            'img_url' => 'https://picsum.photos/400/300?random=5',
                            'link_btn01' => 'https://picsum.photos/id/238/400/300',
                            'link_btn02' => 'https://picsum.photos/id/239/400/300',
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
