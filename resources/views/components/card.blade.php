<div class="card" style="width: 18rem">
    <img src="{{$img_url}}" class="card-img-top" alt="{{$img_title}} title= {{$img_title}}">
    <div class="card-body">
        <h5 class="card-title">{{$img_title}}</h5>
        {{$slot}}
        <a href="{{$link_btn01}}" class="btn btn-outline-danger" ><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a>
        <a href="{{$link_btn02}}" class="btn btn-outline-success" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Domanda</a>
    </div>
</div>
