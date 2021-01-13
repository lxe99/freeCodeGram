@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://www.tutorialspoint.com/laravel/images/laravel-mini-logo.jpg" class="rounded-circle" style="max-width: 160px"/>
        </div>
        <div class="col-9 pt-5">
            <div><h1 style="font-size: 28px">{{$user->username}}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">freeCodeGram.org</div>
            <div>Wew ffsdfdsf fdsfsdf hgfhjf dasdsad gregrgre dsfsdfs fdsfsdfsd fdsfsdfs</div>
            <div><a href="https://qmed.asia">www.qmed.com</a> </div>
        </div>

        <div class="row pt-5">
            <div class="col-4">
                <img src="https://instagram.fkul15-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c180.0.1080.1080a/s640x640/124417780_174359670994048_243959936056086952_n.jpg?_nc_ht=instagram.fkul15-1.fna.fbcdn.net&_nc_cat=104&_nc_ohc=Xr6diNOa3D0AX89QnAk&tp=1&oh=10a9c6670664c749c260e978fb4cbf65&oe=60275D1A" class="w-100">
            </div>
            <div class="col-4">
                <img src="https://instagram.fkul15-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c180.0.1080.1080a/s640x640/124417780_174359670994048_243959936056086952_n.jpg?_nc_ht=instagram.fkul15-1.fna.fbcdn.net&_nc_cat=104&_nc_ohc=Xr6diNOa3D0AX89QnAk&tp=1&oh=10a9c6670664c749c260e978fb4cbf65&oe=60275D1A" class="w-100">
            </div>
            <div class="col-4">
                <img src="https://instagram.fkul15-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c180.0.1080.1080a/s640x640/124417780_174359670994048_243959936056086952_n.jpg?_nc_ht=instagram.fkul15-1.fna.fbcdn.net&_nc_cat=104&_nc_ohc=Xr6diNOa3D0AX89QnAk&tp=1&oh=10a9c6670664c749c260e978fb4cbf65&oe=60275D1A" class="w-100">
            </div>
        </div>
    </div>
</div>
@endsection
