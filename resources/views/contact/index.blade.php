@extends('layouts.layout')
@section('content')
    <h1>Contacto</h1>

    <div class="container py-4">

        <!-- Bootstrap 5 starter form -->
        <form id="contactForm" action="{{ route('sendEmail') }}">


            <!-- Email address input -->
            <div class="mb-3">
                <label class="form-label" for="emailAddress">Email Address</label>
                <input class="form-control" name="emailAddress" type="text" placeholder="Email Address" />
                <span style="color:red">
                    @error('emailAddress')
                        {{ $message }}
                    @enderror
                </span>
                @if (session('error'))
                    <span style="color:red">{{ session('error') }}</span>
                @endif
            </div>

            <!-- Message input -->
            <div class="mb-3">
                <label class="form-label" for="message">Message</label>
                <textarea class="form-control" name="message" type="text" placeholder="Message" style="height: 10rem;"></textarea>
                <span style="color:red">
                    @error('message')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <!-- Form submit button -->
            <div class="mb-3">
                <button class="btn btn-primary btn-lg" type="submit">Send</button>
            </div>

        </form>
        @if (session('exito'))
            <span style="padding:8px; color:#FFF; background:#06571d8a">{{ session('exito') }}</span>
        @endif
    </div>
@endsection
