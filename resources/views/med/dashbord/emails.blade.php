@extends('med.dashbord.dashboard')
@section('titre','Emails')
@section('section')
<section class="container-fluid">
    <link rel="stylesheet" href="{{asset('css/css.css')}}">
    <!-- @if (session()->get('success'))
        <div class="container alert alert-success mb-3">{{session()->get('success')}} </div>
    @endif -->
    <div class="row">
       
        <div class="col-lg-9 col-md-8">
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
</section>
@endsection
