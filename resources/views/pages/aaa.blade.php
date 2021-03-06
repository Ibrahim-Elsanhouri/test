@extends('layouts.header')

@section('content')
    <div class="reserved" id="reserved">
    <div class="row">
        <br/>
    </div>
    <div class="container">


        <div class="panel panel-default">

            <div class="panel-heading" style="color: #42a104; background-color: #dfebeb;border-color: #ddd;"><h3>Personal information</h3></div>
            <div class="panel-body"  style="color: #42a104;background-color: #f7fbfb">


                <img src="{{asset('web_asset/images/home-picture.png')}}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                <label> الاســم :</label> <span> {{ $user->name }} </span>
                <br/>
                <label> رقم التليفون :</label> <span> {{ $user->mobile }} </span>
                <br/>
                <label> العنوان :</label> <span> {{ $user->area }} - {{ $user->city }} </span>
                <br/>
                <label> تاريخ الميلاد :</label> <span> {{ $user->birth_date }} </span>
                <br/>
                <label> الصفـة :</label> <span> {{ $user->type }} </span>
                <br/>
                <label> عدد الفرق :</label> <span> {{ $user->team }} </span>
                <br/>
                <!--
                <form enctype="multipart/form-data" action="/profile" method="POST">
                    <label>Update Profile Image</label>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                </form> -->
            </div>
            <div class="panel-footer" style="    background-color: #f7fbfb;">

                <a style="color: #4d4d4d;
    text-decoration: none;
    font-size: 17px;"  href="{{ url('/edit-profile/'.$user->id) }}"
                > <span class="glyphicon glyphicon-edit"></span>&nbsp; قـم بتعديل بيانات ملفك الشخصي</a>
            </div>
        </div>

        <div>




            <ul class="list-group">
                <li class="list-group-item" style="color: #42a104; background-color: #dfebeb;border-color: #ddd;">
                    Joined on {{$user->created_at->format('M d,Y \a\t h:i a') }}
                </li>
                <li class="list-group-item panel-body" style="color: #42a104;background-color: #f7fbfb">
                    <table class="table-padding">
                        <style>
                            .table-padding td{
                                padding: 3px 8px;
                            }
                        </style>
                        <tr>
                            <td>Total Posts</td>
                            <td> {{$posts_count}}</td>
                            @if($author && $posts_count)
                                <td><a href="{{ url('/my-all-posts')}}">Show All</a></td>
                            @endif
                        </tr>
                        <tr>
                            <td>Published Posts</td>
                            <td>{{$posts_active_count}}</td>
                            @if($posts_active_count)
                                <td><a href="{{ url('/user/'.$user->id.'/posts')}}">Show All</a></td>
                            @endif
                        </tr>
                        <tr>
                            <td>Posts in Draft </td>
                            <td>{{$posts_draft_count}}</td>
                            @if($author && $posts_draft_count)
                                <td><a href="{{ url('my-drafts')}}">Show All</a></td>
                            @endif
                        </tr>
                    </table>
                </li>
                <li class="list-group-item" style="color: #42a104;background-color: #f7fbfb">
                    Total Comments {{$comments_count}}
                </li>
            </ul>

        </div>


    <div class="panel panel-default">
        <div class="panel-heading" style="color: #42a104; background-color: #dfebeb;border-color: #ddd;"><h3>Latest Posts</h3></div>
        <div class="panel-body"  style="color: #42a104;background-color: #f7fbfb">

            @if(!empty($latest_posts[0]))
                @foreach($latest_posts as $latest_post)
                    <p>
                        <strong><a href="{{ url('/'.$latest_post->slug) }}">{{ $latest_post->title }}</a></strong>
                        <span class="well-sm">On {{ $latest_post->created_at->format('M d,Y \a\t h:i a') }}</span>
                    </p>
                @endforeach
            @else
                <p>You have not written any post till now.</p>
            @endif
        </div>
    </div>
    <div class="panel panel-default">

        <div class="panel-heading" style="color: #42a104; background-color: #dfebeb;border-color: #ddd;"><h3>Latest Comments</h3></div>
        <div class="list-group"  style="color: #42a104;background-color: #f7fbfb">

            @if(!empty($latest_comments[0]))
                @foreach($latest_comments as $latest_comment)
                    <div class="list-group-item">
                        <p>{{ $latest_comment->body }}</p>
                        <p>On {{ $latest_comment->created_at->format('M d,Y \a\t h:i a') }}</p>
                        <p>On post <a href="{{ url('/'.$latest_comment->post->slug) }}">{{ $latest_comment->post->title }}</a></p>
                    </div>
                @endforeach
            @else
                <div class="list-group-item">
                    <p>You have not commented till now. Your latest 5 comments will be displayed here</p>
                </div>
            @endif
        </div>
    </div>
    </div>
    </div>
@endsection