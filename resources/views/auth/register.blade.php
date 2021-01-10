@extends('index')

@section('title')
    Register
@endsection

@section('main')
    <div class="h-screen flex items-center">
        <div class="mx-auto p-6 rounded shadow">
            <h1 class="mdc-typography--headline4 mb-2">Register</h1>

            <form action="{{ route('register') }}" method="POST" novalidate>
                <div class="inline-text-field-container">
                    <label class="mdc-text-field mdc-text-field--filled mdc-text-field--with-leading-icon">
                        <span class="mdc-text-field__ripple"></span>
                        <span class="mdc-floating-label" id="input-email">Email</span>
                        <i class="material-icons mdc-text-field__icon mdc-text-field__icon--leading" tabindex="0" role="button">alternate_email</i>
                        <input
                            class="mdc-text-field__input"
                            type="email"
                            aria-labelledby="input-email"
                            aria-controls="email-helper-text"
                            aria-describedby="email-helper-text"
                            required
                            autofocus
                            autocomplete="email"
                        >
                        <span class="mdc-line-ripple"></span>
                    </label>
                    <div class="mdc-text-field-helper-line">
                        <div id="email-helper-text" class="mdc-text-field-helper-text" aria-hidden="true"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
