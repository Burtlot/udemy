<div class="block-content" style="padding: 30px;box-shadow: 0px 2px 10px rgba(0,0,0,.075);
background-color: #fff;">
    <div class="blog-post" style="padding-bottom: 30px;">
        <div class="row">
            <div class="col-lg-5"><img class="rounded img-fluid" src="{{$img_url}}" /></div>
            <div class="col-lg-7">
                <h3>{{$post_title}}</h3>
                <div class="info">
                    {{$slot}}
                </div>
                {{-- <button class="btn btn-outline-primary btn-sm" type="button">Read More</button>--}}
{{--
                <a href="{{$link_btn01}}" class="btn btn-outline-danger" ><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a>
                <a href="{{$link_btn02}}" class="btn btn-outline-success" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Domanda</a>
--}}
            </div>
        </div>

    </div>
</div>
