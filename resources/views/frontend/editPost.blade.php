@extends('frontend.layouts.master')


@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('{{ url('vlog/assets/img/contact-bg.jpg') }}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>Edit Post</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p>VLOG ID : {{ $vlog->id }}</p>
                    <div class="my-5">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <div class="success">{{ $success ?? null }}</div>
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST"
                            action="{{ route('updatePost', $vlog->id) }}">
                            @csrf
                            @method('PATCH')

                            <div class="form-floating">
                                <input class="form-control" id="title" type="text" data-sb-validations="required"
                                    name="title" placeholder="title" value="{{ $vlog->title }}" required />
                                <label for="title">Title</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-floating">
                                <input class="form-control" id="sub-title" type="text" data-sb-validations="required"
                                    name="sub_title" placeholder="Subtitle" value="{{ $vlog->sub_title }}" required />
                                <label for="sub-title">Sub Title</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>

                            <div class="form-floating">
                                <textarea class="form-control" id="message" name="description" placeholder="Enter your message here..."
                                    style="height: 12rem" data-sb-validations="required" required>{{ $vlog->description }}</textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.
                                </div>
                            </div>
                            <br />
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a
                                        href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Error sending message!</div>
                            </div>
                            <!-- Submit Button-->
                            <button class="btn btn-primary text-uppercase " id="submitButton" type="submit">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
