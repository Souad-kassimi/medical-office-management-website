@extends('med.dashbord.base')

@section('titre','Emails')
@section('dashboard')
<div class="table-data">
    <div class="order">
        {{-- <div class="head">
            <h3>LISTES DES EMAILS</h3>
            <i class='bx bx-search' ></i>
            <i class='bx bx-filter' ></i>
        </div> --}}
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                @foreach($emailsBD as $email)
                <tr>
                    <td>
                        
                        <p>{{$email->Nom}}</p>
                    </td>
                    <td>{{$email->Email}}</td>
                    <td><span class="status completed">{{$email->Message}}</span></td>
                </tr>
                @endforeach
                {{-- <tr>
                    <td>
                        <img src="img/people.png">
                        <p>John Doe</p>
                    </td>
                    <td>01-10-2021</td>
                    <td><span class="status pending">Pending</span></td>
                </tr>
                <tr>
                    <td>
                        <img src="img/people.png">
                        <p>John Doe</p>
                    </td>
                    <td>01-10-2021</td>
                    <td><span class="status process">Process</span></td>
                </tr>
                <tr>
                    <td>
                        <img src="img/people.png">
                        <p>John Doe</p>
                    </td>
                    <td>01-10-2021</td>
                    <td><span class="status pending">Pending</span></td>
                </tr>
                <tr>
                    <td>
                        <img src="img/people.png">
                        <p>John Doe</p>
                    </td>
                    <td>01-10-2021</td>
                    <td><span class="status completed">Completed</span></td>
                </tr> --}}
            </tbody>
        </table>
    </div>
    {{-- <div class="todo">
        <div class="head">
            <h3>Todos</h3>
            <i class='bx bx-plus' ></i>
            <i class='bx bx-filter' ></i>
        </div>
        <ul class="todo-list">
            <li class="completed">
                <p>Todo List</p>
                <i class='bx bx-dots-vertical-rounded' ></i>
            </li>
            <li class="completed">
                <p>Todo List</p>
                <i class='bx bx-dots-vertical-rounded' ></i>
            </li>
            <li class="not-completed">
                <p>Todo List</p>
                <i class='bx bx-dots-vertical-rounded' ></i>
            </li>
            <li class="completed">
                <p>Todo List</p>
                <i class='bx bx-dots-vertical-rounded' ></i>
            </li>
            <li class="not-completed">
                <p>Todo List</p>
                <i class='bx bx-dots-vertical-rounded' ></i>
            </li>
        </ul>
    </div>--}}
</div> 
{{-- @section('section')
<section class="container-fluid">
    <link rel="stylesheet" href="{{asset('css/css.css')}}"> --}}
    {{-- @if (session()->get('success'))
        <div class="container alert alert-success mb-3">{{session()->get('success')}} </div>
    @endif  --}}
    {{-- <div class="row">
       
        <div class="col-lg-12 col-md-8">
            <h3 class="text-center">LISTES DES EMAILS</h3>
            <div class="table-responsive">
                <table class="table table-bordered shadow p-3 mb-5 mt-4 bg-body-tertiary rounded">
                    <thead>
                        <tr>
                            <th class="text-center">Nom</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($emailsBD as $email)
                        <tr>
                            <td class="align-middle text-uppercase fw-medium">{{$email->Nom}}</td>
                            <td class="align-middle fw-medium">
                                <a href="#" class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">{{$email->Email}}</a>
                            </td>
                            <td class="align-middle fw-medium msg">" {{$email->Message}} "</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section> --}}
@endsection
